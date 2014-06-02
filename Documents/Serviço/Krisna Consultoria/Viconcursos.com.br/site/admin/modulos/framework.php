<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('frwtipoitem');
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
    case 'frwtipoitem_categoria':
        $headerdados = '<tr>
                <th>ID Tipo Item</th>
                <th>Descrição do Item</th>
                <th width="65px">  Ações  </th>             
            </tr>';
        $smarty->assign('headerdados', $headerdados);

        $categoria = new frwtipoitem();
        $categoria->selecionaTudo($categoria);
        $dados = '';
        while ($res = $categoria->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->szCod_item . '</td>';
            $dados .= '<td>' . $res->szDescricao . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=frwtipoitem_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=cateditar&id=' . $res->szCod_item . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=catexcluir&id=' . $res->szCod_item . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Gerenciamento Dicas'));
        $smarty->assign('titulotela', utf8_decode('Tipo de Item'));
        $smarty->display('crud/find.tpl');
        break;
    default:
        break;
endswitch;
?>
