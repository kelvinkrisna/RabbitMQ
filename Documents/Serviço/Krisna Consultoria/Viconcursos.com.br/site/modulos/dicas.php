<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('dicas');
__autoload('catdicas');
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
    else:
        $id = 0;
    endif;
    if (isset($command[3])):
        $tit = $command[3];
    endif;
endif;

switch ($tela):
    case 'detalhes':

        $dicas = new dicas();
        $dicas->setExtrasSelect(" WHERE iddicas = $id");
        $conta = $dicas->contaRegistros($dicas);

        if ($conta == 0):
            Header("HTTP/1.1 301 Moved Permanently");
            Header("Location: " . BASEURL . "dicas/geral");
        else:
            $dados = $dicas->detailDicas($dicas);
            $smarty->assign('dicas', $dados);
            include(BASEPATH . '/header.php');
            $smarty->assign('msg', 'teste');
            $smarty->assign('linkcompleto', $_SERVER['REQUEST_URI']);
            $smarty->assign('titulo', $dados[0]['titulo'] . ' - ' . SITENAME);
            $smarty->assign('description', $dados[0]['subtitulo']);
            $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
            $smarty->display('dicas/detalhes.tpl');
        endif;
        break;
    case 'categoria':
        $paragrafo = "Aqui você encontra excelentes dicas sobre $tit para concursos públicos, venha e se prepare!";
        $catdicas = new catdicas(array('idcategdicas' => '', 'categdicas' => ''));
        $catdicas->setExtrasSelect('Order by idcategdicas desc');

        $smarty->assign('categoria', $catdicas->listCatDicas($catdicas));
        $dicas = new dicas(array('iddicas' => '', 'data' => '', 'titulo' => '', 'subtitulo' => '', 'img' => ''));
        $dicas->setExtrasSelect(" WHERE idcategdicas = $id");
        $smarty->assign('total', $dicas->contaRegistros($dicas));
        $smarty->assign('dicas', $dicas->listDicas($dicas));
        include(BASEPATH . '/header.php');
        $smarty->assign('descricao', $paragrafo);
        $smarty->assign('regiao', 'Dicas e Informações para concursos públicos');
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', "Dicas sobre $tit - " . SITENAME);
        $smarty->assign('description', $paragrafo);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('dicas/geral.tpl');
        break;
    case 'geral':
        $paragrafo = "Aqui você encontra excelentes dicas sobre concursos públicos, venha e se prepare!";

        $catdicas = new catdicas(array('idcategdicas' => '', 'categdicas' => ''));
        $catdicas->setExtrasSelect('Order by idcategdicas desc');

        $smarty->assign('categoria', $catdicas->listCatDicas($catdicas));

        $dicas = new dicas(array('iddicas' => '', 'data' => '', 'titulo' => '', 'subtitulo' => '', 'img' => ''));
        $dicas->setExtrasSelect('Order by iddicas desc');
        $smarty->assign('total', $dicas->contaRegistros($dicas));
        $smarty->assign('dicas', $dicas->listDicas($dicas));
        include(BASEPATH . '/header.php');
        $smarty->assign('descricao', $paragrafo);
        $smarty->assign('regiao', 'Dicas e Informações para concursos públicos');
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', 'Dicas e Informações para concursos - ' . SITENAME);
        $smarty->assign('description', $paragrafo);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('dicas/geral.tpl');
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo '<p> A tela solicitada n&atilde;o existe.</p>';
endswitch;
?>

