<?php
    __autoload('usuariosOnline');
    __autoload('dicas');
    __autoload('provas');
    __autoload('concursos');

    //Total Provas
    $provas = new provas();
    $provas->setExtrasSelect('Order by idprovas desc');
    $smarty->assign('totalProvas', $provas->contaRegistros($provas));

    //Total Vagas
    $vagas = new concursos();
    $vagas->setExtrasSelect('where inscricoesfim >= CURDATE()');
    $smarty->assign('totalVagas', $vagas->somaCampo($vagas, 'vagas'));

    
    // Total dicas
    $dicas = new dicas();
    $dicas->setExtrasSelect('Order by iddicas desc');
    $smarty->assign('totalDicas', $dicas->contaRegistros($dicas));    
    
    //Usuarios On line! 
    //Inicio
    $online = new usuariosOnline();
    $online->VerificaUsuario($online);
    $online->setExtrasSelect('');
    $smarty->assign('online',$online->contaRegistros($online));        
?> 