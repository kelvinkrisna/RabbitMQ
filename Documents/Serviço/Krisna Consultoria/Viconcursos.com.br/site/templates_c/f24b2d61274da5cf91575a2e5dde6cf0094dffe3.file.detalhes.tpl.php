<?php /* Smarty version Smarty-3.1.13, created on 2013-05-22 18:25:19
         compiled from ".\templates\noticias\detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9863519d372082dbc5-01140528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f24b2d61274da5cf91575a2e5dde6cf0094dffe3' => 
    array (
      0 => '.\\templates\\noticias\\detalhes.tpl',
      1 => 1369257903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9863519d372082dbc5-01140528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519d3720a033f8_52544042',
  'variables' => 
  array (
    'noticia' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d3720a033f8_52544042')) {function content_519d3720a033f8_52544042($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle"><a href="#">Postado em <?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['data'];?>
 - Notícias</a></div>
        <div id="tituloSingle"><h1><?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['titulo'];?>
</h1></div>
                <?php echo $_smarty_tpl->getSubTemplate ('plugin/compartilhe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id="adSingleX">
            <div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
imgs/prepare-se.jpg); width:163px; height:30px; background-repeat:no-repeat;"></div>
            <div style=" background-color:#F6F6F6; border:1px solid #E8F0FA; width:161px; height:610px;">	
                
                    <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-6905686321259168";
                        /* Banner Lateral */
                        google_ad_slot = "1346839303";
                        google_ad_width = 160;
                        google_ad_height = 600;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                
            </div>
        </div>    
        <div id="conteudoSingleX">            
            <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['noticia'];?>
</p>
            <br />
            <div>Postada por:</div>
            <div style="float:left; margin-left:5px;">
                <b>Equipe ViConcursos</b><br />
            </div>
            <div id="adsHome">
                
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
                  
            </div>
        </div>
        <div style=" clear:both;"></div>
        <?php echo $_smarty_tpl->getSubTemplate ('plugin/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>


    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>