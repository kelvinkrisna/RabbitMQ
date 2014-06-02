<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 00:29:24
         compiled from ".\templates\pesquisar\geral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2515451ff1c14a6a434-63038560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d8768dc546c383198fa612bd15afd262b1ccb1' => 
    array (
      0 => '.\\templates\\pesquisar\\geral.tpl',
      1 => 1366741752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2515451ff1c14a6a434-63038560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff1c14b58134_08710587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff1c14b58134_08710587')) {function content_51ff1c14b58134_08710587($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq" style="width:800px;">
        <h1>Buscar Concursos Públicos </h1><!--/filtroHome--><!--/resultadoHome-->
        <p style="font-size:12px; color:#666; margin-bottom:10px;">Pesquise os melhores concursos de sua cidade e do Brasil. <br />
            O <b>Viconcursos</b> preparou os melhores concursos e dicas pra você.</p>



        <div class="cse-branding-right" style="background-color:#FFFFFF;color:#000000; margin-bottom:5px;">
            <div class="cse-branding-form">
                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pesquisar/geral" id="cse-search-box">
                    <div>
                        <input type="hidden" name="cx" value="partner-pub-6905686321259168:3948882104" />
                        <input type="hidden" name="cof" value="FORID:10" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="text" name="q" id="iimp" size="55" value="Pesquisar Concursos" />
                        <input type="submit" id="bbb" name="sa" value="Pesquisar" />
                    </div>
                </form>
            </div>
        </div>
        <div id="cse-search-results"></div>
        <script type="text/javascript">
            var googleSearchIframeName = "cse-search-results";
            var googleSearchFormName = "cse-search-box";
            var googleSearchFrameWidth = 100;
            var googleSearchDomain = "www.google.com.br";
            var googleSearchPath = "/cse";
        </script>
        <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
    </div>
</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>