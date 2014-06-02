<?php

$pathlocal = dirname(__FILE__);
require_once(dirname($pathlocal) . "/funcoes.php");

function __autoload($classe) {
    $classe = str_replace('..', '', $classe);
    if ($classe == 'Smarty'):
        require_once(SMARTY_DIR.'Smarty.class.php');
    else:
        require_once(dirname(__FILE__) . "/$classe.class.php");
    endif;    
}
?>