<?php
require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class noticias extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("noticias");
        if (sizeof($campos) <= 0):
            $this->setValor("idnoticias", '0');
            $this->setValor("noticia", '0');
            $this->setValor("idcategoria", '0');
            $this->setValor("keywords", '0');
            $this->setValor("metakey", '0');
            $this->setValor("tags", '0');
            $this->setValor("data", '0');
            $this->setValor("img", '0');
            $this->setValor("titulo", '0');
            $this->setValor("subtitulo", '0');
            $this->setValor("descricao", '0');
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idnoticias');
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