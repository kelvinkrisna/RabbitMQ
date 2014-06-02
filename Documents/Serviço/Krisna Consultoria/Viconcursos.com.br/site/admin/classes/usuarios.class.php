<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');

class usuarios extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("adm_usuario");
        if (sizeof($campos) <= 0):
            $this->setValor("nome");
            $this->setValor("email");
            $this->setValor("senha");
            $this->setValor("ativo");
            $this->setValor("administrador");
            $this->setValor("datacad");

        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('id');
    }

    public function doLogin($objeto) {
        $objeto->setExtrasSelect("WHERE login='" . $objeto->getValor('login') . "' AND senha = '" . codificaSenha($objeto->getValor('senha')) . "' AND
            ativo='S'");

        $objeto->selecionaTudo($objeto);
        $sessao = new sessao();

        if ($objeto->getLinhasAfetadas() == 1):
            $usLogado = $objeto->retornaDados();
            $sessao->setVar('iduser', $usLogado->id);
            $sessao->setVar('nomeuser', $usLogado->Nome);
            $sessao->setVar('loginuser', $usLogado->login);
            $sessao->setVar('logado', TRUE);
            $sessao->setVar('ip', $_SERVER['REMOTE_ADDR']);
            return TRUE;
        else:
            $sessao->destroy(TRUE);
            return FALSE;
        endif;
    }

    public function doLogout() {
        $sessao = new sessao();
        $sessao->destroy(TRUE);
        redireciona('?erro=1');
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