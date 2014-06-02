<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class cidades extends base {
    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("cidades");
        if (sizeof($campos) <= 0):
            $this->setValor("idcidades", '0');
            $this->setValor("idregiao", '0');
            $this->setValor("cidade", '0');            
            $this->setValor("uf", '0'); 
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idcidades');
    }

    public function existeRegistro($campo = NULL, $valor = NULL) {
        if ($campo != NULL && $valor != NULL):
            is_numeric($valor) ? $valor = $valor : $valor = "'" . $valor . "'";
            $this->setExtrasSelect("WHERE $campo=$valor");
            $this->selecionaTudo($this);
            if ($this->getLinhasAfetadas() > 0):
                return TRUE;
            else:
                return FALSE;
            endif;
        else:
            $this->trataerro(__FILE__, __FUNCTION__, NULL, 'Faltam Parâmetros para executar a função!', TRUE);
        endif;
    }

    public function listCidades($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idcidades;
            $ret[$contador]['cidade'] = mb_convert_encoding($row->cidade, "utf-8");
            $ret[$contador]['cidade_tratado'] = montaLinks($row->cidade);
            $contador++;
        };
        return $ret;
    }

}
?>