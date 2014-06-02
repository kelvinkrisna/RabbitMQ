{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="{$url}provas/geral" title="Voltar para Categorias">Provas</a> »
            <a href="{$url}provas/categoria/{$prova[0].idcategoria}/{$prova[0].titulo_tratado_categoria}">{$prova[0].categoria}</a>
        </div>
        <div id="tituloSingle">
            <h1>{$prova[0].titulo}</h1>
        </div>

        <h1>Provas e Gabaritos de Concursos Anteriores:</h1>

        <div id="txtcategProvas">
            O Viconcursos preparou uma sele&ccedil;&atilde;o de provas de concursos anteriores para que voc&ecirc; possa estudar. Aproveite ao maximo. Sendo assim as provas que temos em nossos banco de dados j&aacute; vem com os gabaritos, para que voc&ecirc; possa aproveitar e estudar para um concurso futuro relacionado ao que voc&ecirc; deseja.<br />                
        </div>

        <div id="catVA">
            <ul id="cateG">
                {section name=i loop=$categoria}
                    <li>
                        -<a href="{$url}provas/categoria/{$categoria[i].id}/{$categoria[i].titulo_tratado}"> {$categoria[i].categoria}</a>
                    </li>

                {/section}
            </ul>
        </div>

        <div id="boxHomeb">
            <div id="boxInfo2">
                <h1>
                    <a href="{$url}provas/detalhes/{$prova[0].id}/{$prova[0].titulo_tratado}">{$prova[0].titulo}</a>
                </h1>
                <span>
                    {$prova[0].descricao}
                </span>
            </div>
            <br />
        </div>
        <div id="pprova">
            <a href="{$prova[0].prova}" target="_blank" title="Ver Provas">Prova </a> | <a href="{$prova[0].gabarito}" target="_blank" title="Ver Gabarito">Gabarito</a>
        </div>
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

    </div>

    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}