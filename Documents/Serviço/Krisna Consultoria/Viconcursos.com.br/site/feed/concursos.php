<?php
require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('concursos');
// Intanciamos/chamamos a classe
$rss = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><rss></rss>');

$rss->addAttribute('version', '2.0');

// Cria o elemento <channel> dentro de <rss>
$canal = $rss->addChild('channel');

// Adiciona sub-elementos ao elemento <channel>
$canal->addChild('title', 'Vi Concursos - Tudo sobre concursos publicos no brasil');
$canal->addChild('link', 'http://www.viconcursos.com');
$canal->addChild('description', 'Concursos Publicos e Apostilas - Quer Passar em Concursos, Editais, Provas, Gabaritos, Resultados, Empregos, Estagios, dicas para concursos, Dicas, Ofertas de Emprego.');
$canal->addChild('language', 'pt-br');

$concursos = new concursos(array('idconcursos' => '', 'data' => '', 'titulo' => '', 'subtitulo' => ''));
$concursos->setExtrasSelect('order by idconcursos desc');
$concursos->selecionaCampos($concursos);
while ($row = $concursos->retornaDados()) {
    $id = $row->idconcursos;
    $data = date(DATE_RFC822, strtotime(str_replace('/', '-', $row->data)));;
    $titulo = $row->titulo;
    $titulo_tratado = montaLinks($row->titulo);
    $subtitulo = $row->subtitulo;

    // Cria outro elemento <item> dentro de <channel>
    $item = $canal->addChild('item');

// Adiciona sub-elementos ao elemento <item>
    $item->addChild('title', $titulo);
    $item->addChild('link', BASEURL . "concursos/detalhes/" . $id . "/" . $titulo_tratado);
    $item->addChild('description', $subtitulo);
    $item->addChild('pubDate', $data);
    $item->addChild('author', 'contato@viconcursos.com (Equipe ViConcursos)');
};

header("content-type: application/rss+xml; charset=utf-8");
// Entrega o conteúdo do RSS completo:
echo $rss->asXML();
exit;
?>
