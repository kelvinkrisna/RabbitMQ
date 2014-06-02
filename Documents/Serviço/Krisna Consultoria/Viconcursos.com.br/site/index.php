<?php
require_once('funcoes.php');

$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
$scriptNameArray = array_values($scriptName);

for ($i = 0; $i < sizeof($scriptNameArray); $i++):
    if ($requestURI[$i] == $scriptName[$i]) :
        unset($requestURI[$i]);
    endif;        
endfor;

$command = array_values($requestURI);
if ($command[0] != '' && substr($command[0],0,4) != '?pg=' ):
    $Modulo = $command[0];
    $tela = $command[1];
    if (isset($command[2])):
        $id = $command[2];
    endif;
    if (isset($command[3])):
        $titulo = $command[3];
    endif;
    loadModulo($Modulo, $tela);
else:    
    loadModulo('index', 'home');
endif;
?> 