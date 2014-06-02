<?php /* Smarty version Smarty-3.1.13, created on 2013-09-28 20:39:46
         compiled from ".\templates\dicas\detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5700524768c209eb17-79263786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fed5e101e8e478853c0672d8c04f076fdbcb7b48' => 
    array (
      0 => '.\\templates\\dicas\\detalhes.tpl',
      1 => 1377954408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5700524768c209eb17-79263786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dicas' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524768c2166333_90902940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524768c2166333_90902940')) {function content_524768c2166333_90902940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='content'>
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="javascript:void(0)">Postado em <?php echo $_smarty_tpl->tpl_vars['dicas']->value[0]['data'];?>
</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
dicas/geral" title="Voltar para Categorias">Dicas</a> » 
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
dicas/categoria/<?php echo $_smarty_tpl->tpl_vars['dicas']->value[0]['idcat'];?>
/<?php echo $_smarty_tpl->tpl_vars['dicas']->value[0]['titulocat_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['dicas']->value[0]['titulocat'];?>
</a>
        </div>
        <div id="tituloSingle">
            <h1><?php echo $_smarty_tpl->tpl_vars['dicas']->value[0]['titulo'];?>
</h1>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('plugin/compartilhe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id="conteudoSingle">
            <div id="adSingle">
                <script type="text/javascript">
                    google_ad_client = "ca-pub-6905686321259168";
                    /* DetailConcurso */
                    google_ad_slot = "6056240501";
                    google_ad_width = 336;
                    google_ad_height = 280;
//-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                 
            </div>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['dicas']->value[0]['dica'];?>

            </p>
        </div>
        <div style=" clear:both;"></div>
        <?php echo $_smarty_tpl->getSubTemplate ('plugin/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>