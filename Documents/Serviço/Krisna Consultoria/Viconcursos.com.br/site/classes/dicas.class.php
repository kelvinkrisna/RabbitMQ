<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('catdicas');

class dicas extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("dicas");
        if (sizeof($campos) <= 0):
            $this->setValor("titulo", '0');
            $this->setValor("subtitulo", '0');
            $this->setValor("descricao", '0');
            $this->setValor("metatitulo", '0');
            $this->setValor("data", '0');
            $this->setValor("dica", '0');
            $this->setValor("tags", '0');
            $this->setValor("idcategdicas", '0');
            $this->setValor("keywords", '0');
            $this->setValor("meta", '0');
            $this->setValor("img", '0');
            $this->setValor("acessos", '0');
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

    public function listDicas($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->iddicas;
            $ret[$contador]['data'] = ExtdData($row->data);
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['subtitulo'] = mb_convert_encoding($row->subtitulo, "UTF-8");
            if ($row->img === ''):
                $ret[$contador]['img'] = 'dicas_padrao.jpg';
            else:
                $ret[$contador]['img'] = $row->img;
            endif;
            $contador++;
        };

        return $ret;
    }

    public function detailDicas($dica = NULL) {
        $this->selecionaTudo($dica);
        $contador = 0;
        $ret = array();
        while ($row = $dica->retornaDados()) {
            $ret[$contador]['id'] = $row->iddicas;
            $ret[$contador]['data'] = $row->data;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['subtitulo'] = mb_convert_encoding($row->subtitulo, "UTF-8");
            $ret[$contador]['dica'] = $row->dica;
            $catdicas = new catdicas(array('idcategdicas' => '', 'categdicas' => ''));
            $catdicas->setExtrasSelect('WHERE idcategdicas = ' . $row->idcategdicas);
            $catdicas->selecionaCampos($catdicas);
            while ($rowdica = $catdicas->retornaDados()):
                $ret[$contador]['idcat'] = $rowdica->idcategdicas;
                $ret[$contador]['titulocat_tratado'] = montaLinks($rowdica->categdicas);
                $ret[$contador]['titulocat'] = $rowdica->categdicas;
            endwhile;
            $acessos = $row->acessos;
            $chave = $row->iddicas;

            //Atualiza Acesso
            $acessos++;
            $dicas = new dicas(array(
                'acessos' => $acessos
            ));
            $dicas->setValorPK($chave);
            $dicas->atualizar($dicas);

            $contador++;
        };


        return $ret;
    }

}

?>