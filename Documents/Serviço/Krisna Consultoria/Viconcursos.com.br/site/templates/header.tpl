<div id="wrap">
    <div id="topo">
        <div id="logoTopo">
            <a href="{$url}" title="Página Inicial V&iacute;oncursos">
                <img src="{$url}img/logo.png" title="Concursos P&uacute;blicos" alt="Concursos P&uacute;blicos" /></a>
        </div>
        <div id="infosTopo">
            <div id="nosite">No site...</div>
            <div id="p">{$totalVagas} <span>Vagas</span></div>
            <div id="p">{$totalProvas} <span>Provas e Gab.</span></div>
            <div id="p">{$totalDicas} <span>Dicas e Info.</span></div>
            <div id="p">{$online} <span>Pessoas Online</span></div>
            
        </div>
        <div id="buscaTopo">
            <div id="sigaTitulo">Siga-nos</div>
            <div id="sigaIcones">
                <ul id="menuxb">
                    <li><a title="Twitter" href="http://www.twitter.com/viconcursos" target="_blank" class="twitter"><span>Twitter</span></a></li>
                    <li><a title="Facebook" href="https://www.facebook.com/viconcursos" target="_blank" class="facebook"><span>Facebook</span></a></li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div style="float:left"> 
                <h4>Buscar</h4><br>
                <span id="buscalk">Concursos P&uacute;blicos</span>
                <span id="buscalk">Vídeo Aulas</span>
                <span id="buscalk">Dicas</span>
            </div>
            <form action="{$url}pesquisar/geral" id="cse-search-box" style="float:left;">
                <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="180">
                            <input type="hidden" name="cx" value="partner-pub-6905686321259168:3948882104" />
                            <input type="hidden" name="cof" value="FORID:10" />
                            <input type="hidden" name="ie" value="UTF-8" />
                            <input type="text" name="q" class="inputBusca"  value="Buscar por concursos" />
                        </td>
                        <td><input type="submit" class="botaoVermelhoxx" name="sa" value="Ok" /></td>
                    </tr>
                </table>
            </form>
            <script type="text/javascript" src="http://www.google.com.br/coop/cse/brand?form=cse-search-box&amp;lang=pt"></script>
        </div>
        <div id="bloconovidade">
                <br />
                <h4>Receba nossas novidades</h4>
                <ul>
                    <li id="recebe-novidades">
                        <input class="inputRodape" name="Buscar" id="nomenews" type="text" value="Seu nome" />
                    </li>
                    <li id="recebe-novidades">
                        <input class="inputRodape" name="emailnews" id="emailnews" type="text" value="Seu e-mail" />
                    </li>
                    <li id="recebe-novidades">
                        <input class="botaoVermelho" type="submit" name="Ok" id="cadnews" value="Cadastrar" style="height:22px" />
                        <span id="avisonews"></span></li>
                </ul>
            </div>
    </div>