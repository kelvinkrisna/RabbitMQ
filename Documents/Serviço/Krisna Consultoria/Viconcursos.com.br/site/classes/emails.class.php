<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class emails extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("emails");
        if (sizeof($campos) <= 0):
            $this->setValor("IDemail", '0');
            $this->setValor("email", '0');
            $this->setValor("cidade", '0');
            $this->setValor("nome", '0');
            $this->setValor("regiao", '0');
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('IDemail');
    }

    public function existeRegistro($campo = NULL, $valor = NULL, $campo2 = NULL, $valor2 = NULL) {
        $extraselect = 'WHERE ';
        if ($campo != NULL && $valor != NULL):
            is_numeric($valor) ? $valor = $valor : $valor = "'" . $valor . "'";
            $extraselect .= "$campo=$valor";
        endif;
        if ($campo2 != NULL && $valor2 != NULL):
            is_numeric($valor2) ? $valor2 = $valor2 : $valor2 = "'" . $valor2 . "'";
            $extraselect .= " and $campo2=$valor2";
        endif;


        $this->setExtrasSelect($extraselect);
        $this->selecionaTudo($this);
        if ($this->getLinhasAfetadas() > 0):
            return TRUE;
        else:
            return FALSE;
        endif;

    }

    public function listEmails($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->IDemail;
            $ret[$contador]['email'] = mb_convert_encoding($row->email, "utf-8");
            $ret[$contador]['nome'] = montaLinks($row->nome);
            $ret[$contador]['cidade'] = mb_convert_encoding($row->cidade, "UTF-8");
            $contador++;
        };

        return $ret;
    }

}

?>