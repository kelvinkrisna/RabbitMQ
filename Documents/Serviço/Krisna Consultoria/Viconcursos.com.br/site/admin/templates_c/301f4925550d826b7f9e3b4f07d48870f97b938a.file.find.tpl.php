<?php /* Smarty version Smarty-3.1.13, created on 2013-10-27 23:01:06
         compiled from ".\templates\crud\find.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125915155b4cfa9d092-68306639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301f4925550d826b7f9e3b4f07d48870f97b938a' => 
    array (
      0 => '.\\templates\\crud\\find.tpl',
      1 => 1382922063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125915155b4cfa9d092-68306639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5155b4cfadd2e1_13402331',
  'variables' => 
  array (
    'titulotela' => 0,
    'subjs' => 0,
    'modulo' => 0,
    'headerdados' => 0,
    'dados' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5155b4cfadd2e1_13402331')) {function content_5155b4cfadd2e1_13402331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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