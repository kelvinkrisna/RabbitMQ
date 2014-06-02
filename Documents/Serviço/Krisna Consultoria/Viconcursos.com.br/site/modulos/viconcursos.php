<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('noticias');
//protegearquivo(basename(__FILE__));
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
    case 'quemsomos':
        include(BASEPATH . '/header.php');
        $smarty->assign('titulo', 'Quem Somos - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('viconcursos/quemsomos.tpl');
        break;
    case 'faleconosco':
        include(BASEPATH . '/header.php');
        $smarty->assign('titulo', 'Fale Conosco - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('viconcursos/faleconosco.tpl');
        break;
    case 'politica':
        include(BASEPATH . '/header.php');
        $smarty->assign('titulo', 'Política de privacidade - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('viconcursos/politica.tpl');
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>

