<?php /* Smarty version Smarty-3.1.13, created on 2013-05-11 13:01:53
         compiled from ".\templates\crud\delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10870518e6a85c2bc92-96885874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794ea3dbc2e840ed268c9d455a39dabd576f762a' => 
    array (
      0 => '.\\templates\\crud\\delete.tpl',
      1 => 1368288106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10870518e6a85c2bc92-96885874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518e6a85ccaea2_14120123',
  'variables' => 
  array (
    'msg' => 0,
    'titulotela' => 0,
    'insert' => 0,
    'modulo' => 0,
    'tela' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518e6a85ccaea2_14120123')) {function content_518e6a85ccaea2_14120123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["msg"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['msg']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>


<div id="content">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulotela']->value;?>
</h2>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
    
    <form class="userform" method="post" action="">
        <fieldset>
            <legend> Confirme os dados para exclus&atilde;o </legend>
            <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['insert']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <label for="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['labelnome'];?>
</label>
                        <input type="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" disabled="disabled" 
                               <?php if (($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']=='checkbox'&&$_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['checked'])){?>
                                   checked="checked"
                               <?php }?> size="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['size'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" /><?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descricao'];?>
</li>                    
                    </li>
                <?php endfor; endif; ?>       
                <br />
                <li class="center">
                    <input type="button" onclick="location.href = '?m=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['tela']->value;?>
'" value="Cancelar" /> 
                    <input type="submit" name="excluir" value="Confirmar Exclusão" />
                </li>
            </ul>
        </fieldset>                
    </form>
    <br />


</div>  

<div style="clear:both" />
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>