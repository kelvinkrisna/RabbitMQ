<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/funcoes.php');
//protegearquivo(basename(__FILE__));
__autoload('cidades');

$cidade = new cidades();
$cidade->setExtrasSelect("where idregiao = ".$_POST['regiao']);
        
$x = $cidade->listCidades($cidade);
?>

<select name="Estado" id="estado" class="inputFiltroHome">
    <option value="0">Selecione o estado</option>
    <?php for ($i = 0; $i < count($x); $i++) { ?>
        <option value="<?php echo $x[$i]['id']; ?>/<?php echo $x[$i]['cidade_tratado']; ?>"><?php echo $x[$i]['cidade']; ?></option>
<?php } ?>
