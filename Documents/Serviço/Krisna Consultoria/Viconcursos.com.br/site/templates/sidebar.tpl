{assign var="maisacessados" value=$maisacessados|default:"0"}

<div id="sidebar">

    <div id="side">
        <h1>Mais Links</h1>
        <ul id="side-menu" class="clearfix">
            <li classe="item-menu item1"><a href="{$url}organizadoras/geral">Organizadoras</a></li>
        </ul>
    </div>
    <br />
    <center>
        {if $maisacessados == '1'}
            <div id="principaisconcursos">
                <h1>Concursos Mais Acessados!</h1>
                <div id="conteudoprincipaisconcursos">
                    <ul>
                        {section name=i loop=$maisacessadoslist}
                            <br />
                            <li><a rel="Concursos P&uacute;blicos" class="{$maisacessadoslist[i].titulo_tratado}" href="{$url}concursos/detalhes/{$maisacessadoslist[i].id}/{$maisacessadoslist[i].titulo_tratado}">{$maisacessadoslist[i].titulo}</a></li>

                        {/section}
                    </ul>
                </div>
            </div>
        {/if}
        <br />
        <br />
    </center>
    <center>
        {literal}
            <script type="text/javascript"><!--
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
    </center>
    <br />
    <center>
        <div class="fb-like-box" data-href="https://www.facebook.com/viconcursos" data-width="300" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div> 
    </center>
    <br />
    <br />
    <center>
        <a href="http://www.iobconcursos.com/promocao/B06500" style="text-decot"> <img src="https://www.iobconcursos.com/_site/_img/banners/cursos-online-concursos-5-1.jpg" alt="Desconto em Cursos Online para Concursos" title="IOB Concursos - Cursos Preparatórios Online"> </a>
        <br />
        <br />            
    </center>
    <center>
        <br />
        <br />
        <script charset="utf-8" type="text/javascript" src="http://www.novaconcursos.com.br/afiliadoswidget/index/widget/?account_id=60&background=FFFFFF&border=FFFFFF&category_ids=180&is_image=1&is_price=1&is_rated=1&is_short_desc=0&name=Lateral&search=&textbody=101010&textheader=2F5E2F&textlink=0000FF&widget_size=300x250"></script><noscript><a href="http://www.novaconcursos.com.br/?acc=093f65e080a295f8076b1c5722a46aa2">Nova Concursos</a></noscript>
    </center>
    <center>
        {literal}
            <script type="text/javascript"><!--
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
    </center>
    <br />
    <br />
    <center>
        {literal}
            <script type="text/javascript">
                bb_bid = "1684324";
                bb_lang = "pt-BR";
                bb_name = "custom";
                bb_limit = "6";
                bb_format = "bbn";
            </script>
            <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
        {/literal}
    </center>
    <br />
    <br />
</div><!--/tituloVA-->  
<div id="ADD">
    <center>
        <script type="text/javascript">
            <!--
            google_ad_client = "ca-pub-6905686321259168";
            /* Banner novo */
            google_ad_slot = "1209068506";
            google_ad_width = 728;
            google_ad_height = 90;
        </script>
        <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </center>
</div>