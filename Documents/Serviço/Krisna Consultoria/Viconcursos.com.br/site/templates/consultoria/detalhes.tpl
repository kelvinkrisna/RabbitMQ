{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle"><a href="#">Postado em {$juridico[0].data} - Dúvidas Jurídicas</a></div>

        <div id="tituloSingle"><h1>{$juridico[0].titulo}</h1></div>
                {include file='plugin/compartilhe.tpl'}
        <div id="conteudoSingle">
            <div id="adSingle">
                {literal}
                    <script type="text/javascript">
                        google_ad_client = "ca-pub-6905686321259168";
                        /* Juridico */
                        google_ad_slot = "9198276105";
                        google_ad_width = 300;
                        google_ad_height = 250;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                {/literal}
            </div>
            <div>
                <p>{$juridico[0].texto}</p>
            </div>
            <br />
        </div>
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
        {include file='plugin/comentarios.tpl'}
    </div>
    {include file='sidebar.tpl'}
</div>
<div style="clear:both"></div>
{include file='fim.tpl'}