<?php /* Smarty version Smarty-3.1.13, created on 2013-09-28 20:39:13
         compiled from ".\templates\apostilas\geral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22453519d011a97a404-60410329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '208381951284f214a9f8495f5c88648e032ee194' => 
    array (
      0 => '.\\templates\\apostilas\\geral.tpl',
      1 => 1377954406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22453519d011a97a404-60410329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519d011ab14290_59650427',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d011ab14290_59650427')) {function content_519d011ab14290_59650427($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <g:plusone size="medium"></g:plusone></h1>
        <br />

        <p id="Melhores">Confira aqui as apostilas para auxiliar a sua procura por um excelente cargo.</p>
        <div style="margin-top:10px; margin-bottom:5px;">
            
                <script type="text/javascript">
                    google_ad_client = "ca-pub-6905686321259168";
                    /* Concursos */
                    google_ad_slot = "6335442104";
                    google_ad_width = 468;
                    google_ad_height = 15;
                    //-->
                </script>
                <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            
        </div>
        
        <script charset="utf-8" type="text/javascript" src="http://www.novaconcursos.com.br/afiliadoswidget/index/widget/?account_id=60&background=FFFFFF&border=FFFFFF&category_ids=180&columns=2&height=600&is_image=1&is_price=1&is_rated=1&is_short_desc=0&name=Principal&rows=5&search=&textbody=101010&textheader=112211&textlink=0000FF&width=700"></script><noscript><a href="http://www.novaconcursos.com.br/?acc=093f65e080a295f8076b1c5722a46aa2">Nova Concursos</a></noscript>
        

        <div style="clear:both;"></div>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>