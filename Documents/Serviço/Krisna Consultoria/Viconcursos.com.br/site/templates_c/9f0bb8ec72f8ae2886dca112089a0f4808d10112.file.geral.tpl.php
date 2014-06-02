<?php /* Smarty version Smarty-3.1.13, created on 2013-10-12 19:24:42
         compiled from ".\templates\videoaulas\geral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33475221e6723c2461-87743657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0bb8ec72f8ae2886dca112089a0f4808d10112' => 
    array (
      0 => '.\\templates\\videoaulas\\geral.tpl',
      1 => 1381616675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33475221e6723c2461-87743657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221e672408543_24108140',
  'variables' => 
  array (
    'categoria' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221e672408543_24108140')) {function content_5221e672408543_24108140($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <h1>Vídeo Aulas para preparação dos Concursos Públicos</h1>
        <br />
        <p>Confira aqui as videos aulas, elas estão separadas por materias para facilitar o estudo.</p>
        <br />
        <br />
        <div id="catVA">
            <ul id="cateG">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categoria']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li>
                        -<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
videoaulas/categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoria'];?>
</a>
                    </li>
                <?php endfor; endif; ?>
            </ul>
        </div>

        <br />
        <br />
        <p>Caso tenha alguma aula para compartilhar <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
viconcursos/faleconosco">Clique aqui</a> e envie seu link. </p>
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
        <br />
        <div id="adsHome">
             
                <script type="text/javascript">
                    bb_bid = "1684324";
                    bb_lang = "pt-BR";
                    bb_name = "custom";
                    bb_limit = "7";
                    bb_format = "bbc";
                </script>
                <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
              
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>