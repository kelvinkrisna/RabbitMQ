<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('catprovas');
__autoload('provas');
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
                <th>Prova</th>
                <th>Descrição</th>
                <th>Categoria</th>                
                <th>Acessos</th>
                <th width="65px">  Ações  </th>             
            </tr>';

        $smarty->assign('headerdados', $headerdados);

        $Listar = new provas();
        $Listar->selecionaTudo($Listar);
        $dados = '';
        while ($res = $Listar->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->titulo . '</td>';
            $dados .= '<td>' . $res->descricao . '</td>';
            $categoria = new catprovas();
            $categoria->setExtrasSelect("where idcategoprovas =$res->categ");
            $categoria->selecionaTudo($categoria);
            $categoriadados = $categoria->RetornaDados();
            $dados .= '<td>' . $categoriadados->categoria . '</td>';
            $dados .= '<td>' . $res->acessos . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=editar&id=' . $res->idprovas . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=excluir&id=' . $res->idprovas . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Consultar Provas'));
        $smarty->assign('titulotela', utf8_decode('Listar de Provas'));
        $smarty->display('crud/find.tpl');

        break;
    case 'incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            if ($_FILES['prova']['type'] === 'application/pdf'):
                $uploadfileprova = UPLOADPATH . '/' . $_POST['categ'] . '/' . $_FILES['prova']['name'];
                $urlprova = UPLOADURL . $_POST['categ'] . '/' . $_FILES['prova']['name'];
            endif;

            if ($_FILES['gabarito']['type'] === 'application/pdf'):
                $uploadfilegabarito = UPLOADPATH . '/' . $_POST['categ'] . '/' . $_FILES['gabarito']['name'];
                $urlgabarito = UPLOADURL . $_POST['categ'] . '/' . $_FILES['gabarito']['name'];
            endif;

            if (!move_uploaded_file($_FILES['prova']['tmp_name'], $uploadfileprova)):
                $smarty->assign('msg', PrintMSG('Erro no upload do arquivo de provas'));
                unset($_POST);
            endif;

            if (!move_uploaded_file($_FILES['gabarito']['tmp_name'], $uploadfilegabarito)):
                $smarty->assign('msg', PrintMSG('Erro no upload do arquivo de provas'));
                unset($_POST);
            endif;

            if (isset($_POST)):
                $provas = new provas(array(
                    'titulo' => $_POST['titulo'],
                    'descricao' => $_POST['descricao'],
                    'categ' => $_POST['categ'],
                    'prova' => $urlprova,
                    'gabarito' => $urlgabarito,
                ));
                if ($duplicado != TRUE):
                    $provas->inserir($provas);
                    if ($provas->getLinhasAfetadas() == '1'):
                        $smarty->assign('msg', PrintMSG('Dados inseridos com sucesso!'));
                        unset($_POST);
                    else :
                        $smarty->assign('confirmacao', '');
                    endif;
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
        $script .= 'titulo:{required:true, minlength:3},';
        $script .= 'descricao:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t));


        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Nova Prova'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Provas'));
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
                $provas = new provas(array(
                    'titulo' => $_POST['titulo'],
                    'descricao' => $_POST['descricao'],
                    'prova' => $_POST['prova'],
                    'gabarito' => $_POST['gabarito']
                ));
                $provas->setValorPK($id);

                $provas->atualizar($provas);
                if ($provas->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Dados alterados com sucesso! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum dado foi alterado! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;

            endif;

            $provasbd = new provas();
            $provasbd->setExtrasSelect("WHERE idprovas=$id");
            $provasbd->selecionaTudo($provasbd);
            $resbd = $provasbd->RetornaDados('array');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Prova não definida, <a href="?m=usuarios' . $modulo . '&t=listar">escolha uma prova para alterar </a> ', 'erro'));
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
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Editar Provas'));
        $smarty->assign('titulotela', utf8_decode('Editar Provas'));
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
                $provas = new provas();
                $provas->setValorPK($id);
                $provas->deletar($provas);
                if ($provas->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Registro excluidos com sucesso! <a href="?m='.$modulo.'&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum registro foi excluido! <a href="?m='.$modulo.'&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;
            endif;

            $provasbd = new provas();
            $provasbd->setExtrasSelect("WHERE idprovas=$id");
            $provasbd->selecionaTudo($provasbd);
            $resbd = $provasbd->RetornaDados('array');

            $t = new telainsert();
            $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

            include('sidebar.php');
            $smarty->assign('titulo', utf8_decode('ViConcursos - Excluir Provas'));
            $smarty->assign('titulotela', utf8_decode('Excluir Provas'));
            $smarty->assign('modulo', $modulo);
            $smarty->assign('tela', 'listar');
            $smarty->display('crud/delete.tpl');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Prova não definida, <a href="?m='.$modulo.'&t=listar">escolha um usuário para excluir </a> ', 'erro'));
        endif;
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>