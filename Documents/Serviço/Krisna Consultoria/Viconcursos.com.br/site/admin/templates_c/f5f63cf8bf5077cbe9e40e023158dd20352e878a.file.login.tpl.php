<?php /* Smarty version Smarty-3.1.13, created on 2014-06-02 04:16:31
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1152520556538bfa9fd32066-35406566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1386696711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152520556538bfa9fd32066-35406566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trataerro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_538bfa9fda92a7_16642989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538bfa9fda92a7_16642989')) {function content_538bfa9fda92a7_16642989($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["trataerro"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['trataerro']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".userform").validate({
                rules: {
                    usuario: {required: true, minlength: 3},
                    senha: {required: true, rangelength: [4, 10]}
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
                    <input type="text" size="35" name="usuario" id="usuario" value="" />                        
                </li >
                <li>
                    <label for="senha">Senha:</label>
                    <input type="password" size="35" name="senha" id="senha" value="" />                        
                </li>
                <li class="center">
                    <input type="submit" name="logar" id="logar" value="Login"/>
                </li>
            </ul>        
        </fieldset>    
    </form> 
    <?php echo $_smarty_tpl->tpl_vars['trataerro']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>