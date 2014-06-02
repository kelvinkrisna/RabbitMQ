<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');
//__autoload('frwnextnumber');

class vamateria extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("va_materia");
        if (sizeof($campos) <= 0):
            $this->setValor("idva_materia");
            $this->setValor("Descricao");
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idva_materia');
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

    public function listMateria($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idva_materia;
            $ret[$contador]['categoria'] = mb_convert_encoding($row->Descricao, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->Descricao);
            $contador++;
        };
        return $ret;
    }

}

?>