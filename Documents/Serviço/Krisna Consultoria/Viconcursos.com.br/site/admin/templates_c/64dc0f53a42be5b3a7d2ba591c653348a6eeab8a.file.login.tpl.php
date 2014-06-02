<?php /* Smarty version Smarty-3.1.13, created on 2013-03-27 00:06:47
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3258051520f857979b1-75929651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1364342803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3258051520f857979b1-75929651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51520f86804ce6_59851463',
  'variables' => 
  array (
    'trataerro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51520f86804ce6_59851463')) {function content_51520f86804ce6_59851463($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["trataerro"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['trataerro']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

    
<script type="text/javascript">
    $(document).ready(function() {
        $(".userform").validate({
            rules:{
                usuario:{required:true, minlength:3},
                senha:{required:true,rangelength:[4,10]}
                }
            });
         });
</script>

<div id="loginform">
    <form class="userform" method="post" action="">
        <fieldset>
            <legend>Acesso Restrito, identifique-se</legend>
            <ul>
                <li>
                    <label for="usuario">Usu&aacute;rio:</label>
                    <input type="text" size="35" name="usuario" value="" />                        
                </li>
                <li>
                    <label for="usuario">Senha:</label>
                    <input type="password" size="35" name="senha" value="" />                        
                </li>
                <li class="center"><input type="submit" name="logar" value="Login">
            </ul>        
        </fieldset>    
    </form> 
    <?php echo $_smarty_tpl->tpl_vars['trataerro']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>