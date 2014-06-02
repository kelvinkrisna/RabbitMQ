{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <h1>Provas e Gabaritos de Concursos Anteriores:</h1>
        <div id="txtcategProvas">
            O Viconcursos preparou uma seleção de provas de concursos anteriores para que você possa estudar. Aproveite ao maximo. Sendo assim as provas que temos em nossos banco de dados já vem com os gabaritos, para que você possa aproveitar e estudar para um concurso futuro relacionado ao que você deseja.
        </div> 
        <div id="catVA">
            <ul id="cateG">
                {section name=i loop=$categoria} 
                    <li>
                        -<a href="{$url}videoaula/materia/{$categoria[i].id}/{$categoria[i].titulo_tratado}"> {$categoria[i].categoria}</a>
                    </li>
                {/section}
            </ul>
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
        <br />
        <div id="adsHome">
            {literal} 
                <script type="text/javascript">
                    bb_bid = "1684324";
                    bb_lang = "pt-BR";
                    bb_name = "custom";
                    bb_limit = "7";
                    bb_format = "bbc";
                </script>
                <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
            {/literal}  
        </div>
    </div>
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}