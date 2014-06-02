<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class email_enviar extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("adm_gerenciaemails");
        if (sizeof($campos) <= 0):
            $this->setValor("idadm_gerenciaemails", '0');
            $this->setValor("hora_envio", '0');
            $this->setValor("data_envio", '0');
            $this->setValor("qtd", '0');
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idadm_gerenciaemails');
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

}
?>