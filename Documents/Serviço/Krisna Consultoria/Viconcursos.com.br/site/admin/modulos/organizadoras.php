<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('coorganizadoras');
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
    case 'or_listar':
        $headerdados = '<tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Site</th>
                <th width="65px">  Ações  </th>             
            </tr>';
        $smarty->assign('headerdados', $headerdados);

        $categoria = new coorganizadoras();
        $categoria->selecionaTudo($categoria);
        $dados = '';
        while ($res = $categoria->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->idco_organizadoras . '</td>';
            $dados .= '<td>' . $res->Nome . '</td>';
            $dados .= '<td>' . $res->Site . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=or_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=or_editar&id=' . $res->idco_organizadoras . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=or_excluir&id=' . $res->idco_organizadoras . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));
        //$linkincluir = '<a href="?m=' . $modulo . '&t=or_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
        //$smarty->assing('linkadd', $linkincluir);

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Gerenciamento Video Aulas Professores'));
        $smarty->assign('titulotela', utf8_decode('Categorias Provas'));
        $smarty->assign('modulo', $modulo);
        $smarty->display('crud/find.tpl');
        break;
    case 'or_incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            $inserir = new coorganizadoras(array(
                'idco_organizadoras' => 0,
                'Nome' => $_POST['Nome'],
                'Site' => $_POST['Site']
            ));

            $inserir->inserir($inserir);

            if ($inserir->getLinhasAfetadas() == '1'):
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
        $script .= 'nome:{required:true, minlength:3},';
        $script .= 'site:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Novo Professor'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Professores'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'or_listar');
        $smarty->display('crud/insert.tpl');
        break;
    case 'or_editar':
        break;
    case 'or_excluir':
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>