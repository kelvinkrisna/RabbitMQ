<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('cidades');
__autoload('concursos');
__autoload('telainsert');
protegearquivo(basename(__FILE__));

//Carrego os CSS;
$listcss = array();
array_push($listcss, loadCSS('reset'));
array_push($listcss, loadCSS('style'));
array_push($listcss, loadCSS('data-table'));

//Carrego os JS;
$listjs = array();
array_push($listjs, loadJS('jquery'));
array_push($listjs, loadJS('geral'));
array_push($listjs, loadJS('jquery-validate'));
array_push($listjs, loadJS('jquery-validate-messages'));
array_push($listjs, loadJS('tiny_mce'));

$smarty = new Smarty();
$smarty->assign('css', $listcss);
$smarty->assign('js', $listjs);

switch ($tela):
    case 'categoria':
        $headerdados = '<tr>
                <th>Id</th>
                <th>Descrição da categoria</th>
                <th width="65px">  Ações  </th>             
            </tr>';
        $smarty->assign('headerdados', $headerdados);

        $categoria = new catprovas();
        $categoria->selecionaTudo($categoria);
        $dados = '';
        while ($res = $categoria->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->idcategoprovas . '</td>';
            $dados .= '<td>' . $res->categoria . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=catincluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=cateditar&id=' . $res->idcategoprovas . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=catexcluir&id=' . $res->idcategoprovas . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Gerenciamento Provas'));
        $smarty->assign('titulotela', utf8_decode('Categorias Provas'));
        $smarty->display('crud/find.tpl');
        break;
    case 'catincluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            $categoria = new catprovas(array(
                'categoria' => $_POST['categoria'],
                'keytag' => $_POST['keytag'],
                'meta' => $_POST['meta'],
            ));
            $duplicado = FALSE;
            if ($categoria->existeRegistro('categoria', $_POST['categoria'])):
                $smarty->assign('msg', PrintMSG('Esta categoria j&aacute; est&aacute; cadastrado, escolha outro nome de categoria!', 'erro'));
                $duplicado = TRUE;
            endif;
            if ($duplicado != TRUE):
                $categoria->inserir($categoria);
                if ($categoria->getLinhasAfetadas() == '1'):
                    $smarty->assign('msg', PrintMSG('Dados inseridos com sucesso!'));
                    unset($_POST);
                else :
                    $smarty->assign('confirmacao', '');
                endif;
            endif;
        else:
            $smarty->assign('confirmacao', '');
        endif;


        /* Script validação */
        $script = '<script type="text/javascript">';
        $script .= '$(document).ready(function() { ';
        $script .= '$(".userform").validate({';
        $script .= 'rules:{';
        $script .= 'categoria:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t));


        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Novos Usu&aacute;rios'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Usu&aacute;rios'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'categoria');
        $smarty->display('crud/insert.tpl');

        break;
    case 'cateditar':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isset($_GET['id'])):
            $id = $_GET['id'];
            if (isset($_POST['editar'])):
                $user = new usuarios(array(
                    'categoria' => $_POST['categoria'],
                    'keytag' => $_POST['keytag'],
                    'meta' => $_POST['meta'],
                ));
                $categoria->setValorPK($id);
                $categoria->setExtrasSelect("WHERE idcategoprovas=$id");
                $categoria->selecionaCampos($categoria);
                $res = $categoria->RetornaDados();
                if ($res->categoria != $_POST['categoria']):
                    if ($user->existeRegistro('categoria', $_POST['categoria'])):
                        $smarty->assign('msg', PrintMSG('Esta Categoria j&aacute; est&aacute; cadastrado, escolha outro nome de categoria', 'erro'));
                        $duplicado = TRUE;
                    endif;
                endif;

                if ($duplicado != TRUE):
                    $user->atualizar($user);
                    if ($user->getLinhasAfetadas() == 1):
                        $smarty->assign('msg', PrintMSG('Dados alterados com sucesso! <a href="?m=' . $modulo . '&t=Categoria">Exibir Cadastros </a>'));
                        unset($_POST);
                    else:
                        $smarty->assign('msg', PrintMSG('Nenhum dado foi alterado! <a href="?m=' . $modulo . '&t=Categoria">Exibir Cadastros </a>', 'alerta'));
                    endif;
                endif;
            endif;

            $categoriabd = new catprovas();
            $categoriabd->setExtrasSelect("WHERE idcategoprovas=$id");
            $categoriabd->selecionaTudo($categoriabd);
            $resbd = $categoriabd->RetornaDados('array');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Categoria não definida, <a href="?m=' . $modulo . '&t=Categoria">escolha uma categoria para alterar </a> ', 'erro'));
        endif;


        /* Script validação */
        $script = '<script type="text/javascript">';
        $script .= '$(document).ready(function() { ';
        $script .= '$(".userform").validate({';
        $script .= 'rules:{';
        $script .= 'categoria:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Editar Categoria Provas'));
        $smarty->assign('titulotela', utf8_decode('Editar Categoria Provas'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'categoria');
        $smarty->display('crud/edit.tpl');

        break;
    case 'catexcluir':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isset($_GET['id'])):
            $id = $_GET['id'];
            if (isset($_POST['excluir'])):
                $Categoria = new catprovas();
                $Categoria->setValorPK($id);
                $Categoria->deletar($Categoria);
                if ($Categoria->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Registro excluidos com sucesso! <a href="?m=' . $modulo . '&t=categoria">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum registro foi excluido! <a href="?m=usuarios' . $modulo . '&t=categoria">Exibir Cadastros </a>', 'alerta'));
                endif;
            endif;

            $Categoriabd = new catprovas();
            $Categoriabd->setExtrasSelect("WHERE idcategoprovas=$id");
            $Categoriabd->selecionaTudo($Categoriabd);
            $resbd = $Categoriabd->RetornaDados('array');

            $t = new telainsert();
            $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

            include('sidebar.php');
            $smarty->assign('titulo', utf8_decode('ViConcursos - Excluir Categoria Provas'));
            $smarty->assign('titulotela', utf8_decode('Excluir Categoria Provas'));
            $smarty->assign('modulo', $modulo);
            $smarty->assign('tela', 'categoria');
            $smarty->display('crud/delete.tpl');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Usuário não definido, <a href="?m=usuarios&t=listar">escolha um usuário para excluir </a> ', 'erro'));
        endif;
        break;
    case 'listar':
        $headerdados = '<tr>
                <th>Concurso</th>
                <th>Descrição</th>
                <th>Fim inscrições</th>                
                <th>Regiao</th>                
                <th>Acessos</th>
                <th width="65px">  Ações  </th>             
            </tr>';

        $smarty->assign('headerdados', $headerdados);

        $Listar = new concursos();
        $Listar->selecionaTudo($Listar);
        $dados = '';
        while ($res = $Listar->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->titulo . '</td>';
            $dados .= '<td>' . $res->subtitulo . '</td>';
            $dados .= '<td>' . $res->inscricoesfim . '</td>';
            if (($res->idcidade === '')||($res->idcidade == NULL)):
                $res->idcidade = '0';
            endif;
            $categoria = new cidades();
            $categoria->setExtrasSelect("where idcidades =$res->idcidade");
            $categoria->selecionaTudo($categoria);
            $categoriadados = $categoria->RetornaDados();
            if (isset($categoriadados->cidade)):
                $dados .= '<td>' . $categoriadados->cidade . '</td>';
            else:
                $dados .= '<td> Sem estado.</td>';
            endif;
            
            $dados .= '<td>' . $res->acessos . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=editar&id=' . $res->idconcursos . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=excluir&id=' . $res->idconcursos . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Consultar Concursos'));
        $smarty->assign('titulotela', utf8_decode('Listar de Concursos'));
        $smarty->display('crud/find.tpl');

        break;
    case 'incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            $concursos = new concursos(array(
                'titulo' => $_POST['titulo'],
                'subtitulo' => $_POST['subtitulo'],
                'data' => $_POST['data'],
                'concurso' => $_POST['concurso'],
                'idcategoria' => $_POST['idcategoria'],
                'regiao' => $_POST['regiao'],
                'idcidade' => $_POST['idcidade'],
                'keywords' => $_POST['keywords'],
                'metakey' => $_POST['metakey'],
                'tags' => $_POST['tags'],
                'inscricoes' => $_POST['inscricoes'],
                'edital' => $_POST['edital'],
                'vagas' => $_POST['vagas'],
                'inscricoesfim' => $_POST['inscricoesfim'],
            ));

            $enviaemail = ($_POST['adm'] == 'on') ? 'TRUE' : 'FALSE';
            
            $concursos->inserir($concursos, $enviaemail);
            if ($concursos->getLinhasAfetadas() == '1'):
                $smarty->assign('msg', PrintMSG('Dados inseridos com sucesso!'));
                unset($_POST);
            else :
                $smarty->assign('confirmacao', '');
            endif;


        else:
            $smarty->assign('confirmacao', '');
        endif;

        /* Script validação */
        $script = '<script type="text/javascript">';
        $script .= '$(document).ready(function() { ';
        $script .= '$(".userform").validate({';
        $script .= 'rules:{';
        $script .= 'titulo:{required:true, minlength:3},';
        $script .= 'descricao:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $script .= '<script type="text/javascript">';

        $script .= 'tinyMCE.init({';
        $script .= '	mode : "textareas",';
        $script .= '	theme : "advanced",';
        $script .= '	plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",';

        $script .= '	theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",';
        $script .= '    theme_advanced_buttons2 : "search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",';
        $script .= '	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",';
        $script .= '	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",';
        $script .= '    theme_advanced_toolbar_location : "top",';
        $script .= '	theme_advanced_toolbar_align : "left",';
        $script .= '	theme_advanced_statusbar_location : "bottom",';
        $script .= '	theme_advanced_resizing : true,';

        $script .= '	content_css : "' . BASEURL . 'content.css",';

        $script .= '	style_formats : [';
        $script .= '		{title : \'Bold text\', inline : \'b\'},';
        $script .= '		{title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},';
        $script .= '		{title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},';
        $script .= '		{title : \'Example 1\', inline : \'span\', classes : \'example1\'},';
        $script .= '		{title : \'Example 2\', inline : \'span\', classes : \'example2\'},';
        $script .= '		{title : \'Table styles\'},';
        $script .= '		{title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}';
        $script .= '	],';

        $script .= '	template_replace_values : {';
        $script .= '		username : "Some User",';
        $script .= '		staffid : "991234"';
        $script .= '	}';
        $script .= '});';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Novo Concurso'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Concurso'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'listar');
        $smarty->display('crud/insert.tpl');
        break;
    case 'editar':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isset($_GET['id'])):
            $id = $_GET['id'];
            if (isset($_POST['editar'])):
                $concursos = new concursos(array(
                    'titulo' => $_POST['titulo'],
                    'subtitulo' => $_POST['subtitulo'],
                    'data' => $_POST['data'],
                    'concurso' => $_POST['concurso'],
                    'idcategoria' => $_POST['idcategoria'],
                    'regiao' => $_POST['regiao'],
                    'idcidade' => $_POST['idcidade'],
                    'keywords' => $_POST['keywords'],
                    'metakey' => $_POST['metakey'],
                    'tags' => $_POST['tags'],
                    'inscricoes' => $_POST['inscricoes'],
                    'edital' => $_POST['edital'],
                    'vagas' => $_POST['vagas'],
                    'inscricoesfim' => $_POST['inscricoesfim'],
                ));
                $concursos->setValorPK($id);

                $concursos->atualizar($concursos);
                if ($concursos->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Dados alterados com sucesso! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum dado foi alterado! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;

            endif;

            $concursobd = new concursos();
            $concursobd->setExtrasSelect("WHERE idconcursos=$id");
            $concursobd->selecionaTudo($concursobd);
            $resbd = $concursobd->RetornaDados('array');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Concurso não definido, <a href="?m=' . $modulo . '&t=listar">escolha uma prova para alterar </a> ', 'erro'));
        endif;


        /* Script validação */
        $script = '<script type="text/javascript">';
        $script .= '$(document).ready(function() { ';
        $script .= '$(".userform").validate({';
        $script .= 'rules:{';
        $script .= 'titulo:{required:true, minlength:3},';
        $script .= 'descricao:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $script .= '<script type="text/javascript">';

        $script .= 'tinyMCE.init({';
        $script .= '	mode : "textareas",';
        $script .= '	theme : "advanced",';
        $script .= '	plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",';

        $script .= '	theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",';
        $script .= '    theme_advanced_buttons2 : "search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",';
        $script .= '	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",';
        $script .= '	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",';
        $script .= '    theme_advanced_toolbar_location : "top",';
        $script .= '	theme_advanced_toolbar_align : "left",';
        $script .= '	theme_advanced_statusbar_location : "bottom",';
        $script .= '	theme_advanced_resizing : true,';

        $script .= '	content_css : "' . BASEURL . 'content.css",';

        $script .= '	style_formats : [';
        $script .= '		{title : \'Bold text\', inline : \'b\'},';
        $script .= '		{title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},';
        $script .= '		{title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},';
        $script .= '		{title : \'Example 1\', inline : \'span\', classes : \'example1\'},';
        $script .= '		{title : \'Example 2\', inline : \'span\', classes : \'example2\'},';
        $script .= '		{title : \'Table styles\'},';
        $script .= '		{title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}';
        $script .= '	],';

        $script .= '	template_replace_values : {';
        $script .= '		username : "Some User",';
        $script .= '		staffid : "991234"';
        $script .= '	}';
        $script .= '});';
        $script .= '    </script>';

        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Editar Concursos'));
        $smarty->assign('titulotela', utf8_decode('Editar Concursos'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'listar');
        $smarty->display('crud/edit.tpl');
        break;
    case 'excluir':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isset($_GET['id'])):
            $id = $_GET['id'];
            if (isset($_POST['excluir'])):
                $concursos = new concursos();
                $concursos->setValorPK($id);
                $concursos->deletar($provas);
                if ($concursos->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Registro excluidos com sucesso! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum registro foi excluido! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;
            endif;

            $concursosbd = new concursos();
            $concursosbd->setExtrasSelect("WHERE idconcursos=$id");
            $concursosbd->selecionaTudo($concursosbd);
            $resbd = $concursosbd->RetornaDados('array');

            $t = new telainsert();
            $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

            include('sidebar.php');
            $smarty->assign('titulo', utf8_decode('ViConcursos - Excluir Concursos'));
            $smarty->assign('titulotela', utf8_decode('Excluir Concursos'));
            $smarty->assign('modulo', $modulo);
            $smarty->assign('tela', 'listar');
            $smarty->display('crud/delete.tpl');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Prova não definida, <a href="?m=' . $modulo . '&t=listar">escolha um usuário para excluir </a> ', 'erro'));
        endif;
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>