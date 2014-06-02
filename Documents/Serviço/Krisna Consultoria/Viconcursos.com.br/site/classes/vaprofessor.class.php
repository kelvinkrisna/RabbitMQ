<?php
require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');
//__autoload('frwnextnumber');

class vaprofessor extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("va_professor");
        if (sizeof($campos) <= 0):
            $this->setValor("idva_professor");
            $this->setValor("nome");
            $this->setValor("site");
            $this->setValor("email");            
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idva_professor');
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
    
    public function inserir($objeto, $enviaemail = false) {
        $nextnumber = new frwnextnumber(array('tipo_Item' => 'PR'));
        $nextnumber->inserir($nextnumber);
        $nextnumber->setExtrasSelect('where tipo_Item = "PR" ');
        $objeto->setValor("idva_professor", $nextnumber->maxRegistros($nextnumber));
        
        parent::inserir($objeto);
    }
    
}
?>