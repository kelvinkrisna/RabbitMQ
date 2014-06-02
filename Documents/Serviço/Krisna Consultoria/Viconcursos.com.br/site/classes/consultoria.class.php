<?php
require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class consultoria extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("consultoria");
        if (sizeof($campos) <= 0):
            $this->setValor("titulo", '0');
            $this->setValor("subtitulo", '0');
            $this->setValor("texto", '0');
            $this->setValor("data", '0');
            $this->setValor("keywords", '0');            
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idjuridico');
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
    
    public function listConsultoria($objeto = NULL){
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idjuridico;
            $ret[$contador]['data'] = ExtdData($row->data);
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['descricao'] = mb_convert_encoding($row->subtitulo, "UTF-8");
            $contador++;
        };        
        return $ret;
    }
    
    public function detailConsultoria($objeto = NULL){
        $this->selecionaTudo($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idjuridico;
            $ret[$contador]['data'] = $row->data;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['subtitulo'] = mb_convert_encoding($row->subtitulo, "UTF-8");
            $ret[$contador]['texto'] = $row->texto;
            $contador++;
        };
        
        return $ret;
    }

}
?>