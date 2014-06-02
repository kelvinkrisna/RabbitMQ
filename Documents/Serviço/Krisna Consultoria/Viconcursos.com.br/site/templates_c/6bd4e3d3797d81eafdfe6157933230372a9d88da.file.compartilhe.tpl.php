<?php /* Smarty version Smarty-3.1.13, created on 2013-09-12 18:10:39
         compiled from ".\templates\plugin\compartilhe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9033519d3720a99ce0-66317863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd4e3d3797d81eafdfe6157933230372a9d88da' => 
    array (
      0 => '.\\templates\\plugin\\compartilhe.tpl',
      1 => 1379014909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9033519d3720a99ce0-66317863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519d3720ae6086_99262418',
  'variables' => 
  array (
    'url' => 0,
    'linkcompleto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519d3720ae6086_99262418')) {function content_519d3720ae6086_99262418($_smarty_tpl) {?><div id="barraSingle">

        <!-- AddThis Button BEGIN -->        
        <!-- AddThis Button BEGIN -->

        <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['linkcompleto']->value;?>
" data-width="450" data-show-faces="true" data-send="true"></div>        
        <!-- AddThis Button END -->


</div><?php }} ?>