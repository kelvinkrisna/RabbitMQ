<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('noticias');
protegearquivo(basename(__FILE__));
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
        $descricao = "Fique por dentro do que Acontece sobre Concursos P&uacute;blicos e muito mais como vagas de Empregos, Est&aacute;gios, Processo Seletivos.";
        $noticias = new noticias(array('idnoticias' => '', 'data' => '', 'titulo' => '', 'subtitulo' => ''));
        $noticias->setExtrasSelect(" ORDER BY idnoticias DESC");
        $smarty->assign('total', $noticias->contaRegistros($noticias));
        $smarty->assign('noticias', $noticias->listNoticias($noticias));
        include(BASEPATH . '/header.php');
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', 'Noticias - ' . SITENAME);
        $smarty->assign('description', $descricao);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('noticias/geral.tpl');
        break;
    case 'detalhes':
        $noticias = new noticias();
        $noticias->setExtrasSelect(" WHERE idnoticias = $id");
        $conta = $noticias->contaRegistros($noticias);
        if ($conta == 0):
            Header("HTTP/1.1 301 Moved Permanently");
            Header("Location: " . BASEURL . "noticias/geral");
        else:
            $dados = $noticias->detailNoticias($noticias);
            $smarty->assign('noticia', $dados);
            include(BASEPATH . '/header.php');
            $smarty->assign('msg', 'teste');
            $smarty->assign('linkcompleto', $_SERVER['REQUEST_URI']);
            $smarty->assign('titulo', $dados[0]['titulo'] . ' - ' . SITENAME);
            $smarty->assign('description', $dados[0]['subtitulo']);
            $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
            $smarty->display('noticias/detalhes.tpl');
        endif;
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo '<p> A tela solicitada n&atilde;o existe.</p>';
endswitch;
?>

