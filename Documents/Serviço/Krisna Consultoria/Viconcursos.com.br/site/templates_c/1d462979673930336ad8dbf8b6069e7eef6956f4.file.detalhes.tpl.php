<?php /* Smarty version Smarty-3.1.13, created on 2013-10-12 20:01:45
         compiled from ".\templates\videoaulas\detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181475259d03a670711-95513656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d462979673930336ad8dbf8b6069e7eef6956f4' => 
    array (
      0 => '.\\templates\\videoaulas\\detalhes.tpl',
      1 => 1381618895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181475259d03a670711-95513656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5259d03a711c96_78265013',
  'variables' => 
  array (
    'url' => 0,
    'prova' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5259d03a711c96_78265013')) {function content_5259d03a711c96_78265013($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
videoaulas/geral" title="Voltar para Materias">Video Aulas</a> »
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
videoaulas/categoria/<?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['idcategoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['titulo_tratado_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['categoria'];?>
</a>
        </div>
        <div id="tituloSingle">
            <h1><?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['titulo'];?>
</h1>
        </div>
        <br />
        <br />
        <br />
        <div>
            <iframe width="640" height="360" src="<?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['link'];?>
?feature=player_embedded  " frameborder="0" allowfullscreen></iframe>
        </div>
        <br />
        <div id="boxHomeb">
            <div id="boxInfo2">
                <h1>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
videoaulas/detalhes/<?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['titulo_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['titulo'];?>
</a>
                </h1>
                <span>
                    <?php echo $_smarty_tpl->tpl_vars['prova']->value[0]['descricao'];?>

                </span>
            </div>
            <br />
        </div>
        <br />
        <br />
        <br />
        <div id="adsHome" style="margin-left:13px;">
            
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
        
        <br /><br /><br /><br />
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
provas/categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoria'];?>
</a>
                    </li>

                <?php endfor; endif; ?>
            </ul>
        </div>

    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>