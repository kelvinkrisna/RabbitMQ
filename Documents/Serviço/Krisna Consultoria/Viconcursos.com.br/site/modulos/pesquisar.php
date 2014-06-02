<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
//protegearquivo(basename(__FILE__));
//Carrego os CSS;
$listcss = array();
array_push($listcss, loadCSS('reset'));
array_push($listcss, loadCSS('style'));
array_push($listcss, loadCSS('menu'));
array_push($listcss, loadCSS('pesquisar'));
array_push($listcss, loadCSS('http://www.google.com/cse/api/branding.css', TRUE));

//Carrego os JS;
$listjs = array();
array_push($listjs, loadJS('jquery'));
array_push($listjs, loadJS('geral'));
array_push($listjs, loadJS('watermark'));

$smarty = new Smarty();
$smarty->assign('css', $listcss);
$smarty->assign('js', $listjs);
$smarty->assign('url', BASEURL);

include(BASEPATH . '/header.php');
$smarty->assign('msg', 'teste');
$smarty->assign('titulo', 'Noticias');
$smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
$smarty->display('pesquisar/geral.tpl');
?>


