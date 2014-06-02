<?php
require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('concursos');

$concursos = new concursos(array('idconcursos' => '', 'data' => '', 'titulo' => '', 'subtitulo' => ''));
$concursos->setExtrasSelect('order by idconcursos desc');
$concursos->selecionaCampos($concursos);
while ($row = $concursos->retornaDados()) {
    $date = $row->data;
    $date = str_replace('/', '-', $date);
    echo date('Y-m-d', strtotime($date));
    
    $data = strtotime($row->data);
    echo '<br />';
    print_r($data);   
    
    $data = date(DATE_RFC822, strtotime(str_replace('/', '-', $row->data)));
    echo '<br />';
    print_r($data);   
}
?>
