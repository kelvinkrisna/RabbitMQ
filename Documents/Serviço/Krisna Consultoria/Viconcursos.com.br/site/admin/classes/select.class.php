<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));
__autoload('base');

class select {

    public $dados = array();

    public function __construct($field) {
        switch ($field) {
            case 'catprovas':
                $categoria = new catprovas(array(
                    'idcategoprovas' => 'nome',
                    'categoria' => 'email',
                ));
                $categoria->selecionaCampos($categoria);

                $contador = 0;
                while ($row = $categoria->RetornaDados()) :
                    $this->dados[$contador]['id'] = $row->idcategoprovas;
                    $this->dados[$contador]['categoria'] = $row->categoria;
                    $contador++;
                endwhile;
                break;
            case 'catdicas':
                $categoria = new catdicas(array(
                    'idcategdicas' => 'nome',
                    'categdicas' => 'email',
                ));
                $categoria->selecionaCampos($categoria);

                $contador = 0;
                while ($row = $categoria->RetornaDados()) :
                    $this->dados[$contador]['id'] = $row->idcategdicas;
                    $this->dados[$contador]['categoria'] = $row->categdicas;
                    $contador++;
                endwhile;
                break;
            case 'catconcurso':
                $this->dados[0]['id'] = '1';
                $this->dados[0]['categoria'] = 'Principal';
                break;
            case 'catregiao':
                $this->dados[0]['id'] = '1';
                $this->dados[0]['categoria'] = 'Nacional';
                $this->dados[1]['id'] = '2';
                $this->dados[1]['categoria'] = 'Sul';
                $this->dados[2]['id'] = '3';
                $this->dados[2]['categoria'] = 'Suldeste';
                $this->dados[3]['id'] = '4';
                $this->dados[3]['categoria'] = 'Centro-Oeste';
                $this->dados[4]['id'] = '5';
                $this->dados[4]['categoria'] = 'Nordeste';
                $this->dados[5]['id'] = '6';
                $this->dados[5]['categoria'] = 'Norte';
                break;
            case 'catcidade':
                $this->dados[0]['id'] = '1';
                $this->dados[0]['categoria'] = 'Nacional';

                $categoria = new cidades(array(
                    'idcidades' => 'nome',
                    'cidade' => 'email',
                ));
                $categoria->selecionaCampos($categoria);

                $contador = 1;
                while ($row = $categoria->RetornaDados()) :
                    $this->dados[$contador]['id'] = $row->idcidades;
                    $this->dados[$contador]['categoria'] = $row->cidade;
                    $contador++;
                endwhile;
                break;
            case 'vamateria':
                $categoria = new vamateria(array(
                    'idva_materia' => 'nome',
                    'Descricao' => 'Descricao',
                ));
                $categoria->selecionaCampos($categoria);

                $contador = 0;
                while ($row = $categoria->RetornaDados()) :
                    $this->dados[$contador]['id'] = $row->idva_materia;
                    $this->dados[$contador]['categoria'] = $row->Descricao;
                    $contador++;
                endwhile;
                break;
            case 'vaprofessor':
                $categoria = new vaprofessor(array(
                    'idva_professor' => 'nome',
                    'nome' => 'Descricao',
                ));
                $categoria->selecionaCampos($categoria);

                $contador = 0;
                while ($row = $categoria->RetornaDados()) :
                    $this->dados[$contador]['id'] = $row->idva_professor;
                    $this->dados[$contador]['categoria'] = $row->nome;
                    $contador++;
                endwhile;
                break;
               default:
                break;
        }
    }

}

?>