{include file='inicio.tpl'}
{include file='menu.tpl'}
{assign var="paginacao" value=$paginacao|default:"0"}
<div id="content">
    <div id="wrapEsq">
        <h1>Concursos P&uacute;blicos  <g:plusone size="medium"></g:plusone></h1>    
        <br />
        <p id="Melhores">Se voc&ecirc; procura estabilidade, seguran&ccedil;a e &oacute;timos sal&aacute;rios. Aqui &eacute; o seu site. Encontre os melhores concursos.</p>
        <div id="wrapEsqhxxx">Buscar concursos</div>
        <div style="clear:both;"></div>
        <div id="filtroHome">
            <table width="600" border="0">
                <tr>
                    <td>Região</td>
                    <td>Estado</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><select name="Regiao" id="regiao" class="inputFiltroHome">
                            <option value="0">Selecione a região</option>
                            <option value="1">Nacionais</option>
                            <option value="5">Centro-Oeste</option>
                            <option value="4">Norte</option>
                            <option value="2">Nordeste</option>
                            <option value="6">Sul</option>
                            <option value="3">Sudeste</option>
                        </select>
                    </td>
                    <td>
                        <div id="uf">
                            <select name="Estado" id="estado" class="inputFiltroHome" disabled>
                                <option value="0">Selecione o estado</option>
                            </select>
                        </div>
                    </td>
                    <td><input class="botaoVermelho" type="submit" name="Ok" id="filtro" value="Buscar concursos" /></td>
                </tr>
            </table>
        </div>
        <div id="miolo">
            <div id="abasHomex">
                <ul>
                    <li class="abaSel"><a id="tab1" href="{$url}modulos/tabs.php?id=1">Últimos concursos</a></li>
                    <li class="notix"><a id="tab2" href="{$url}modulos/tabs.php?id=2">Últimas notícias</a></li>
                    <li class="ultimasdicas"><a id="tab3" href="{$url}modulos/tabs.php?id=3">Últimas dicas e informações</a></li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div id="tabcontent">
                {section name=i loop=$concursos}
                    <div id="boxHome">
                        <div id="boxData">{$concursos[i].data}</div>                
                        <div id="boxInfo">
                            <h2 style="float:left">
                                <a rel="Concursos Públicos Abertos" class="{$concursos[i].titulo_tratado}" href="{$url}concursos/detalhes/{$concursos[i].id}/{$concursos[i].titulo_tratado}">{$concursos[i].titulo}</a></h2>
                            <div style="float:left; padding-top:0px; padding-left:10px;"> 
                                <img src="{$url}img/em-aberto-viconcursos.jpg" title="Concursos em Abertos" alt="Concursos P&Uacute;blicos em Abertos" width="67" height="18" />
                            </div>
                            <div style="clear:both;"></div>
                            <p><span>{$concursos[i].subtitulo}</span></p>
                        </div>
                    </div>
                {/section}  
                {if $paginacao == '1'}
                    <div id='paginacao'>{$htmlpaginacao}</div>
                {/if}
            </div>
            <div id="preloader">
                <img src="img/loading.gif" align="absmiddle"> Loading...				
            </div>
            <div id='paginacao'> </div> 
        </div>
    </div>
    {include file='sidebar.tpl'}
</div>
<!--<div style="clear:both"></div>-->
{include file='fim.tpl'}