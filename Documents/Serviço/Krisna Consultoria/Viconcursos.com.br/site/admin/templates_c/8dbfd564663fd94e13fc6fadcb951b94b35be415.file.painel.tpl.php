<?php /* Smarty version Smarty-3.1.13, created on 2013-04-07 20:38:05
         compiled from ".\templates\painel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3086451533dfcba4da9-20278912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbfd564663fd94e13fc6fadcb951b94b35be415' => 
    array (
      0 => '.\\templates\\painel.tpl',
      1 => 1365377884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3086451533dfcba4da9-20278912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51533dfcbf53a9_74294737',
  'variables' => 
  array (
    'online' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51533dfcbf53a9_74294737')) {function content_51533dfcbf53a9_74294737($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <h2><p>Aqui voc&ecirc; encontra informa&ccedil;&otilde;es sobre o gerenciamento do site Viconcursos.com!</p></h2>
    <p>Estamos trabalhando nestas implementa&ccedil;&otilde;es por agora acesse a op&ccedil;&atilde;o desejada no menu ao lado.</p>
    
    <br />
    <br />
    <br />
    <p>Agora temos <?php echo $_smarty_tpl->tpl_vars['online']->value;?>
 usuarios on-line. </p>
    
</div>
<div style="clear:both"></div>
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>