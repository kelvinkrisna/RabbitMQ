<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 09:49:27
         compiled from ".\templates\consultoria\geral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312495221e657d5dd40-50138571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8b992c0c5480c0566606d03967378931e2eea0' => 
    array (
      0 => '.\\templates\\consultoria\\geral.tpl',
      1 => 1367763577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312495221e657d5dd40-50138571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'juridico' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221e6581fc282_85864363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221e6581fc282_85864363')) {function content_5221e6581fc282_85864363($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <h1>D&uacute;vidas Jur&iacute;dicas</h1>
        <br />
        <h2> Confira aqui algumas dúvidas e se vocês possue alguma dúvida não deixe de perguntar nossos especialistas irão responder e postaremos aqui.</h2>
        <br />            
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['juridico']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']==1||$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']==3){?>
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
            <?php }?>
            <div id="boxNoticias">             
                <p>Postado em <?php echo $_smarty_tpl->tpl_vars['juridico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</p>
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
consultoria/detalhes/<?php echo $_smarty_tpl->tpl_vars['juridico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['juridico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['juridico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</a></h1>
                <span><?php echo $_smarty_tpl->tpl_vars['juridico']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descricao'];?>
</span>
            </div>
        <?php endfor; endif; ?>   
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>