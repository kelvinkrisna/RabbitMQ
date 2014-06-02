<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');

class dicas extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("dicas");
        if (sizeof($campos) <= 0):
            $this->setValor("titulo");
            $this->setValor("subtitulo");
            $this->setValor("descricao");
            $this->setValor("metatitulo");
            $this->setValor("data");
            $this->setValor("dica");
            $this->setValor("tags");
            $this->setValor("idcategdicas");
            $this->setValor("keywords");
            $this->setValor("meta");
            $this->setValor("img");
            $this->setValor("acessos");

        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('iddicas');
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