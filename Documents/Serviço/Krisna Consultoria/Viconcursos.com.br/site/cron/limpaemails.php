<?php
require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
include 'gerenciamentoemail.php';
__autoload('emails');
limpaemails();

function limpaemails() {
    $email = new emails();
    $email->selecionaTudo($email);
    while ($row = $email->retornaDados()) :
        $emailenviar = $row->email;
        if (!validEmail($emailenviar)):            
            echo $emailenviar;
            echo "<br />";
            $emailexcluir = new emails();
            $emailexcluir->setValorPK($row->IDemail);
            $emailexcluir->deletar($emailexcluir);
        endif;
    endwhile;
    echo "fim";
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
