<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('catprovas');
__autoload('provas');
// Intanciamos/chamamos a classe
$rss = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><rss></rss>');

$rss->addAttribute('version', '2.0');

// Cria o elemento <channel> dentro de <rss>
$canal = $rss->addChild('channel');

// Adiciona sub-elementos ao elemento <channel>
$canal->addChild('title', 'Vi Concursos - Tudo sobre concursos publicos no brasil - Provas');
$canal->addChild('link', 'http://www.viconcursos.com');
$canal->addChild('description', 'Concursos Publicos e Apostilas - Quer Passar em Concursos?, Editais, Provas, Gabaritos, Resultados, Empregos, Estagios, dicas para concursos, Dicas, Ofertas de Emprego.');
$canal->addChild('language', 'pt-br');

$Categoria = new catprovas();
$Categoria->setExtrasSelect('Order by categoria asc');
$Categoria->selecionaTudo($Categoria);
while ($row = $Categoria->RetornaDados()) {
    $titulo_tratado = mb_convert_encoding($row->categoria, "utf-8");
    // Cria outro elemento <item> dentro de <channel>
    $item = $canal->addChild('item');
    // Adiciona sub-elementos ao elemento <item>
    $item->addChild('title', $row->categoria);
    $item->addChild('link', BASEURL . "provas/categoria/$row->idcategoprovas/$titulo_tratado");
    $item->addChild('description', $row->meta);
    $item->addChild('author', 'contato@viconcursos.com (Equipe ViConcursos)');

    $provas = new provas(array('idprovas' => '', 'titulo' => '', 'descricao' => ''));
    $provas->setExtrasSelect(" WHERE categ = $row->idcategoprovas");
    $provas->selecionaTudo($provas);
    while ($row1 = $provas->retornaDados()) {

        $id = $row1->idprovas;
        $titulo = $row1->titulo;
        $titulo_tratado = montaLinks($row1->titulo);
        $subtitulo = $row1->descricao;

        // Cria outro elemento <item> dentro de <channel>
        $item = $canal->addChild('item');

        // Adiciona sub-elementos ao elemento <item>
        $item->addChild('title', $titulo);
        $item->addChild('link', BASEURL . "concursos/detalhes/" . $id . "/" . $titulo_tratado);
        $item->addChild('description', $subtitulo);
        $item->addChild('author', 'contato@viconcursos.com (Equipe ViConcursos)');
    }
}

header("content-type: application/rss+xml; charset=utf-8");
// Entrega o conteúdo do RSS completo:
echo $rss->asXML();
exit;
?>
