<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
protegearquivo(basename(__FILE__));
__autoload('coorganizadoras');

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
        $organizadoras = new coorganizadoras(array('idco_organizadoras' => '', 'Nome' => '', 'Site' => ''));
        $organizadoras->setExtrasSelect('Order by Nome asc');

        $smarty->assign('organizadoras', $organizadoras->listOrganizadoras($organizadoras));
        include(BASEPATH . '/header.php');
        $smarty->assign('msg', 'teste');
        $smarty->assign('titulo', 'Organizadoras - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('organizadoras/geral.tpl');
        break;
    case 'categoria':
        $paragrafo = "Video aulas da Materia $tit para que você possa se preparar!";
        $materias = new vamateria(array('idva_materia' => '', 'Descricao' => ''));
        $materias->setExtrasSelect("Where idva_materia = $id");
        $conta = $materias->contaRegistros($materias);
        if ($conta == 0):
            Header("HTTP/1.1 301 Moved Permanently");
            Header("Location: " . BASEURL . "videoaulas/geral");
        else:
            $materias->setExtrasSelect('Order by Descricao asc');        
            $smarty->assign('categoria', $materias->listMateria($materias));
            
            $videoaula = new vavideoaula(array('idva_videoaula' => '', 'titulo' => '', 'descricao' => ''));
            $videoaula->setExtrasSelect(" WHERE idva_materia = $id");
            $smarty->assign('total', $videoaula->contaRegistros($videoaula));
            $smarty->assign('provas', $videoaula->listVideoAulas($videoaula));
            include(BASEPATH . '/header.php');
            $smarty->assign('string', $tit);
            $smarty->assign('regiao', 'Dicas e Informações para concursos públicos');
            $smarty->assign('msg', 'teste');
            $smarty->assign('titulo', "Video Aulas de $tit - " . SITENAME);
            $smarty->assign('description', $paragrafo);
            $smarty->display('videoaulas/categoria.tpl');
        endif;

        break;
    case 'detalhes':
        $materia = new vamateria(array('idva_materia' => '', 'Descricao' => ''));
        $materia->setExtrasSelect('Order by Descricao asc');
        $smarty->assign('categoria', $materia->listMateria($materia));
        $dados = new vavideoaula();
        $dados->setExtrasSelect(" WHERE idva_videoaula = $id");
        $row = $dados->detailVideoAula($dados);
        $smarty->assign('prova', $row);
        include(BASEPATH . '/header.php');
        $smarty->assign('linkcompleto', BASEURL . $_SERVER['REQUEST_URI']);
        $smarty->assign('titulo', $row[0]['titulo'] . ' - ' . SITENAME);
        $smarty->assign('titulotela', utf8_decode('Concursos Públicos'));
        $smarty->display('videoaulas/detalhes.tpl');
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo '<p> A tela solicitada n&atilde;o existe.</p>';
endswitch;
?>
