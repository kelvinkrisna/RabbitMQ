{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <div style="float:left">
            <h1>Not&iacute;cias | Concursos P&uacute;blicos</h1>
        </div>
        <div style="float:left; margin-left:10px;  ">
            <a href="http://feeds.feedburner.com/ViconcursosNews" target="_blank">
                <img src="{$url}img/rss.jpg" width="28" height="28" border="0" />
            </a>
        </div>
        <div id="rsstxt">
            <a href="http://feeds.feedburner.com/ViconcursosNews" target="_blank">Assinar Feed?</a>
        </div>
        <div style="clear:both;"></div>
        <p style="font-size:12px; padding: 10px; text-justify: auto;">Fique por dentro do que Acontece sobre Concursos P&uacute;blicos e muito mais como vagas de Empregos, Est&aacute;gios, Processo Seletivos.

        </p>
        {section name=i loop=$noticias}
            {if $smarty.section.i.index == 0 || $smarty.section.i.index == 2}
                <div id="adsHome">
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
            {/if}
            <!--INICIO: Paginacão -->

            <div id="boxNoticias">             
                <p>Postado em {$noticias[i].data}</p>
                <h2><a rel="Aulas Concursos" class="{$noticias[i].titulo_tratado}" href="{$url}noticias/detalhes/{$noticias[i].id}/{$noticias[i].titulo_tratado}">{$noticias[i].titulo}</a></h2>
                <p><span>{$noticias[i].subtitulo}</span></p>
            </div>
        {/section}  
    </div>
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}