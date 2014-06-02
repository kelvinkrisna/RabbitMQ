{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="">Postado em {$concurso[0].data} - Concursos</a>  &nbsp;&nbsp;&nbsp;  
        </div>
        <div id="tituloSingle">
            <h1>{$concurso[0].titulo}  <g:plusone size="medium" href="{$url}{$linkcompleto}"></g:plusone></h1>
        </div>
        {include file='plugin/compartilhe.tpl'}
        <br />
        <table width="650" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td> 
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
                </td>
                <td align="left">  
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
                </td>
            </tr>
        </table>
        <div id="adSingleX">
            <div style="background-image:url({$url}img/prepare-se.jpg); width:163px; height:30px; background-repeat:no-repeat;">
            </div>
            <div style=" background-color:#F6F6F6; border:1px solid #E8F0FA; width:161px; height:610px;">	
                {literal}
                    <script type="text/javascript">
                        <!--
                        google_ad_client = "ca-pub-6905686321259168";
                        /* Banner Lateral */
                        google_ad_slot = "1346839303";
                        google_ad_width = 160;
                        google_ad_height = 600;
                        //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                {/literal}
            </div>            
        </div>         
        <div id="conteudoSingleX">
            <p>
            <div>
                <b>Informações sobre o Concurso:</b>
            </div>
            <div style="text-align: justify">
                <br />
                {$concurso[0].concurso}

                <br />
                <br />
            </div>
            <div>
                <h2>
                    <a href="{$concurso[0].edital}" target="_blank"> Edital</a>
                </h2>
                <br />
                <br />
            </div>

            {if $concurso[0].nome!=""} 
                {include file='plugin/compartilhe.tpl'}
                <br />
                <div>Postado por:</div>
                <div style="float:left; margin-left:5px;">
                    <b>Equipe ViConcursos</b><br />
                </div>
            {/if}
            <br />
            <br />
            <div id="adsHome">
                {literal}
                    <script type="text/javascript">
                        <!--
                        google_ad_client = "ca-pub-6905686321259168";
                        /* Left Detail Concursos */
                        google_ad_slot = "1486440100";
                        google_ad_width = 200;
                        google_ad_height = 90;
                        //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script> 
                {/literal}
            </div>
        </div>
        <div style=" clear:both;"></div>
        {include file='plugin/comentarios.tpl'}
        <br />
    </div>
    {include file='sidebar.tpl'}
</div>

<!--<div style="clear:both"></div>-->

{include file='fim.tpl'}