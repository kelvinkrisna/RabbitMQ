<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('usuarios');
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
    case 'login':
        $sessao = new sessao();
        if ($sessao->getNvar() > 0 || $sessao->getValor('logado') == TRUE):
            redireciona('painel.php');
        endif;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            if (isset($_POST['logar'])):
                $user = new usuarios();
                $user->setValor('login', $_POST['usuario']);
                $user->setValor('senha', $_POST['senha']);
                if ($user->doLogin($user)):
                    redireciona('painel.php');
                else:
                    redireciona('?erro=2');
                endif;
            endif;
        endif;

        $smarty->assign('usuario', ' ');
        $smarty->assign('senha', ' ');
        $smarty->assign('titulo', 'ViConcursos - Login');
        $smarty->assign('url', BASEURL);
        if (isset($_GET['erro'])):
            $erro = $_GET['erro'];
            switch ($erro):
                case 1:
                    $trataerro = '<div class="sucesso"> Voc&ecirc; fez logoff do sistema.</div>';
                    break;
                case 2:
                    $trataerro = '<div class="erro">Dados incorretos ou usu&aacute;rio inativo.</div>';
                    break;
                case 3:
                    $trataerro = '<div class="erro">Fa&ccedil;a login antes de acessar a pagina solicitada.</div>';
                    break;
            endswitch;
            $smarty->assign('trataerro', $trataerro);
        endif;

        $smarty->display('login.tpl');
        break;
    case 'incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isAdmin() == FALSE):
            $msg = 'Sem permissão para esta tela.';
            include('sidebar.php');
            $smarty->assign('msg', $msg);
            $smarty->assign('titulo', utf8_decode('ViConcursos - Acesso Negado'));
            $smarty->assign('titulotela', utf8_decode('Sem permissão para acessar a tela!'));
            $smarty->display('permissao.tpl');
        else:
            if (isset($_POST['cadastrar'])):
                $user = new usuarios(array(
                    'nome' => $_POST['nome'],
                    'email' => $_POST['email'],
                    'login' => $_POST['login'],
                    'senha' => codificaSenha($_POST['senha']),
                    'administrador' => ($_POST['adm'] == 'on') ? 's' : 'n',
                ));
                $duplicado = FALSE;
                if ($user->existeRegistro('login', $_POST['login'])):
                    $smarty->assign('msg', PrintMSG('Este login j&aacute; est&aacute; cadastrado, escolha outro nome de usuario!', 'erro'));
                    $duplicado = TRUE;
                endif;
                if ($user->existeRegistro('email', $_POST['email'])):
                    $smarty->assign('msg', PrintMSG('Este email j&aacute; est&aacute; cadastrado, escolha outro nome de usuario', 'erro'));
                    $duplicado = TRUE;
                endif;
                if ($duplicado != TRUE):
                    $user->inserir($user);
                    if ($user->getLinhasAfetadas() == '1'):
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
            $script .= 'nome:{required:true, minlength:3},';
            $script .= 'email:{required:true, email:true},';
            $script .= 'senha:{required:true, rangelength:[4,10]},';
            $script .= 'senhaconf:{required:true, equalTo:"#senha"},';
            $script .= 'login:{required:true, minlength:5}';
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
            $smarty->assign('tela', 'listar');
            $smarty->display('crud/insert.tpl');
        endif;
        break;
    case 'listar':
        $headerdados = '<tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Login</th>
                <th>Ativo / Adm</th>
                <th>Cadastro</th>
                <th width="65px">  Ações  </th>             
            </tr>';

        $smarty->assign('headerdados', $headerdados);

        $user = new usuarios();
        $user->selecionaTudo($user);
        $dados = '';
        while ($res = $user->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->Nome . '</td>';
            $dados .= '<td>' . $res->email . '</td>';
            $dados .= '<td>' . $res->login . '</td>';
            $dados .= '<td class="center">' . strtoupper($res->ativo) . '/' . strtoupper($res->administrador) . '</td>';
            $dados .= '<td class="center">' . date("d/m/y", strtotime($res->datacad)) . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=usuarios&t=incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=usuarios&t=editar&id=' . $res->id . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=usuarios&t=senha&id=' . $res->id . '" title="Mudar Senha"><img src="img/pass.png" alt="Mudar Senha" /></a> ';
            $dados .= '<a href="?m=usuarios&t=excluir&id=' . $res->id . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Consultar Usu&aacute;rios'));
        $smarty->assign('titulotela', utf8_decode('Lista de Usu&aacute;rios'));
        $smarty->display('crud/find.tpl');

        break;
    case 'editar':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isAdmin() == TRUE || $sessao->getValor('iduser') == $_GET['id']):
            if (isset($_GET['id'])):
                $id = $_GET['id'];
                if (isset($_POST['editar'])):
                    $user = new usuarios(array(
                        'nome' => $_POST['nome'],
                        'email' => $_POST['email'],
                        'ativo' => ($_POST['ativo'] == 'on') ? 's' : 'n',
                        'administrador' => ($_POST['adm'] == 'on') ? 's' : 'n',
                    ));
                    $user->setValorPK($id);
                    $user->setExtrasSelect("WHERE id=$id");
                    $user->selecionaCampos($user);
                    $res = $user->RetornaDados();
                    if ($res->email != $_POST['email']):
                        if ($user->existeRegistro('email', $_POST['email'])):
                            $smarty->assign('msg', PrintMSG('Este email j&aacute; est&aacute; cadastrado, escolha outro nome de usuario', 'erro'));
                            $duplicado = TRUE;
                        endif;
                    endif;

                    if ($duplicado != TRUE):
                        $user->atualizar($user);
                        if ($user->getLinhasAfetadas() == 1):
                            $smarty->assign('msg', PrintMSG('Dados alterados com sucesso! <a href="?m=usuarios&t=listar">Exibir Cadastros </a>'));
                            unset($_POST);
                        else:
                            $smarty->assign('msg', PrintMSG('Nenhum dado foi alterado! <a href="?m=usuarios&t=listar">Exibir Cadastros </a>', 'alerta'));
                        endif;
                    endif;
                endif;

                $userbd = new usuarios();
                $userbd->setExtrasSelect("WHERE id=$id");
                $userbd->selecionaTudo($userbd);
                $resbd = $userbd->RetornaDados('array');
            else:
                /* Avisa para selecionar um user */
                $smarty->assign('msg', PrintMSG('Usuário não definido, <a href="?m=usuarios&t=listar">escolha um usuário para alterar </a> ', 'erro'));
            endif;


            /* Script validação */
            $script = '<script type="text/javascript">';
            $script .= '$(document).ready(function() { ';
            $script .= '$(".userform").validate({';
            $script .= 'rules:{';
            $script .= 'nome:{required:true, minlength:3},';
            $script .= 'email:{required:true, email:true},';
            $script .= '               }';
            $script .= '            });';
            $script .= '         });';
            $script .= '    </script>';
            $smarty->assign('script', $script);

            $t = new telainsert();
            $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

            include('sidebar.php');
            $smarty->assign('titulo', utf8_decode('ViConcursos - Editar Usu&aacute;rio'));
            $smarty->assign('titulotela', utf8_decode('Editar Usu&aacute;rios'));
            $smarty->assign('modulo', $modulo);
            $smarty->assign('tela', 'listar');
            $smarty->display('crud/edit.tpl');
        else:
            $msg = 'Você não ter permissão para alterar esta página. <a href="#" onclick="history.back()">Voltar</a>';
            include('sidebar.php');
            $smarty->assign('msg', PrintMSG($msg, 'erro'));
            $smarty->assign('titulo', utf8_decode('ViConcursos - Acesso Negado'));
            $smarty->assign('titulotela', utf8_decode('Sem permissão para acessar a tela!'));
            $smarty->display('permissao.tpl');
        endif;
        break;
    case 'senha':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isAdmin() == TRUE || $sessao->getValor('iduser') == $_GET['id']):
            if (isset($_GET['id'])):
                $id = $_GET['id'];
                if (isset($_POST['senha'])):
                    $user = new usuarios(array(
                        'senha' => codificaSenha($_POST['senha'])
                    ));
                    $user->setValorPK($id);
                    $user->atualizar($user);
                    if ($user->getLinhasAfetadas() == 1):
                        $smarty->assign('msg', PrintMSG('Senha alterada com sucesso! <a href="?m=usuarios&t=listar">Exibir Cadastros </a>'));
                        unset($_POST);
                    else:
                        $smarty->assign('msg', PrintMSG('Senha não alterada! <a href="?m=usuarios&t=listar">Exibir Cadastros </a>', 'alerta'));
                    endif;

                endif;

                $userbd = new usuarios();
                $userbd->setExtrasSelect("WHERE id=$id");
                $userbd->selecionaTudo($userbd);
                $resbd = $userbd->RetornaDados('array');
            else:
                /* Avisa para selecionar um user */
                $smarty->assign('msg', PrintMSG('Usuário não definido, <a href="?m=usuarios&t=listar">escolha um usuário para alterar </a> ', 'erro'));
            endif;


            /* Script validação */
            $script = '<script type="text/javascript">';
            $script .= '$(document).ready(function() { ';
            $script .= '$(".userform").validate({';
            $script .= 'rules:{';
            $script .= 'senha:{required:true, rangelength:[4,10]},';
            $script .= 'senhaconf:{required:true, equalTo:"#senha"},';
            $script .= '               }';
            $script .= '            });';
            $script .= '         });';
            $script .= '    </script>';
            $smarty->assign('script', $script);

            $t = new telainsert();
            $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

            include('sidebar.php');
            $smarty->assign('titulo', utf8_decode('ViConcursos - Altera&ccedil;&atilde;o de senha'));
            $smarty->assign('titulotela', utf8_decode('Altera&ccedil;&atilde;o de senha'));
            $smarty->assign('modulo', $modulo);
            $smarty->assign('tela', 'listar');
            $smarty->display('crud/edit.tpl');
        else:
            $msg = 'Você não ter permissão para alterar esta página. <a href="#" onclick="history.back(-1)">Voltar</a>';
            include('sidebar.php');
            $smarty->assign('msg', PrintMSG($msg, 'erro'));
            $smarty->assign('titulo', utf8_decode('ViConcursos - Acesso Negado'));
            $smarty->assign('titulotela', utf8_decode('Sem permissão para acessar a tela!'));
            $smarty->display('permissao.tpl');
        endif;
        break;
    case 'excluir':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isAdmin() == TRUE):
            if (isset($_GET['id'])):
                $id = $_GET['id'];
                if (isset($_POST['excluir'])):
                    $user = new usuarios();
                    $user->setValorPK($id);
                    $user->deletar($user);
                    if ($user->getLinhasAfetadas() == 1):
                        $smarty->assign('msg', PrintMSG('Registro excluidos com sucesso! <a href="?m=usuarios&t=listar">Exibir Cadastros </a>'));
                        unset($_POST);
                    else:
                        $smarty->assign('msg', PrintMSG('Nenhum registro foi excluido! <a href="?m=usuarios&t=listar">Exibir Cadastros </a>', 'alerta'));
                    endif;
                endif;

                $userbd = new usuarios();
                $userbd->setExtrasSelect("WHERE id=$id");
                $userbd->selecionaTudo($userbd);
                $resbd = $userbd->RetornaDados('array');

                $t = new telainsert();
                $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

                include('sidebar.php');
                $smarty->assign('titulo', utf8_decode('ViConcursos - Excluir Usu&aacute;rio'));
                $smarty->assign('titulotela', utf8_decode('Excluir Usu&aacute;rios'));
                $smarty->assign('modulo', $modulo);
                $smarty->assign('tela', 'listar');
                $smarty->display('crud/delete.tpl');
            else:
                /* Avisa para selecionar um user */
                $smarty->assign('msg', PrintMSG('Usuário não definido, <a href="?m=usuarios&t=listar">escolha um usuário para excluir </a> ', 'erro'));
            endif;
        else:
            $msg = 'Você não ter permissão para alterar esta página. <a href="#" onclick="history.back()">Voltar</a>';
            include('sidebar.php');
            $smarty->assign('msg', PrintMSG($msg, 'erro'));
            $smarty->assign('titulo', utf8_decode('ViConcursos - Acesso Negado'));
            $smarty->assign('titulotela', utf8_decode('Sem permissão para acessar a tela!'));
            $smarty->display('permissao.tpl');
        endif;
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>