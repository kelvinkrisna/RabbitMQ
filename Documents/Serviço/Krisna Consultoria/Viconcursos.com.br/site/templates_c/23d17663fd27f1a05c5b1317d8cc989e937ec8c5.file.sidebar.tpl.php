<?php /* Smarty version Smarty-3.1.13, created on 2013-10-28 00:46:49
         compiled from ".\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:388251980cdbc5d0e1-43112772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d17663fd27f1a05c5b1317d8cc989e937ec8c5' => 
    array (
      0 => '.\\templates\\sidebar.tpl',
      1 => 1382928389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388251980cdbc5d0e1-43112772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51980cdbc9bef9_45766097',
  'variables' => 
  array (
    'maisacessados' => 0,
    'url' => 0,
    'maisacessadoslist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51980cdbc9bef9_45766097')) {function content_51980cdbc9bef9_45766097($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["maisacessados"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['maisacessados']->value)===null||$tmp==='' ? "0" : $tmp), null, 0);?>

<div id="sidebar">

    <div id="side">
        <h1>Mais Links</h1>
        <ul id="side-menu" class="clearfix">
            <li classe="item-menu item1"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
organizadoras/geral">Organizadoras</a></li>
        </ul>
    </div>
    <br />
    <center>
        <?php if ($_smarty_tpl->tpl_vars['maisacessados']->value=='1'){?>
            <div id="principaisconcursos">
                <h1>Concursos Mais Acessados!</h1>
                <div id="conteudoprincipaisconcursos">
                    <ul>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['maisacessadoslist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                            <br />
                            <li><a rel="Concursos P&uacute;blicos" class="<?php echo $_smarty_tpl->tpl_vars['maisacessadoslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
concursos/detalhes/<?php echo $_smarty_tpl->tpl_vars['maisacessadoslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['maisacessadoslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['maisacessadoslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</a></li>

                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>
        <?php }?>
        <br />
        <br />
    </center>
    <center>
        
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
        
    </center>
    <br />
    <center>
        <div class="fb-like-box" data-href="https://www.facebook.com/viconcursos" data-width="300" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div> 
    </center>
    <br />
    <br />
    <center>
        <a href="http://www.iobconcursos.com/promocao/curso-35/B06500"> <img src="https://www.iobconcursos.com/banners/_arquivos_banners/banner-inss.png" alt="Promoção Analista do INSS - IOB Concursos" title="Curso Online para Concurso de Analista do INSS" height="300px" width="300px"> </a>
        <br />
        <br />            
    </center>
    <center>
        <br />
        <br />
        <script charset="utf-8" type="text/javascript" src="http://www.novaconcursos.com.br/afiliadoswidget/index/widget/?account_id=60&background=FFFFFF&border=FFFFFF&category_ids=180&is_image=1&is_price=1&is_rated=1&is_short_desc=0&name=Lateral&search=&textbody=101010&textheader=2F5E2F&textlink=0000FF&widget_size=300x250"></script><noscript><a href="http://www.novaconcursos.com.br/?acc=093f65e080a295f8076b1c5722a46aa2">Nova Concursos</a></noscript>
    </center>
    <center>
        
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
        
    </center>
    <br />
    <br />
    <center>
        
            <script type="text/javascript">
                bb_bid = "1684324";
                bb_lang = "pt-BR";
                bb_name = "custom";
                bb_limit = "6";
                bb_format = "bbn";
            </script>
            <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
        
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
</div><?php }} ?>