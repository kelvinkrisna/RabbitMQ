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
                    <li>-<a href="{$url}provas/categoria/{$categoria[i].id}/{$categoria[i].titulo_tratado}"> {$categoria[i].categoria}</a></li>
                    {/section}
            </ul>
        </div>
        <div id="resultadoHome">
            <p class="resultadoTit">Resultados para <b style="text-transform:capitalize;">{$string}</b></p>
            <p class="resultadoQuant">Encontrados {$total} resultados</p>
        </div>

        {section name=i loop=$provas}
            {if $smarty.section.i.index == 1 || $smarty.section.i.index == 3 || $smarty.section.i.index == 8 || $smarty.section.i.index == 13 || $smarty.section.i.index == 18}
                <div id="boxHome">
                    <div id="boxInfo2">
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
            {/if}

            <div id="boxHome">
                <div id="boxInfo2">
                    <h1>
                        <a href="{$url}provas/detalhes/{$provas[i].id}/{$provas[i].titulo_tratado}">{$provas[i].titulo}</a>
                    </h1>
                    <span>{$provas[i].descricao}</span>
                </div>
            </div>
        {/section}		
    </div>

    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}