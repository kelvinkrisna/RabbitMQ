<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class provas extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("provas");
        if (sizeof($campos) <= 0):
            $this->setValor("titulo", '0');
            $this->setValor("descricao", '0');
            $this->setValor("categ", '0');
            $this->setValor("prova", '0');
            $this->setValor("gabarito", '0');
            $this->setValor("acessos", '0');
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idprovas');
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

    public function listProvas($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idprovas;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['descricao'] = mb_convert_encoding($row->descricao, "UTF-8");
            $contador++;
        };
        return $ret;
    }

    public function detailProvas($objeto = NULL) {
        $this->selecionaTudo($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idprovas;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['descricao'] = mb_convert_encoding($row->descricao, "UTF-8");
            $ret[$contador]['prova'] = $row->prova;
            $ret[$contador]['gabarito'] = $row->gabarito;
            $ret[$contador]['idcategoria'] = $row->categ;
            $categoria = new catprovas();
            $categoria->setExtrasSelect("Where idcategoprovas = $row->categ");
            $categoria->selecionaTudo($categoria);
            while ($linha = $categoria->RetornaDados()):
                $ret[$contador]['categoria'] = $linha->categoria;
                $ret[$contador]['titulo_tratado_categoria'] = montaLinks($linha->categoria);
            endwhile;

            $acessos = $row->acessos;
            $chave = $row->idprovas;

            //Atualiza Acesso
            $acessos++;
            $ac = new provas(array(
                'acessos' => $acessos
            ));
            $ac->setValorPK($chave);
            $ac->atualizar($ac);

            $contador++;
        };
        return $ret;
    }

}

?>