<?php /* Smarty version Smarty-3.1.13, created on 2013-09-12 18:15:58
         compiled from ".\templates\plugin\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22014519d3720b40dd9-47983698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad28a4714f3b3263a4a519164b6f680ba1bde97' => 
    array (
      0 => '.\\templates\\plugin\\comentarios.tpl',
      1 => 1379020338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22014519d3720b40dd9-47983698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519d3720b463a1_99745955',
  'variables' => 
  array (
    'url' => 0,
    'linkcompleto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d3720b463a1_99745955')) {function content_519d3720b463a1_99745955($_smarty_tpl) {?><br />
<br />
<br />
<div id="comentario">
    <div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['linkcompleto']->value;?>
" data-width="510" data-num-posts="15"></div>
</div><?php }} ?>