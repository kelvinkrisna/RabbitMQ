<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('vaprofessor');
__autoload('vamateria');
__autoload('vavideoaula');
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
    case 'pr_listar':
        $headerdados = '<tr>
                <th>Id</th>
                <th>Professor</th>
                <th>Email</th>
                <th width="65px">  Ações  </th>             
            </tr>';
        $smarty->assign('headerdados', $headerdados);

        $categoria = new vaprofessor();
        $categoria->selecionaTudo($categoria);
        $dados = '';
        while ($res = $categoria->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->idva_professor . '</td>';
            $dados .= '<td>' . $res->nome . '</td>';
            $dados .= '<td>' . $res->email . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=pr_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=pr_editar&id=' . $res->idva_professor . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=pr_excluir&id=' . $res->idva_professor . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Gerenciamento Video Aulas Professores'));
        $smarty->assign('titulotela', utf8_decode('Categorias Provas'));
        $smarty->display('crud/find.tpl');
        break;
    case 'pr_incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            $inserir = new vaprofessor(array(
                'idva_professor' => 0,
                'nome' => $_POST['nome'],
                'site' => $_POST['site'],
                'email' => $_POST['email']
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
        $script .= 'email:{required:true, minlength:3},';
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
        $smarty->assign('tela', 'pr_listar');
        $smarty->display('crud/insert.tpl');
        break;
    case 'pr_editar':
        break;
    case 'pr_excluir':
        break;
    case 'mv_listar':
        $headerdados = '<tr>
                <th>Id</th>
                <th>Descrição</th>                
                <th width="65px">  Ações  </th>             
            </tr>';
        $smarty->assign('headerdados', $headerdados);

        $categoria = new vamateria();
        $categoria->selecionaTudo($categoria);
        $dados = '';
        while ($res = $categoria->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->idva_materia . '</td>';
            $dados .= '<td>' . $res->Descricao . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=mv_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=mv_editar&id=' . $res->idva_materia . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=mv_excluir&id=' . $res->idva_materia . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Gerenciamento Video Aulas - Materias'));
        $smarty->assign('titulotela', utf8_decode('Materias Video Aulas.'));
        $smarty->display('crud/find.tpl');
        break;
    case 'mv_incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            $inserir = new vamateria(array(
                'idva_materia' => 0,
                'descricao' => $_POST['descricao'],
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
        $script .= 'descricao:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Nova Materia'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Materia'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'mv_listar');
        $smarty->display('crud/insert.tpl');
        break;
    case 'mv_editar':
        break;
    case 'mv_excluir':
        break;
    case 'va_listar':
        $headerdados = '<tr>
                <th>Id</th>
                <th>Titulo</th>                
                <th>Acessos</th>                
                <th width="65px">  Ações  </th>             
            </tr>';
        $smarty->assign('headerdados', $headerdados);

        $categoria = new vavideoaula();
        $categoria->selecionaTudo($categoria);
        $dados = '';
        while ($res = $categoria->RetornaDados()):
            $dados .= '<tr>';
            $dados .= '<td>' . $res->idva_videoaula . '</td>';
            $dados .= '<td>' . $res->titulo . '</td>';
            $dados .= '<td>' . $res->acessos . '</td>';
            $dados .= '<td class="center">';
            $dados .= '<a href="?m=' . $modulo . '&t=va_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=va_editar&id=' . $res->idva_videoaula . '" title="Editar Cadastro"><img src="img/edit.png" alt="Editar Cadastro" /></a> ';
            $dados .= '<a href="?m=' . $modulo . '&t=va_excluir&id=' . $res->idva_videoaula . '" title="Excluir Cadastro"><img src="img/del.png" alt="Excluir Cadastro" /></a> ';
            $dados .= '</td>';
            $dados .= '</tr>';
        endwhile;
        $smarty->assign('dados', $dados);
        $smarty->assign('subjs', loadJS('jquery-datatables'));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Gerenciamento Video Aulas'));
        $smarty->assign('titulotela', utf8_decode('Materias Video Aulas.'));
        $smarty->display('crud/find.tpl');
        break;
    case 'va_incluir':
        /* Valida Permissão */
        $sessao = new sessao();
        if (isset($_POST['cadastrar'])):
            $inserir = new vavideoaula(array(
                'idva_materia' => 0,
                'titulo' => $_POST['titulo'],
                'descricao' => $_POST['descricao'],
                'link' => $_POST['link'],
                'idva_materia' => $_POST['idva_materia'],
                'idva_professor' => $_POST['idva_professor'],                            
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
        $script .= 'descricao:{required:true, minlength:3},';
        $script .= 'link:{required:true, minlength:3},';
        $script .= '               }';
        $script .= '            });';
        $script .= '         });';
        $script .= '    </script>';
        $smarty->assign('script', $script);

        $t = new telainsert();
        $smarty->assign('insert', $t->montaTela($modulo, $tela, $t));

        include('sidebar.php');
        $smarty->assign('titulo', utf8_decode('Vi Concursos - Nova Video Aula'));
        $smarty->assign('titulotela', utf8_decode('Cadastro de Video Aula'));
        $smarty->assign('modulo', $modulo);
        $smarty->assign('tela', 'va_listar');
        $smarty->display('crud/insert.tpl');
        break;
    case 'va_editar':
        break;
    case 'va_excluir':
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>