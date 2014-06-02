<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="pt-br" />
        <meta name="country" content="Brasil" />
        <meta name="googlebot" content="index, follow" />
        <meta name="robots" content="follow" />
        <meta name="coverage" content="Worldwide" />
        <meta name="author" content="Krisna Consultoria LTDA" />
        <meta name="organization-Email" content="contato@krisnaconsultoria.com.br" />
        <meta name="identifier" content="{$url}" />
        <meta name="google-site-verification" content="Ur-9hoOL5KD6V5fIW_0I4RMMANKakHPQZwaHFMS3GAM" />
        <meta name="msvalidate.01" content="DE13C333E19E8364F3FE547606674392" />
        <meta property="fb:admins" content="716310751" />
        <meta property="fb:app_id" content="489746711106515" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="{$description}" />
        <title>{$titulo}</title>        
        <script type="text/javascript">
<!--
            var began_loading = (new Date()).getTime();

            function done_loading() {
                (new Image()).src = '/timer.gif?u=' + self.location + '&t=' +
                        (((new Date()).getTime() - began_loading) / 1000);
            }
// -->
        </script>
        <link rel="icon" href="{$url}img/favicon.ico" type="image/x-icon"/>
        {section name=i loop=$css} {$css[i]}
        {/section}
        {section name=i loop=$js} {$js[i]} 
        {/section}
        {literal}
            <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                {
                    lang: 'pt-BR';
                }
            </script>
            <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-39431366-1']);
                _gaq.push(['_setDomainName', 'viconcursos.com']);
                _gaq.push(['_setAllowLinker', true]);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

            </script>

        {/literal}
    </head>
    <body class="painel" onload="done_loading();">
        {literal}
            <div id="fb-root"></div>
            <script type="text/javascript">(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=353088524808854";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
            {/literal}
        <input type="hidden" value="{$url}" id="urlsite" />
        <div id="mascara" class="msk"></div>
        <div id="lightboxWrapRec">
            <div id="closeBoxRec" class="fecharcadrec">
                <a href="javascript:void(0)" title="Fechar">
                    <img src="{$url}img/iconClose2.gif" title="Fechar" alt="Fechar" /></a>
            </div>
            <div id="lightboxEsq">
                <div id="lightboxWrapxxx">Receba nossas Novidades</div>
                <p>Receba notícias de seus concursos preferidos. Escolha sua Região e Estado!</p>
                <table border="0" id="newrec" class="tabelaLogin">
                    <tr>
                        <td width="41">Nome:</td>
                        <td width="269"><input name="Buscar" type="text" disabled class="inputCadastrar" id="nomer" style="width:240px" /></td>
                    </tr>
                    <tr>
                        <td width="41">E-mail:</td>
                        <td width="269">
                            <input name="Buscar" type="text" disabled class="inputCadastrar" id="emailr" style="width:240px" />
                        </td>
                    </tr>
                    <tr>
                        <td width="41">Região:</td>
                        <td width="269">
                            <select name="Regiao" id="regiaocad" class="inputCadastrarrec" style="width:246px">
                                <option value="0">Selecione a região</option>
                                <option value="1">Nacionais</option>
                                <option value="5">Centro-Oeste</option>
                                <option value="4">Norte</option>
                                <option value="2">Nordeste</option>
                                <option value="6">Sul</option>
                                <option value="3">Sudeste</option>
                            </select>      
                        </td>
                    </tr>
                    <tr>
                        <td width="41">Estado:</td>
                        <td width="269">
                            <div id="ufcad">
                                <select name="Regiao"  id="estadocad"  class="inputCadastrarrecx" style="width:246px" disabled>
                                    <option value="0">Selecione o estado</option>
                                </select>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="41"></td>
                        <td width="269">
                            <input class="botaoAzul" type="submit" name="Ok" id="cadastrarrec" value="Cadastrar" style="margin-top:5px" />&nbsp;
                            <span id="avisonewscad"></span>
                            <span id="validaregiao" style="font-size:11px; display:none; color:#F00;">Selecione A região</span>
                            <span id="validaestado" style="font-size:11px; display:none; color:#F00;">Selecione o Estado</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {include file='header.tpl'}