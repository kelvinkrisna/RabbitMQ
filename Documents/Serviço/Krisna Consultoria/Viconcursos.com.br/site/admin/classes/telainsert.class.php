<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');
__autoload('sessao');
__autoload('select');


class telainsert extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("frw_telainsert");
        if (sizeof($campos) <= 0):
            $this->setValor("modulo");
            $this->setValor("tela");
            $this->setValor("name");
            $this->setValor("labelnome");
            $this->setValor("type");
            $this->setValor("value");
            $this->setValor("descricao");
        else:
            $this->campos_valores = $campos;
        endif;
        $this->setCampoPK('id');
    }

    public function montaTela($modulo = NULL, $tela = NULL, $objeto = NULL, $dadosdb = NULL) {
        $ret = array();
        $contador = 0;

        $objeto->setExtrasSelect("WHERE modulo = '" . $modulo . "' and tela = '" . $tela . "' order by sequencia");
        $objeto->selecionaTudo($objeto);

        while ($row = $objeto->RetornaDados('array')) {

            if ($row['type'] == 'checkbox'):
                $ret[$contador]['disable'] = (!isAdmin());
                if ($dadosdb != NULL):
                    $ret[$contador]['checked'] = ( strtoupper($dadosdb[$row['value']]) == 'S');
                ELSE:
                    $ret[$contador]['checked'] = FALSE;
                endif;
            else:
                $ret[$contador]['disable'] = $row['enabled'];
            endif;

            $ret[$contador]['modulo'] = $row['modulo'];
            $ret[$contador]['tela'] = $row['tela'];
            $ret[$contador]['name'] = $row['name'];
            $ret[$contador]['labelnome'] = $row['labelname'];
            $ret[$contador]['type'] = $row['type'];
            if ($dadosdb != NULL):
                if ($row['type'] === 'password'):
                    $ret[$contador]['value'] = '';
                else:
                    $ret[$contador]['value'] = $dadosdb[$row['value']];
                endif;

            else:
                $ret[$contador]['value'] = $dadosdb[$row['value']];
            endif;
            $ret[$contador]['size'] = $row['size'];
            if ($row['type'] === 'select'):
                $select = new select($row['descricao']);
                $ret[$contador]['select'] = $select->dados;                
            else:
                $ret[$contador]['descricao'] = $row['descricao'];
            endif;

            $contador++;
        };

        return $ret;
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