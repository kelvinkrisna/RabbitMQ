{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <h1>Confira a lista das empresas que organizam os concursos públicos </h1>
        <br />
        <p>Confira aqui a lista de organizadoras</p>
        <br />
        <br />
        <div id="organizadoras">
        <ul>
            {section name=i loop=$organizadoras} 
                <li>
                    -<a href="{$organizadoras[i].site}" target="_blank"> {$organizadoras[i].nome}</a>
                </li>
                <br/>
            {/section}
        </ul>
        </div>


        <br />
        <br />
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
        <br />
    </div>
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}