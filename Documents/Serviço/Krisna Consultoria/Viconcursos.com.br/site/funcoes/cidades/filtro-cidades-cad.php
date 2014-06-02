<?php

require_once(dirname(dirname(dirname(__FILE__))) . '/funcoes.php');
//protegearquivo(basename(__FILE__));
__autoload('cidades');

$cidade = new cidades();
$cidade->setExtrasSelect("where idregiao = " . $_POST['regiao']);

$x = $cidade->listCidades($cidade);

$htmlret = '<select name="Estado" id="estadocad" class="inputCadastrarrecx" style="width:246px">
    <option value="0">Selecione o estado</option>';

for ($i = 0; $i < count($x); $i++) {
    $htmlret .= '<option value="' . $x[$i]['id'] . '">' . $x[$i]['cidade'] . '</option>';
}

echo $htmlret;
?>

