<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class concursos extends base {

    public function __construct($campos = array()) {
        parent::__construct();
        $this->setTabela("concursos");
        if (sizeof($campos) <= 0):
            $this->setValor("data", '0');
            $this->setValor("titulo", '0');
            $this->setValor("subtitulo", '0');
            $this->setValor("concurso", '0');
            $this->setValor("acessos", '0');
            $this->setValor("idcategoria", '0');
            $this->setValor("regiao", '0');
            $this->setValor("idcidade", '0');
            $this->setValor("keywords", '0');
            $this->setValor("metakey", '0');
            $this->setValor("tags", '0');
            $this->setValor("inscricoes", '0');
            $this->setValor("edital", '0');
            $this->setValor("vagas", '0');
            $this->setValor("idcategoria1", '0');
            $this->setValor("idcategoria2", '0');
            $this->setValor("idcategoria3", '0');
            $this->setValor("idcategoria4", '0');
            $this->setValor("idcategoria5", '0');
            $this->setValor("idcategoria6", '0');
            $this->setValor("idcategoria7", '0');
            $this->setValor("img", '0');
            $this->setValor("pontos", '0');
            $this->setValor("inscricoesfim", '0');
            $this->setValor("niveis", '0');
            $this->setValor("vencimentos", '0');
            $this->setValor("dataHora", '0');
            $this->setValor("Nome", '0');
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

    public function listConcursos($objeto = NULL) {
        $this->selecionaCampos($objeto);
        $contador = 0;
        $ret = array();
        while ($row = $objeto->retornaDados()) {
            $ret[$contador]['id'] = $row->idconcursos;
            $date = new DateTime($row->inscricoesfim);
            
            $dia = $date->format('d');
            $mes = $date->format('m');
            switch ($mes) {
                case 1: $mes = "JAN";
                    break;
                case 2: $mes = "FEV";
                    break;
                case 3: $mes = "MAR";
                    break;
                case 4: $mes = "ABR";
                    break;
                case 5: $mes = "MAI";
                    break;
                case 6: $mes = "JUN";
                    break;
                case 7: $mes = "JUL";
                    break;
                case 8: $mes = "AGO";
                    break;
                case 9: $mes = "SET";
                    break;
                case 10: $mes = "OUT";
                    break;
                case 11: $mes = "NOV";
                    break;
                case 12: $mes = "DEZ";
                    break;
            }
            $ret[$contador]['data'] = $dia . " ".$mes;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['subtitulo'] = mb_convert_encoding($row->subtitulo, "UTF-8");
            $contador++;
        };
        return $ret;
    }

    public function detailConcurso($concurso = NULL) {
        $this->selecionaTudo($concurso);
        $contador = 0;
        $ret = array();
        while ($row = $concurso->retornaDados()) {
            $ret[$contador]['id'] = $row->idconcursos;
            $ret[$contador]['data'] = $row->data;
            $ret[$contador]['titulo'] = mb_convert_encoding($row->titulo, "utf-8");
            $ret[$contador]['titulo_tratado'] = montaLinks($row->titulo);
            $ret[$contador]['subtitulo'] = mb_convert_encoding($row->subtitulo, "UTF-8");
            $ret[$contador]['concurso'] = $row->concurso;
            $ret[$contador]['edital'] = $row->edital;
            $ret[$contador]['nome'] = $row->nome;

            $acessos = $row->acessos;
            $chave = $row->idconcursos;

            //Atualiza Acesso
            $acessos++;
            $ac = new concursos(array(
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