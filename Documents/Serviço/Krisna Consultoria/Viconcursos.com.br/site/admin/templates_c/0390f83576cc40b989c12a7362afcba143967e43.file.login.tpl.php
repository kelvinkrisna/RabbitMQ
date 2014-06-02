<?php /* Smarty version Smarty-3.1.13, created on 2013-10-13 02:08:51
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1187751533db6ef2715-52299306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1381640927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187751533db6ef2715-52299306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51533db75fd4b6_49044322',
  'variables' => 
  array (
    'trataerro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51533db75fd4b6_49044322')) {function content_51533db75fd4b6_49044322($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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