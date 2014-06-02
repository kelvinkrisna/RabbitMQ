<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class usuariosOnline extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("usuarios_online");
        if (sizeof($campos) <= 0):
            $this->setValor("time", '0');
            $this->setValor("session", '0');
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('session');
    }

    //Verifica quantos estão online
    function VerificaUsuario($objeto = NULL) {
        ob_start();
        session_start();
        $session = session_id();
        $time = time();
        $time_check = $time - 100;
        $objeto->setExtrasSelect("where session='$session'");
        $conta = $objeto->contaRegistros($objeto);
        if ($conta == '0'):
            $objeto->setValor('session', $session);
            $objeto->setValor('time', $time);
            $objeto->inserir($objeto);
        else:
            $objeto->setValor('session', $session);
            $objeto->setValor('time', $time);
            $objeto->setValorPK($session);
            $objeto->atualizar($objeto);
        endif;

        $objeto->setExtrasSelect("where time < $time_check");
        $objeto->deletarWhere($objeto);
    }

}

?>