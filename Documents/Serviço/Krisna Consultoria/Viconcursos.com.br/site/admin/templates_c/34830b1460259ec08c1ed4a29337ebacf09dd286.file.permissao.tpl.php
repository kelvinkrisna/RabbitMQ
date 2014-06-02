<?php /* Smarty version Smarty-3.1.13, created on 2013-05-11 12:30:49
         compiled from ".\templates\permissao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389515c7d8e60b865-45509869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34830b1460259ec08c1ed4a29337ebacf09dd286' => 
    array (
      0 => '.\\templates\\permissao.tpl',
      1 => 1368286229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389515c7d8e60b865-45509869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515c7d8e788524_01442063',
  'variables' => 
  array (
    'msg' => 0,
    'titulotela' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515c7d8e788524_01442063')) {function content_515c7d8e788524_01442063($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["msg"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['msg']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>


<div id="content">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulotela']->value;?>
</h2>
    
    
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

    
</div>  

<div style="clear:both" />
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>