<?php /* Smarty version Smarty-3.1.13, created on 2013-09-28 20:38:41
         compiled from ".\templates\noticias\geral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844519d2f8139d611-19127999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786451869f1e28035dcc278a972b9ba4bbdbd5c2' => 
    array (
      0 => '.\\templates\\noticias\\geral.tpl',
      1 => 1377954409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844519d2f8139d611-19127999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519d2f817130f0_84050372',
  'variables' => 
  array (
    'url' => 0,
    'noticias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d2f817130f0_84050372')) {function content_519d2f817130f0_84050372($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <div style="float:left">
            <h1>Not&iacute;cias | Concursos P&uacute;blicos</h1>
        </div>
        <div style="float:left; margin-left:10px;  ">
            <a href="http://feeds.feedburner.com/ViconcursosNews" target="_blank">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/rss.jpg" width="28" height="28" border="0" />
            </a>
        </div>
        <div id="rsstxt">
            <a href="http://feeds.feedburner.com/ViconcursosNews" target="_blank">Assinar Feed?</a>
        </div>
        <div style="clear:both;"></div>
        <p style="font-size:12px; padding: 10px; text-justify: auto;">Fique por dentro do que Acontece sobre Concursos P&uacute;blicos e muito mais como vagas de Empregos, Est&aacute;gios, Processo Seletivos.

        </p>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['noticias']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']==0||$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']==2){?>
                <div id="adsHome">
                    		
                        <script type="text/javascript">
                            google_ad_client = "ca-pub-6905686321259168";
                            /* ViConcursos */
                            google_ad_slot = "4581337305";
                            google_ad_width = 468;
                            google_ad_height = 60;
                            //-->
                        </script>
                        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                       
                </div>
            <?php }?>
            <!--INICIO: Paginacão -->

            <div id="boxNoticias">             
                <p>Postado em <?php echo $_smarty_tpl->tpl_vars['noticias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</p>
                <h2><a rel="Aulas Concursos" class="<?php echo $_smarty_tpl->tpl_vars['noticias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
noticias/detalhes/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['noticias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</a></h2>
                <p><span><?php echo $_smarty_tpl->tpl_vars['noticias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subtitulo'];?>
</span></p>
            </div>
        <?php endfor; endif; ?>  
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>