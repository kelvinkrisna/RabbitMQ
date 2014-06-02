<?php /* Smarty version Smarty-3.1.13, created on 2013-05-16 14:42:55
         compiled from ".\templates\crud\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31535516040916c9a43-53589341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069323bc32abadf80a6764dfec19a86bbe406489' => 
    array (
      0 => '.\\templates\\crud\\edit.tpl',
      1 => 1368726171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31535516040916c9a43-53589341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51604092ec6c46_23723882',
  'variables' => 
  array (
    'msg' => 0,
    'titulotela' => 0,
    'script' => 0,
    'insert' => 0,
    'modulo' => 0,
    'tela' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51604092ec6c46_23723882')) {function content_51604092ec6c46_23723882($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["msg"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['msg']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>


<div id="content">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulotela']->value;?>
</h2>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
    
    <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

    <form class="userform" method="post" action="">
        <fieldset>
            <legend> Informe os dados para a alteração </legend>
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
                        <?php if ($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==='textarea'){?>
                            <textarea id="elm1" name="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" rows="20" cols="50" style="width: 80%">
                                <?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>

                            </textarea>
                        <?php }else{ ?>
                            
                            <input type="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'];?>
" 
                                   name="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" 
                                   id="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" 
                                   <?php if (($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']=='checkbox')){?>
                                       <?php if (($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['disable'])){?>
                                           disabled="disabled"
                                       <?php }?>    
                                       <?php if (($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['checked'])){?>
                                           checked="checked"
                                       <?php }?>
                                   <?php }else{ ?>
                                       <?php if ((!$_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['disable'])){?>
                                           disabled="disabled"
                                       <?php }?>
                                       size="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['size'];?>
" 
                                       value="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" 
                                   <?php }?>

                                   /><?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descricao'];?>

                        <?php }?>
                    </li>
                <?php endfor; endif; ?>       
                <br />
                <li class="center">
                    <input type="button" onclick="location.href = '?m=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['tela']->value;?>
'" value="Cancelar" /> 
                    <input type="submit" name="editar" value="Salvar alterações" />
                </li>
            </ul>
        </fieldset>                
    </form>
    <br />


</div>  

<div style="clear:both" />
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>