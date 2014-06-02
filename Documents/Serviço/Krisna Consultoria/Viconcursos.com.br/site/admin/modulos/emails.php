<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('cidades');
__autoload('emails');
__autoload('email_enviar');
__autoload('concursos');
__autoload('telainsert');
__autoload('sessao');
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
    case 'listar':
        $headerdados = '<tr>
                <th>Email</th>
                <th>Nome</th>
                <th>Regiao</th>
                <th width="65px">  Ações  </th>             
            </tr>';

        $smarty->assign('headerdados', $headerdados);

        $emails = new emails();
        $emails->selecionaTudo($emails);
        $dados = '';
        while ($res = $emails->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->email . '</td>';
            $dados .= '<td>' . $res->nome . '</td>';
            $categoria = new cidades();
            $categoria->setExtrasSelect("where idcidades =$res->cidade");
            $categoria->selecionaTudo($categoria);
            $categoriadados = $categoria->RetornaDados();
            $dados .= '<td>' . $categoriadados->cidade . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=excluir&id=' . $res->IDemail . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Consultar Emails'));
        $smarty->assign('titulotela', utf8_decode('Lista de Emails'));
        $smarty->display('crud/find.tpl');
        break;
    case 'excluir':
        $sessao = new sessao();
        $msg = ' ';
        $smarty->assign('msg', $msg);
        if (isset($_GET['id'])):
            $id = $_GET['id'];
            if (isset($_POST['excluir'])):
                $email = new emails();
                $email->setValorPK($id);
                $email->deletar($email);
                if ($email->getLinhasAfetadas() == 1):
                    $smarty->assign('msg', PrintMSG('Registro excluidos com sucesso! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>'));
                    unset($_POST);
                else:
                    $smarty->assign('msg', PrintMSG('Nenhum registro foi excluido! <a href="?m=' . $modulo . '&t=listar">Exibir Cadastros </a>', 'alerta'));
                endif;
            endif;

            $emailbd = new emails();
            $emailbd->setExtrasSelect("WHERE IDemail=$id");
            $emailbd->selecionaTudo($emailbd);
            $resbd = $emailbd->RetornaDados('array');

            $t = new telainsert();
            $smarty->assign('insert', $t->montaTela($modulo, $tela, $t, $resbd));

            include('sidebar.php');
            $smarty->assign('titulo', utf8_decode('ViConcursos - Excluir Email'));
            $smarty->assign('titulotela', utf8_decode('Excluir Email'));
            $smarty->assign('modulo', $modulo);
            $smarty->assign('tela', 'listar');
            $smarty->display('crud/delete.tpl');
        else:
            /* Avisa para selecionar um user */
            $smarty->assign('msg', PrintMSG('Prova não definida, <a href="?m=' . $modulo . '&t=listar">escolha um usuário para excluir </a> ', 'erro'));
        endif;

        break;
    case 'enviaremail':
        $headerdados = '<tr>
                <th>Email</th>
                <th>Concurso</th>                            
            </tr>';

        $smarty->assign('headerdados', $headerdados);

        $emailsenviar = new email_enviar();
        $emailsenviar->selecionaTudo($emailsenviar);
        $dados = '';
        while ($res = $emailsenviar->RetornaDados()):
            $dados .= '<tr>';
            $email = new emails(array('email' => '0'));
            $email->setExtrasSelect("where IDemail =$res->idemails");
            $email->selecionaTudo($email);
            $emaildados = $email->RetornaDados();
            $dados .= '<td>' . $emaildados->email . '</td>';

            $concurso = new concursos(array('titulo' => '0'));
            $concurso->setExtrasSelect("where idconcursos =$res->idconcursos");
            $concurso->selecionaTudo($concurso);
            $concursosdados = $concurso->RetornaDados();
            $dados .= '<td>' . $concursosdados->titulo . '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('ViConcursos - Consultar Emails'));
        $smarty->assign('titulotela', utf8_decode('Lista de Emails'));
        $smarty->display('crud/find.tpl');

        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>