<?php /* Smarty version Smarty-3.1.13, created on 2014-06-02 04:24:39
         compiled from "./templates/crud/find.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2035214778538bfc8717ea94-61954227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d8f29c5feded49bcb22db65910bb801dd5c762' => 
    array (
      0 => './templates/crud/find.tpl',
      1 => 1386696710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035214778538bfc8717ea94-61954227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulotela' => 0,
    'subjs' => 0,
    'modulo' => 0,
    'headerdados' => 0,
    'dados' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_538bfc871b2819_28927902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538bfc871b2819_28927902')) {function content_538bfc871b2819_28927902($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="content">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulotela']->value;?>
</h2>
    
    <?php echo $_smarty_tpl->tpl_vars['subjs']->value;?>

    
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#listausers').dataTable({
                "bScrollY": "400px",
                "bPaginate": true,
                "bJQueryUI": false,
                "aaSorting":[[0, "asc"]]
            });
        });
    </script>
    
    <div><a href="?m=<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
&t=or_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> </div>
    <table cellspacing="0" cellpadding="0" border="0" class="display" id="listausers">
        <thead>
            <?php echo $_smarty_tpl->tpl_vars['headerdados']->value;?>

        </thead>
        <tbody>
            <?php echo $_smarty_tpl->tpl_vars['dados']->value;?>
          
        </tbody>    
    </table>

</div>  
    
<div style="clear:both" />
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>