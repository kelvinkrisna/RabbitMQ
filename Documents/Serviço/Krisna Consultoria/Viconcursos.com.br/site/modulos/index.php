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
array_push($listjs, loadJS('tabs'));
array_push($listjs, loadJS('geral'));
array_push($listjs, loadJS('watermark'));

$smarty = new Smarty();
$smarty->assign('css', $listcss);
$smarty->assign('js', $listjs);
$smarty->assign('url', BASEURL);

switch ($tela):
    case 'home':
        // paginacao        
        //Carrega concursos.
        $concursos = new concursos(array('idconcursos' => '', 'inscricoesfim' => '', 'titulo' => '', 'subtitulo' => ''));
        $concursos->setExtrasSelect('where inscricoesfim >= CURDATE()');
        $numregtotal = $concursos->contaRegistros($concursos);
        
        //Paginação
        
        $numreg = 25;        
        if ($numregtotal < $numreg):
            $numregtotal = $numreg;
        endif;
        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;;
        if ($pg == 0):
            $pg = '1';
        endif;
        $quant_pg = ceil($numregtotal / $numreg);
        if ($quant_pg < $pg):
            $pg = $quant_pg;
        endif;
        $inicial = ($pg * $numreg) - $numreg;

        $concursos->setExtrasSelect(' where inscricoesfim >= CURDATE() ORDER BY inscricoesfim LIMIT ' . $inicial . ', ' . $numreg);

        $smarty->assign('concursos', $concursos->listConcursos($concursos));
        
        if ($numregtotal > $numreg):
            include(BASEPATH . '/paginacao.php');
            $smarty->assign('paginacao', '1');
            $smarty->assign('htmlpaginacao', $htmlpaginacao);
        endif;
            
        include(BASEPATH . '/header.php');
        $smarty->assign('maisacessados', '1');
        include(BASEPATH . '/maisacessados.php');
        $smarty->assign('msg', 'teste');

        $smarty->assign('titulo', SITENAME);
        $smarty->assign('description', 'Vi Concursos, Concursos atualizados diariamente, apostilas, video aulas, provas antigas e muito mais.');
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('index.tpl');
        break;
    default:
        echo '<p> A tela solicitada não existe!</p>';
endswitch;
?>
