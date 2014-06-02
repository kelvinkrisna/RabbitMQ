{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id='content'>
    <div id="wrapEsq">
        <h1>{$regiao}</h1>
        <br />
        <p id="pdetalhe">Várias dicas pra você estudar e se dar bem nos Concursos Públicos.<br />
            Confira agora mesmo.</p>
        <div id="catVA">
            <ul id="cateG">
                {section name=i loop=$categoria}
                    <li>-<a rel="Dicas de Estudos" class="{$categoria[i].titulo_tratado}" href="{$url}dicas/categoria/{$categoria[i].id}/{$categoria[i].titulo_tratado}"> {$categoria[i].categoria}</a></li>
                 {/section}
            </ul>
        </div>
        {section name=i loop=$dicas}
            {if $smarty.section.i.index == 0 || $smarty.section.i.index == 2}
                <div id="boxHome">
                    <div id="boxThumb">
                        {if $smarty.section.i.index == 0}
                        <img src="{$url}img/dicas/dicas_padrao.jpg" width="80" height="60" alt="Viconcursos - Dicas" /></a></div>                
                        {else}
                        <img src="{$url}img/dicas/dicas_padrao-2.jpg" width="80" height="60" alt="Viconcursos - Dicas" /></a></div>
                        {/if}
                    <div id="boxInfo2">
                        <span>
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
                        </span>
                    </div>
                </div>
            {/if}
            <div id="boxHome">
                <div id="boxThumb"><a rel="Dicas para Concursos P�blicos " class="{$dicas[i].titulo_tratado}-dicas" href="{$url}dicas/detalhes/{$dicas[i].id}/{$dicas[i].titulo_tratado}" title="Dicas e Informações">
                        <img src="{$url}img/dicas/{$dicas[i].img}" width="80" height="60" alt="{$dicas[i].titulo}" /></a></div>                
                <div id="boxInfo2"><h2><a rel="Dicas para Concursos" class="{$dicas[i].titulo_tratado}" href="{$url}dicas/detalhes/{$dicas[i].id}/{$dicas[i].titulo_tratado}">{$dicas[i].titulo}</a></h2>
                    <p><span>{$dicas[i].subtitulo}</span></p></div>
            </div>
        {/section}		
    </div>
        {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}
