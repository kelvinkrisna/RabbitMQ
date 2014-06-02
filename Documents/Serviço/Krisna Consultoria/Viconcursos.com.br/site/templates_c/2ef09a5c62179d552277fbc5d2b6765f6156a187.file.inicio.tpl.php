<?php /* Smarty version Smarty-3.1.13, created on 2014-01-08 12:07:21
         compiled from "./templates/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128737440452cdaff94773b1-48430688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ef09a5c62179d552277fbc5d2b6765f6156a187' => 
    array (
      0 => './templates/inicio.tpl',
      1 => 1386696716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128737440452cdaff94773b1-48430688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'description' => 0,
    'titulo' => 0,
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52cdaff9491867_09315902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cdaff9491867_09315902')) {function content_52cdaff9491867_09315902($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
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
        <meta name="identifier" content="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
        <meta name="google-site-verification" content="Ur-9hoOL5KD6V5fIW_0I4RMMANKakHPQZwaHFMS3GAM" />
        <meta name="msvalidate.01" content="DE13C333E19E8364F3FE547606674392" />
        <meta property="fb:admins" content="716310751" />
        <meta property="fb:app_id" content="489746711106515" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>        
        <script type="text/javascript">
<!--
            var began_loading = (new Date()).getTime();

            function done_loading() {
                (new Image()).src = '/timer.gif?u=' + self.location + '&t=' +
                        (((new Date()).getTime() - began_loading) / 1000);
            }
// -->
        </script>
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/favicon.ico" type="image/x-icon"/>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['css']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <?php echo $_smarty_tpl->tpl_vars['css']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>

        <?php endfor; endif; ?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['js']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <?php echo $_smarty_tpl->tpl_vars['js']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
 
        <?php endfor; endif; ?>
        
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

        
    </head>
    <body class="painel" onload="done_loading();">
        
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
            
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" id="urlsite" />
        <div id="mascara" class="msk"></div>
        <div id="lightboxWrapRec">
            <div id="closeBoxRec" class="fecharcadrec">
                <a href="javascript:void(0)" title="Fechar">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/iconClose2.gif" title="Fechar" alt="Fechar" /></a>
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
        <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>