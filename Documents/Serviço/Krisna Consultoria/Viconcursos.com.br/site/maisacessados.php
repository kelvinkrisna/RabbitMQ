<?php
    __autoload('dicas');
    __autoload('provas');
    __autoload('concursos');
    
    $ret = array();
    $contador = 0;
    $vagas = new concursos(array('titulo' => '0', 'idconcursos' => '0', 'inscricoesfim' => '0', 'subtitulo' => '0'));
    $vagas->setExtrasSelect('where inscricoesfim >= CURDATE() order by acessos desc limit 5');
    $smarty->assign('maisacessadoslist', $vagas->listConcursos($vagas));
?>
