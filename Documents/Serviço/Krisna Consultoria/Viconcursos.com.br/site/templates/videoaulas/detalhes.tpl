{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="{$url}videoaulas/geral" title="Voltar para Materias">Video Aulas</a> »
            <a href="{$url}videoaulas/categoria/{$prova[0].idcategoria}/{$prova[0].titulo_tratado_categoria}">{$prova[0].categoria}</a>
        </div>
        <div id="tituloSingle">
            <h1>{$prova[0].titulo}</h1>
        </div>
        <br />
        <br />
        <br />
        <div>
            <iframe width="640" height="360" src="{$prova[0].link}?feature=player_embedded  " frameborder="0" allowfullscreen></iframe>
        </div>
        <br />
        <div id="boxHomeb">
            <div id="boxInfo2">
                <h1>
                    <a href="{$url}videoaulas/detalhes/{$prova[0].id}/{$prova[0].titulo_tratado}">{$prova[0].titulo}</a>
                </h1>
                <span>
                    {$prova[0].descricao}
                </span>
            </div>
            <br />
        </div>
        <br />
        <br />
        <br />
        <div id="adsHome" style="margin-left:13px;">
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
        
        <br /><br /><br /><br />
        <div id="catVA">
            <ul id="cateG">
                {section name=i loop=$categoria}
                    <li>
                        -<a href="{$url}provas/categoria/{$categoria[i].id}/{$categoria[i].titulo_tratado}"> {$categoria[i].categoria}</a>
                    </li>

                {/section}
            </ul>
        </div>

    </div>

    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}