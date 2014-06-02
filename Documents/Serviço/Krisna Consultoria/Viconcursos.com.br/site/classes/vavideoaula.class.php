<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');
__autoload('vaprofessor');

//__autoload('frwnextnumber');

class vavideoaula extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("va_videoaula");
        if (sizeof($campos) <= 0):
            $this->setValor("idva_videoaula");
            $this->setValor("titulo");
            $this->setValor("descricao");
            $this->setValor("acessos");
            $this->setValor("link");
            $this->setValor("idva_materia");
            $this->setValor("idva_professor");
        else:
            $this->setCamposValores($campos);
        endif;
        $this->setCampoPK('idva_videoaula');
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

    public function listVideoAulas($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idva_videoaula;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['descricao'] = mb_convert_encoding($row->descricao, "UTF-8");
            $contador++;
        };
        return $ret;
    }

    public function detailVideoAula($objeto = NULL) {
        $this->selecionaTudo($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idva_videoaula;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['descricao'] = mb_convert_encoding($row->descricao, "UTF-8");
            $ret[$contador]['link'] = $row->link;
            $ret[$contador]['idcategoria'] = $row->idva_materia;

            $categoria = new vamateria();
            $categoria->setExtrasSelect("Where idva_materia = $row->idva_materia");
            $categoria->selecionaTudo($categoria);
            while ($linha = $categoria->RetornaDados()):
                $ret[$contador]['categoria'] = $linha->Descricao;
                $ret[$contador]['titulo_tratado_categoria'] = montaLinks($linha->Descricao);
            endwhile;

            $professor = new vaprofessor();
            $professor->setExtrasSelect("Where idva_professor = $row->idva_professor");
            $professor->selecionaTudo($professor);
            while ($linha = $professor->RetornaDados()):
                $ret[$contador]['professor'] = $linha->nome;
                $ret[$contador]['site'] = $linha->site;
                $ret[$contador]['email'] = $linha->email;
            endwhile;

            $acessos = $row->acessos;
            $chave = $row->idva_videoaula;

            //Atualiza Acesso
            $acessos++;
            $ac = new vavideoaula(array(
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
