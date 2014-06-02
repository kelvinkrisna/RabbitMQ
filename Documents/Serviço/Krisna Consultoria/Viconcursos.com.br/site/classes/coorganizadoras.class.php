<?php
require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');


class coorganizadoras extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("co_organizadoras");
        if (sizeof($campos) <= 0):
            $this->setValor("idco_organizadoras");
            $this->setValor("Nome");
            $this->setValor("Site");            
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idco_organizadoras');
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
    
    public function listOrganizadoras($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idco_organizadoras;
            $ret[$contador]['nome'] = mb_convert_encoding($row->Nome, "utf-8");
            $ret[$contador]['site'] = $row->Site;            
            $contador++;
        };
        return $ret;
    }
    
}
?>