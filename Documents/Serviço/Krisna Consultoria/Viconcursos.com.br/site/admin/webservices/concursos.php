<?php

require_once dirname(dirname(dirname(__FILE__))) . '/lib/lib/nusoap.php';
require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('concursos');
__autoload('cidades');

function adicionaConcurso($concurso, $vagas, $datafim, $edital, $uf) {
    //Valido a Data.
    if ($datafim != NULL):
        $data = implode("-", array_reverse(explode("/", $datafim)));
    else:
        return "1234 - Data Vazia.";
    endif;

    //Valido o nome do concurso.
    if ($concurso == NULL):
        return "1234 - Concurso Invalido";
    endif;

    //Valido as Vagas.
    if (!is_numeric($vagas)):
        return "1234 - Vagas Invalidas";
    endif;

    //Valido o link do Edital.
    if ($edital == NULL):
        return "1234 - Concurso Invalido";
    endif;

    if ($uf != NULL):
        $cidades = new cidades();
        $cidades->setExtrasSelect("where uf = '$uf'");
        $cidades->selecionaTudo($cidades);
        $row = $cidades->RetornaDados();
        $regiao = $row->idregiao;
        $estado = $row->idcidades;
    else:
        $regiao = 1;
        $estado = 12;
    endif;

    $concursos = new concursos(array(
        'titulo' => $concurso,
        'data' => date("d/m/Y"),
        'inscricoes' => $edital,
        'edital' => $edital,
        'vagas' => $vagas,
        'inscricoesfim' => $data,
        'idcategoria' => '1',
        'regiao' => $regiao,
        'idcidade' => $estado,
    ));
    $concursos->inserir($concursos, TRUE);
    if ($concursos->getLinhasAfetadas() == '1'):
        return "OK";
    else :
        return "999 - Erro inserir";
    endif;
}

$server = new soap_server();
$server->configureWSDL("concursos", "urn:concursos");

$server->register("adicionaConcurso", array("concurso" => "xsd:string", "vagas" => "xsd:string", "datafim" => "xsd:string", "edital" => "xsd:string", "uf" => "xsd:string"), array("return" => "xsd:string"), "urn:concursos", "urn:concursos#adicionaConcurso", "rpc", "encoded", "Add Concursos.");

$server->service($HTTP_RAW_POST_DATA);
?>