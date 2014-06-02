{include file='inicio.tpl'}
{include file='menu.tpl'}
<div id="content">
    <div id="wrapEsq" style="width:800px;">
        <h1>Buscar Concursos Públicos </h1><!--/filtroHome--><!--/resultadoHome-->
        <p style="font-size:12px; color:#666; margin-bottom:10px;">Pesquise os melhores concursos de sua cidade e do Brasil. <br />
            O <b>Viconcursos</b> preparou os melhores concursos e dicas pra você.</p>



        <div class="cse-branding-right" style="background-color:#FFFFFF;color:#000000; margin-bottom:5px;">
            <div class="cse-branding-form">
                <form action="{$url}pesquisar/geral" id="cse-search-box">
                    <div>
                        <input type="hidden" name="cx" value="partner-pub-6905686321259168:3948882104" />
                        <input type="hidden" name="cof" value="FORID:10" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="text" name="q" id="iimp" size="55" value="Pesquisar Concursos" />
                        <input type="submit" id="bbb" name="sa" value="Pesquisar" />
                    </div>
                </form>
            </div>
        </div>
        <div id="cse-search-results"></div>
        <script type="text/javascript">
            var googleSearchIframeName = "cse-search-results";
            var googleSearchFormName = "cse-search-box";
            var googleSearchFrameWidth = 100;
            var googleSearchDomain = "www.google.com.br";
            var googleSearchPath = "/cse";
        </script>
        <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
    </div>
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}