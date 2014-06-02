<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('cidades');
__autoload('noticias');
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
    case 'listar':
        $headerdados = '<tr>
                <th>Noticia</th>
                <th>Descrição</th>
                <th>Acessos</th>
                <th width="65px">  Ações  </th>             
            </tr>';

        $smarty->assign('headerdados', $headerdados);

        $Listar = new noticias();
        $Listar->selecionaTudo($Listar);
        $dados = '';
        while ($res = $Listar->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->titulo . '</td>';
            $dados .= '<td>' . $res->descricao . '</td>';
            $dados .= '<td>' . $res->acessos . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=editar&id=' . $res->idnoticias . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=excluir&id=' . $res->idnoticias . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
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
            $noticia = new noticias(array(
                'noticias' => $_POST['noticias'],
                'idcategoria' => $_POST['idcategoria'],
                'keywords' => $_POST['keywords'],
                'metakey' => $_POST['metakey'],
                'tags' => $_POST['tags'],
                'data' => $_POST['data'],
                'img' => $_POST['img'],
                'titulo' => $_POST['titulo'],
                'subtitulo' => $_POST['subtitulo'],
                'descricao' => $_POST['descricao'],
            ));

            $noticia->inserir($noticia);
            if ($noticia->getLinhasAfetadas() == '1'):
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
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Nova Noticia'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Noticia'));
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
                $noticia = new noticias(array(
                    'noticias' => $_POST['noticias'],
                    'idcategoria' => $_POST['idcategoria'],
                    'keywords' => $_POST['keywords'],
                    'metakey' => $_POST['metakey'],
                    'tags' => $_POST['tags'],
                    'data' => $_POST['data'],
                    'img' => $_POST['img'],
                    'titulo' => $_POST['titulo'],
                    'subtitulo' => $_POST['subtitulo'],
                    'descricao' => $_POST['descricao'],
                ));
                $noticia->setValorPK($id);

                $noticia->atualizar($noticia);
                if ($noticia->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Dados alterados com sucesso! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum dado foi alterado! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;

            endif;

            $noticiabd = new noticias();
            $noticiabd->setExtrasSelect("WHERE idnoticias=$id");
            $noticiabd->selecionaTudo($noticiabd);
            $resbd = $noticiabd->RetornaDados('array');
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
                $noticias = new noticias();
                $noticias->setValorPK($id);
                $noticias->deletar($noticias);
                if ($noticias->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Registro excluidos com sucesso! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum registro foi excluido! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;
            endif;

            $noticiabd = new noticias();
            $noticiabd->setExtrasSelect("WHERE idnoticias=$id");
            $noticiabd->selecionaTudo($noticiabd);
            $resbd = $noticiabd->RetornaDados('array');

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