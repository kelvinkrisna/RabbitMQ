<?php /* Smarty version Smarty-3.1.13, created on 2013-09-12 13:37:24
         compiled from ".\templates\crud\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14315516044564a1349-33572973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896fc421a9f967554dc4301087dfd7cdc6ce0651' => 
    array (
      0 => '.\\templates\\crud\\insert.tpl',
      1 => 1379003285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14315516044564a1349-33572973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516044567cdf87_48806634',
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
<?php if ($_valid && !is_callable('content_516044567cdf87_48806634')) {function content_516044567cdf87_48806634($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["msg"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['msg']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

<div id="content">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulotela']->value;?>
</h2>

    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

    <form enctype="multipart/form-data" class="userform" method="post" action="">
        <fieldset>
            <legend> Informe os dados para o cadastro </legend>
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
                        <?php if ($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==='select'){?>
                            <select name="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
">
                                <option value="">Selecione uma categoria</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['select']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['select'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['select'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['categoria'];?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                        <?php }else{ ?>
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
                                           <?php if (($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['disable']=='disabled')){?>
                                               disable="disable"
                                           <?php }?>    
                                           <?php if (($_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['checked'])){?>
                                               checked="checked"
                                           <?php }?>
                                       <?php }else{ ?>
                                           size="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['size'];?>
" 
                                           value="<?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
" 
                                       <?php }?>/><?php echo $_smarty_tpl->tpl_vars['insert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descricao'];?>

                            <?php }?>
                        <?php }?>
                    </li>
                <?php endfor; endif; ?>
                
                <br />
                <li class="center">
                    <input type="button" onclick="location.href = '?m=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['tela']->value;?>
'" value="Cancelar" /> 
                    <input type="submit" name="cadastrar" value="Salvar dados" />
                </li>
            </ul>
        </fieldset>                
    </form>
    <br />
</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>