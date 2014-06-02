{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id='content'>
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="javascript:void(0)">Postado em {$dicas[0].data}</a> - <a href="{$url}dicas/geral" title="Voltar para Categorias">Dicas</a> » 
            <a href="{$url}dicas/categoria/{$dicas[0].idcat}/{$dicas[0].titulocat_tratado}">{$dicas[0].titulocat}</a>
        </div>
        <div id="tituloSingle">
            <h1>{$dicas[0].titulo}</h1>
        </div>
        {include file='plugin/compartilhe.tpl'}
        <div id="conteudoSingle">
            <div id="adSingle">
                {literal}<script type="text/javascript">
                    google_ad_client = "ca-pub-6905686321259168";
                    /* DetailConcurso */
                    google_ad_slot = "6056240501";
                    google_ad_width = 336;
                    google_ad_height = 280;
//-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                {/literal} 
            </div>
            <p>
                {$dicas[0].dica}
            </p>
        </div>
        <div style=" clear:both;"></div>
        {include file='plugin/comentarios.tpl'}
    </div>
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}
