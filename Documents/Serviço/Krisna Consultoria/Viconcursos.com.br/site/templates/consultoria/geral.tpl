{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <h1>D&uacute;vidas Jur&iacute;dicas</h1>
        <br />
        <h2> Confira aqui algumas dúvidas e se vocês possue alguma dúvida não deixe de perguntar nossos especialistas irão responder e postaremos aqui.</h2>
        <br />            
        {section name=i loop=$juridico}
            {if $smarty.section.i.index == 1 || $smarty.section.i.index == 3}
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
                        <script type="text/javascript"
                                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                    {/literal}  
                </div>
            {/if}
            <div id="boxNoticias">             
                <p>Postado em {$juridico[i].data}</p>
                <h1><a href="{$url}consultoria/detalhes/{$juridico[i].id}/{$juridico[i].titulo_tratado}">{$juridico[i].titulo}</a></h1>
                <span>{$juridico[i].descricao}</span>
            </div>
        {/section}   
    </div>
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}