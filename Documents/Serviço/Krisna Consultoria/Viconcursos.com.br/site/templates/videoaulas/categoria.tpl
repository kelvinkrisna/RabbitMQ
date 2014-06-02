{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">  
    <div id="wrapEsq">
        <h1>Vídeo Aulas para preparação dos Concursos Públicos</h1>
        <div id="txtcategProvas">
            <p>Confira aqui as videos aulas, elas estão separadas por materias para facilitar o estudo.</p>
        </div>

        <div id="catVA">
            <ul id="cateG">
                {section name=i loop=$categoria}
                    <li>-<a href="{$url}videoaula/categoria/{$categoria[i].id}/{$categoria[i].titulo_tratado}"> {$categoria[i].categoria}</a></li>
                    {/section}
            </ul>
        </div>
        <div id="resultadoHome">
            <p class="resultadoTit">Resultados para <b style="text-transform:capitalize;">{$string}</b></p>
            <p class="resultadoQuant">Encontrados {$total} resultados</p>
        </div>

        {section name=i loop=$provas}
            {if $smarty.section.i.index == 1 || $smarty.section.i.index == 3 || $smarty.section.i.index == 8 || $smarty.section.i.index == 13 || $smarty.section.i.index == 18}
                <div id="boxHome">
                    <div id="boxInfo2">
                        {literal}
                            <script type="text/javascript">
                                google_ad_client = "ca-pub-6905686321259168";
                                /* ViConcursos */
                                google_ad_slot = "4581337305";
                                google_ad_width = 468;
                                google_ad_height = 60;
                                //-->
                            </script>
                            <script type="text/javascript"
                                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                        {/literal}
                    </div>
                </div>
            {/if}

            <div id="boxHome">
                <div id="boxInfo2">
                    <h1>
                        <a href="{$url}videoaulas/detalhes/{$provas[i].id}/{$provas[i].titulo_tratado}">{$provas[i].titulo}</a>
                    </h1>
                    <span>{$provas[i].descricao}</span>
                </div>
            </div>
        {/section}		
    </div>

    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}