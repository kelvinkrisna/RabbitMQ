<?php

require_once('funcoes.php');
require_once(BASEPATH . CLASSPATH . 'autoload.php');
__autoload('usuariosOnline');
//verificaLogin();

//Valido ação
$modulo = '';
if (isset($_GET['m']))
    $modulo = $_GET['m'];
if (isset($_GET['t']))
    $tela = $_GET['t'];

if ($modulo && $tela):
    loadModulo($modulo, $tela);
else:
    //Carrego os CSS;
    $listcss = array();
    array_push($listcss, loadCSS('reset'));
    array_push($listcss, loadCSS('style'));

//Carrego os JS;
    $listjs = array();
    array_push($listjs, loadJS('jquery'));
    array_push($listjs, loadJS('geral'));
    array_push($listjs, loadJS('jquery-validate'));
    array_push($listjs, loadJS('jquery-validate-messages'));

    $online = new usuariosOnline();
    $On = $online->contaRegistros($online); 
    
    $smarty = new Smarty();
    include('sidebar.php');
    $smarty->assign('online',$On);
    $smarty->assign('css', $listcss);
    $smarty->assign('js', $listjs);
    $smarty->assign('titulo', 'Vi Concursos - Painel Administrativo');
    $smarty->display('painel.tpl');
endif;
?>