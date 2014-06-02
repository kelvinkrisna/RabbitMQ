<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('concursos');
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
    else:
        $id = 0;
    endif;
    if (isset($command[3])):
        $tit = $command[3];
    else:
        $tit = 'Ultimos Concursos';
    endif;
endif;

switch ($tela):
    case 'detalhes':
        $concursos = new concursos();
        $concursos->setExtrasSelect(" WHERE idconcursos = $id");
        $conta = $concursos->contaRegistros($concursos);
        if ($conta == 0):
            Header( "HTTP/1.1 301 Moved Permanently");
            Header( "Location: ".BASEURL."concursos/geral" );
        else:
            $dados = $concursos->detailConcurso($concursos);
            $smarty->assign('concurso', $dados);
            include(BASEPATH . '/header.php');
            $smarty->assign('msg', 'teste');
            $smarty->assign('linkcompleto', $_SERVER['REQUEST_URI']);
            $smarty->assign('titulo', $dados[0]['titulo'] . ' - ' . SITENAME);
            $smarty->assign('description', $dados[0]['subtitulo']);
            $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
            $smarty->display('concursos/detalhes.tpl');
        endif;


        break;
    case 'regiao':
        $xTstring = preg_replace('/[-]+/', ' ', $tit);

        $concursos = new concursos(array('idconcursos' => '', 'inscricoesfim' => '', 'titulo' => '', 'subtitulo' => ''));
        if ($id != 0):
            $concursos->setExtrasSelect(" WHERE idcidade =$id ORDER BY idconcursos DESC  LIMIT 15 ");
            $string = "Concursos P&uacute;blicos | " . $xTstring;
            $paragrafo = "Confira os concursos em abertos no estado do(a) $xTstring, e se prepare para passar nele!";
        else:
            $paragrafo = "Confira os concursos em abertos por todo o Brasil, e se prepare para passar nele!";
            $string = $string = "&Uacute;ltimos Concursos P&uacute;blicos | " . date('Y');
        endif;

        $smarty->assign('total', $concursos->contaRegistros($concursos));
        $smarty->assign('concursos', $concursos->listConcursos($concursos));
        include(BASEPATH . '/header.php');
        $smarty->assign('descricao', $paragrafo);
        $smarty->assign('regiao', $string);
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', $string . ' - ' . SITENAME);
        $smarty->assign('description', $paragrafo);
        $smarty->display('concursos/geral.tpl');
        break;
    case 'geral':
        $xTstring = preg_replace('/[-]+/', ' ', $tit);

        $concursos = new concursos(array('idconcursos' => '', 'inscricoesfim' => '', 'titulo' => '', 'subtitulo' => ''));
        if ($id != 0):
            $concursos->setExtrasSelect(" WHERE idcategoria2 LIKE '% " . $id . ",%' ORDER BY idconcursos DESC  LIMIT 15 ");
            $string = "Concursos P&uacute;blicos | " . $xTstring;
            $paragrafo = "Confira os concursos em abertos no estado do(a) $xTstring, e se prepare para passar nele!";
        else:
            $paragrafo = "Confira os concursos em abertos por todo o Brasil, e se prepare para passar nele!";
            $string = $string = "&Uacute;ltimos Concursos P&uacute;blicos | " . date('Y');
        endif;

        $smarty->assign('total', $concursos->contaRegistros($concursos));
        $smarty->assign('concursos', $concursos->listConcursos($concursos));
        include(BASEPATH . '/header.php');
        $smarty->assign('descricao', $paragrafo);
        $smarty->assign('regiao', $string);
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', $string . ' - ' . SITENAME);
        $smarty->assign('description', $paragrafo);
        $smarty->display('concursos/geral.tpl');
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo '<p> A tela solicitada n&atilde;o existe.</p>';      
endswitch;
?>

