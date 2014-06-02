{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <h1>Concursos Região - <b style="text-transform:capitalize;">{$regiao}</b></h1>
        <p style="font-size:12px; margin-top:5px; margin-bottom:5px;">Confira os principais Concursos Públicos da região: <span style="text-transform:capitalize;">{$regiao}</span>, aproveite e fique atento para se preparar.</p>
        <div id="resultadoDados">
            <p class="resultadoQuant">Encontrados {$total} registros</p>
        </div>
        <div id="filtroHome">
            <table width="600" border="0">
                <tr>
                    <td>Região</td>
                    <td>Estado</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <select name="Regiao" id="regiao" class="inputFiltroHome">
                            <option value="0">Selecione a região</option>
                            <option value="1">Nacionais</option>
                            <option value="5">Centro-Oeste</option>
                            <option value="4">Norte</option>
                            <option value="2">Nordeste</option>
                            <option value="6">Sul</option>
                            <option value="3">Sudeste</option>
                        </select>
                    </td>
                    <td>
                        <div id="uf">
                            <select name="Estado" id="estado" class="inputFiltroHome" disabled>
                                <option value="0">Selecione o estado</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <input class="botaoVermelho" type="submit" name="Ok" id="filtro" value="Buscar concursos" />
                    </td>
                </tr>
            </table>
        </div><!--/filtroHome--> 
        <div id="resultadoHome">
            <script type="text/javascript">
                google_ad_client = "ca-pub-6905686321259168";
                /* Concursos */
                google_ad_slot = "6335442104";
                google_ad_width = 468;
                google_ad_height = 15;
                //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        </div>
        {section name=i loop=$concursos}
            {if $smarty.section.i.index == 0 || $smarty.section.i.index == 2 }
                <div id="boxHomer">
                    <div id="boxData">Veja</div>
                    <div id="boxInfo">        
                        {literal}
                            <script type="text/javascript">
                                google_ad_client = "ca-pub-6905686321259168";
                                /* ViConcursos */
                                google_ad_slot = "4581337305";
                                google_ad_width = 468;
                                google_ad_height = 60;
                                //-->
                            </script>
                            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                        {/literal}  
                    </div>
                </div>
            {/if}

            <div id="boxHomer">
                <div id="boxData">{$concursos[i].data}</div>                
                <div id="boxInfo">
                    <h2 id="titulo-regiao">
                        <a  rel="bookmark" href="{$url}concursos/detalhes/{$concursos[i].id}/{$concursos[i].titulo_tratado}">{$concursos[i].titulo}</a>
                    </h2>
                    <span id="texto-reigao">{$concursos[i].subtitulo}</span>
                    <p id="ver-todos">
                        Postado em <b><a href="#" title="Ver todos os concursos em {$regiao}">{$regiao}</a></b>
                    </p>
                </div>
            </div>
        {/section}   
    </div>
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}
    