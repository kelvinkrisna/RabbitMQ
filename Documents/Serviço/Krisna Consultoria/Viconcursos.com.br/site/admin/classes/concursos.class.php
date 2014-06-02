<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('emails');
__autoload('email_enviar');
__autoload('base');
__autoload('sessao');

class concursos extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("concursos");
        if (sizeof($campos) <= 0):
            $this->setValor("idconcursos");
            $this->setValor("data");
            $this->setValor("titulo");
            $this->setValor("subtitulo");
            $this->setValor("concurso");
            $this->setValor("acessos");
            $this->setValor("idcategoria");
            $this->setValor("regiao");
            $this->setValor("idcidade");
            $this->setValor("keywords");
            $this->setValor("metakey");
            $this->setValor("tags");
            $this->setValor("inscricoes");
            $this->setValor("edital");
            $this->setValor("vagas");
            $this->setValor("idcategoria1");
            $this->setValor("idcategoria2");
            $this->setValor("idcategoria3");
            $this->setValor("idcategoria4");
            $this->setValor("idcategoria5");
            $this->setValor("idcategoria6");
            $this->setValor("idcategoria7");
            $this->setValor("img");
            $this->setValor("pontos");
            $this->setValor("inscricoesfim");
            $this->setValor("vencimentos");
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idconcursos');
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
        parent::inserir($objeto);

        if ($enviaemail):
            $concurso = new concursos(array(
                'idconcursos' => 0,
                'idcidade' => 0,
            ));

            $concurso->setExtrasSelect('ORDER BY idconcursos DESC Limit 1');
            $concurso->selecionaCampos($concurso);
            $dados = $concurso->RetornaDados();

            $email = new emails(array('IDemail' => 0));
            $email->setExtrasSelect("WHERE cidade=$dados->idcidade");
            $email->selecionaTudo($email);

            while ($row = $email->RetornaDados()):
                $emailenvia = new email_enviar(array(
                    'idemails' => $row->IDemail,
                    'idconcursos' => $dados->idconcursos,
                ));
                $emailenvia->inserir($emailenvia);
            endwhile;
        endif;
    }

}

?>