{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle"><a href="#">Postado em {$noticia[0].data} - Notícias</a></div>
        <div id="tituloSingle"><h1>{$noticia[0].titulo}</h1></div>
                {include file='plugin/compartilhe.tpl'}
        <div id="adSingleX">
            <div style="background-image:url({$url}imgs/prepare-se.jpg); width:163px; height:30px; background-repeat:no-repeat;"></div>
            <div style=" background-color:#F6F6F6; border:1px solid #E8F0FA; width:161px; height:610px;">	
                {literal}
                    <script type="text/javascript">
                    google_ad_client = "ca-pub-6905686321259168";
                        /* Banner Lateral */
                        google_ad_slot = "1346839303";
                        google_ad_width = 160;
                        google_ad_height = 600;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                {/literal}
            </div>
        </div>    
        <div id="conteudoSingleX">            
            <p>{$noticia[0].noticia}</p>
            <br />
            <div>Postada por:</div>
            <div style="float:left; margin-left:5px;">
                <b>Equipe ViConcursos</b><br />
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
        </div>
        <div style=" clear:both;"></div>
        {include file='plugin/comentarios.tpl'}
    </div>


    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}