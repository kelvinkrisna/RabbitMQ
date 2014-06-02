<?php
    $quant_pg = ceil($numregtotal / $numreg);
    $quant_pg++;
    //$url_ant = "http://www.site.com.br/produtos/";
    if (isset($_SERVER['HTTP_REFERER'])):
        $url_ant = $_SERVER['HTTP_REFERER'];
    else:
        $url_ant = BASEURL;
    endif;
    

    $htmlpaginacao = '<ul>';
    // anterior  
    if ($pg > 1) {
        $htmlpaginacao .= "<li><a href=" . $url_ant ."?pg=". ($pg - 1) . "><span class='style2'>Anterior</span></a></li>";
    } else {
        $htmlpaginacao .= "<li><span class='style2'>Anterior</span></li>";
    }
    // Faz controle das páginas que irá mostrar na paginação	
    if (($pg - 4) < 1) {
        $anterior = 1;
    } else {
        $anterior = $pg - 4;
    }
    if (($pg + 6) > $quant_pg) {
        $proximo = $quant_pg;
    } else {
        $proximo = $pg + 6;
    }
    // Crio os números das páginas entre Anterior e Próximo	
    for ($i_pg = $anterior; $i_pg < $proximo; $i_pg++) {
        if ($pg == ($i_pg)) {
            $htmlpaginacao .= "<li class='pagSelecionado'><span class='style3'>$i_pg</span></li>";
        } else {
            $i_pg2 = $i_pg;
            $htmlpaginacao .= "<li><a href={$url_ant}?pg={$i_pg2}><span class='style2'>$i_pg</span></a></li>";
        }
    }
    // proximo
    if (( $pg + 1 ) < $quant_pg) {
        $htmlpaginacao .= "<li><a href=" . $url_ant ."?pg=". ($pg + 1) . "><span class='style2'>&nbsp;Pr&oacute;xima</span></a></li>";
    } else {
        $htmlpaginacao .= "<li><span class='style2'>&nbsp;Pr&oacute;xima</span></li>";
    }
    $htmlpaginacao .= "</ul>";
?>