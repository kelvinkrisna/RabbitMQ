<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
protegearquivo(basename(__FILE__));
__autoload('provas');
__autoload('catprovas');

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
    else:
        $tit = "Provas";
    endif;
endif;
switch ($tela):
    case 'geral':
        $catprovas = new catprovas(array('idcategoprovas' => '', 'categoria' => ''));
        $catprovas->setExtrasSelect('Order by categoria asc');

        $smarty->assign('categoria', $catprovas->listCatProvas($catprovas));
        include(BASEPATH . '/header.php');
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', 'Provas - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('provas/geral.tpl');
        break;
    case 'categoria':
        $paragrafo = "Aqui você encontra Provas do concursos $tit para que você possa se preparar!";
        $catprovas = new catprovas(array('idcategoprovas' => '', 'categoria' => ''));
        $catprovas->setExtrasSelect("Where idcategoprovas = $id");
        $conta = $catprovas->contaRegistros($catprovas);
        if ($conta == 0):
            Header("HTTP/1.1 301 Moved Permanently");
            Header("Location: " . BASEURL . "provas/geral");
        else:
            $catprovas->setExtrasSelect('Order by categoria asc');
            $smarty->assign('categoria', $catprovas->listCatProvas($catprovas));
            $provas = new provas(array('idprovas' => '', 'titulo' => '', 'descricao' => ''));
            $provas->setExtrasSelect(" WHERE categ = $id");
            $smarty->assign('total', $provas->contaRegistros($provas));
            $smarty->assign('provas', $provas->listProvas($provas));
            include(BASEPATH . '/header.php');
            $smarty->assign('string', $tit);
            $smarty->assign('regiao', 'Dicas e Informações para concursos públicos');
            $smarty->assign('msg', 'teste');
            $smarty->assign('titulo', "Provas do concursos $tit - " . SITENAME);
            $smarty->assign('description', $paragrafo);
            $smarty->display('provas/categoria.tpl');
        endif;
        break;
    case 'detalhes':
        $catprovas = new catprovas(array('idcategoprovas' => '', 'categoria' => ''));
        $catprovas->setExtrasSelect('Order by categoria asc');
        $smarty->assign('categoria', $catprovas->listCatProvas($catprovas));
        $dados = new provas();
        $dados->setExtrasSelect(" WHERE idprovas = $id");
        $row = $dados->detailProvas($dados);
        $smarty->assign('prova', $row);
        include(BASEPATH . '/header.php');
        $smarty->assign('linkcompleto', BASEURL . $_SERVER['REQUEST_URI']);
        $smarty->assign('titulo', $row[0]['titulo'] . ' - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('provas/detalhes.tpl');
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo '<p> A tela solicitada n&atilde;o existe.</p>';
endswitch;
?>

