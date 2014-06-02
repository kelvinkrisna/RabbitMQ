<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
protegearquivo(basename(__FILE__));
__autoload('consultoria');

//Carrego os CSS;
$listcss = array();
array_push($listcss, loadCSS('reset'));
array_push($listcss, loadCSS('style'));
array_push($listcss, loadCSS('menu'));

//Carrego os JS;
$listjs = array();
array_push($listjs, loadJS('jquery'));
array_push($listjs, loadJS('geral'));
array_push($listjs, loadJS('watermark'));

$smarty = new Smarty();
$smarty->assign('css', $listcss);
$smarty->assign('js', $listjs);
$smarty->assign('url', BASEURL);

//Busca as variaveis do get;
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
$scriptNameArray = array_values($scriptName);

for ($i = 0; $i < sizeof($scriptNameArray); $i++) {
    if ($requestURI[$i] == $scriptName[$i]) {
        unset($requestURI[$i]);
    }
}
$command = array_values($requestURI);
if ($command[0] != ''):
    if (isset($command[2])):
        $id = $command[2];
    endif;
    if (isset($command[3])):
        $tit = $command[3];
    endif;
endif;
switch ($tela):
    case 'geral':
        $descricao = "Confira aqui dúvidas comuns sobre termos juridicos e assuntos afins aqui.";
        $dados = new consultoria(array('idjuridico' => '', 'data' => '', 'titulo' => '', 'subtitulo' => ''));
        $dados->setExtrasSelect(" ORDER BY idjuridico DESC");
        $smarty->assign('total', $dados->contaRegistros($dados));
        $smarty->assign('juridico', $dados->listConsultoria($dados));
        include(BASEPATH . '/header.php');
        $smarty->assign('titulo', 'Dúvidas Júridicas - ' . SITENAME);
        $smarty->assign('description', $descricao);
        $smarty->display('consultoria/geral.tpl');
        break;
    case 'detalhes':
        $dados = new consultoria();
        $dados->setExtrasSelect(" WHERE idjuridico = $id");
        $conta = $dados->contaRegistros($dados);
        if ($conta == 0):
            Header("HTTP/1.1 301 Moved Permanently");
            Header("Location: " . BASEURL . "consultoria/geral");
        else:
            $dado = $dados->detailConsultoria($dados);
            $smarty->assign('juridico', $dado);
            include(BASEPATH . '/header.php');
            $smarty->assign('msg', 'teste');
            $smarty->assign('linkcompleto', $_SERVER['REQUEST_URI']);
            $smarty->assign('titulo', $dado[0]['titulo'] . ' - ' . SITENAME);
            $smarty->assign('description', $dado[0]['subtitulo']);
            $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
            $smarty->display('consultoria/detalhes.tpl');
        endif;
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>


