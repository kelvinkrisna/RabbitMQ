<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('concursos');
__autoload('noticias');
__autoload('dicas');

$p = $_GET['id'];

switch ($p) {
    case "1":
        $concursos = new concursos(array('idconcursos' => '', 'inscricoesfim' => '', 'titulo' => '', 'subtitulo' => ''));
        $numregtotal = $concursos->contaRegistros($concursos);
        
        //Paginação
        $numreg = 10;        
        
        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;;
        if ($pg == 0):
            $pg = '1';
        endif;
        $quant_pg = ceil($numregtotal / $numreg);
        if ($quant_pg < $pg):
            $pg = $quant_pg;
        endif;
        $inicial = ($pg * $numreg) - $numreg;

        $concursos->setExtrasSelect(" ORDER BY inscricoesfim DESC LIMIT " . $inicial . ", " . $numreg);
        $concursos->selecionaCampos($concursos);
        $html = '';
        $contador = 0;
        while ($row = $concursos->retornaDados()) {
            $contador++;

            $idconcurso = $row->idconcursos;
            $dataconcurso = ExtdData($row->data);
            $tituloconcurso = mb_convert_encoding($row->titulo, "utf-8");
            $titulo_tratadoconcurso = montaLinks($row->titulo);
            $subtituloconcurso = mb_convert_encoding($row->subtitulo, "UTF-8");


            $html .= '<div id="boxHome">';
            $html .= '<div id="boxData">' . $dataconcurso . '</div>';
            $html .= '<div id="boxInfo">';
            $html .= '<h2 style="float:left">';
            $html .= '<a rel="Concursos Públicos Abertos" class="' . $titulo_tratadoconcurso . '" href="' . BASEURL . 'concursos/detalhes/' . $idconcurso . '/' . $titulo_tratadoconcurso . '">' . $tituloconcurso . '</a></h2>';
            $html .= '<div style="float:left; padding-top:0px; padding-left:10px;">';
            $html .= '<img src="' . BASEURL . 'img/em-aberto-viconcursos.jpg" title="Concursos em Abertos" alt="Concursos P&Uacute;blicos em Abertos" width="67" height="18" />';
            $html .= '                </div>';
            $html .= '                <div style="clear:both;"></div>';
            $html .= '<p><span>' . $subtituloconcurso . '</span></p>';
            $html .= '</div>';
            $html .= '</div>';
        }
        if ($numregtotal > $numreg):
            include(BASEPATH . '/paginacao.php');
            $html .= '<div id=paginacao>';
            $html .= $htmlpaginacao;
            $html .= '</div>';
        endif;
        
        print_r($html);
        break;
    case "2":
        $noticias = new noticias(array('idnoticias' => '', 'data' => '', 'titulo' => '', 'subtitulo' => ''));
        $numreg = $noticias->contaRegistros($noticias);
        $page = 1;
        $inicial = 0;

        $noticias->setExtrasSelect(" ORDER BY idnoticias DESC LIMIT " . $inicial . ", " . $numreg);
        $noticias->selecionaCampos($noticias);
        $html = '';
        $contador = 0;
        while ($row = $noticias->retornaDados()) {
            $idnoticia = $row->idnoticias;
            $datanoticia = ExtdData($row->data);
            $titulonoticia = mb_convert_encoding($row->titulo, "utf-8");
            $titulo_tratadonoticia = montaLinks($row->titulo);
            $subtitulonoticia = mb_convert_encoding($row->subtitulo, "UTF-8");


            $html .= '<div id="boxHome">';
            $html .= '<div id="boxData">' . $datanoticia . '</div>';
            $html .= '<div id="boxInfo">';
            $html .= '<h2 style="float:left">';
            $html .= '<a href="' . BASEURL . 'noticias/detalhes/' . $idnoticia . '/' . $titulo_tratadonoticia . '">' . $titulonoticia . '</a>';
            $html .= '                <div style="clear:both;"></div>';
            $html .= '<p><span>' . $subtitulonoticia . '</span></p>';
            $html .= '</div>';
            $html .= '</div>';
        }

        print_r($html);
        break;
    case "3":
        $dicas = new dicas(array('iddicas' => '', 'data' => '', 'titulo' => '', 'subtitulo' => ''));
        $numreg = $dicas->contaRegistros($dicas);
        $page = 1;
        $inicial = 0;

        $dicas->setExtrasSelect(" ORDER BY iddicas DESC LIMIT " . $inicial . ", " . $numreg);
        $dicas->selecionaCampos($dicas);
        $html = '';
        $contador = 0;
        while ($row = $dicas->retornaDados()) {
            $contador++;

            $iddicas = $row->iddicas;
            $datadicas = ExtdData($row->data);
            $titulodicas = mb_convert_encoding($row->titulo, "utf-8");
            $titulo_tratadodicas = montaLinks($row->titulo);
            $subtitulodicas = mb_convert_encoding($row->subtitulo, "UTF-8");


            $html .= '<div id="boxHome">';
            $html .= '<div id="boxData">' . $datadicas . '</div>';
            $html .= '<div id="boxInfo">';
            $html .= '<h2 style="float:left">';
            $html .= '<a href="' . BASEURL . 'noticias/detalhes/' . $iddicas . '/' . $titulo_tratadodicas . '">' . $titulodicas . '</a>';
            $html .= '                <div style="clear:both;"></div>';
            $html .= '<p><span>' . $subtitulodicas . '</span></p>';
            $html .= '</div>';
            $html .= '</div>';
        }

        print_r($html);
        break;

    default:
        echo 'Twitter status update :)<br style="clear:both;" />';
        break;
}
?>