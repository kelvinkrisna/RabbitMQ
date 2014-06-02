<?php /* Smarty version Smarty-3.1.13, created on 2013-05-25 15:40:59
         compiled from ".\templates\concursos\geral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3120851a105bb593643-46295500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddaac77a8c5deabe75f88e4140d52987fcee21d6' => 
    array (
      0 => '.\\templates\\concursos\\geral.tpl',
      1 => 1367625010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3120851a105bb593643-46295500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'regiao' => 0,
    'descricao' => 0,
    'total' => 0,
    'concursos' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a105bb66e2c4_04287280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a105bb66e2c4_04287280')) {function content_51a105bb66e2c4_04287280($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <h1><?php echo $_smarty_tpl->tpl_vars['regiao']->value;?>
 <g:plusone size="medium"></g:plusone></h1>
        <p id="Melhores"><?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
</p>
        <div id="wrapEsqhxxx">Filtrar concursos</div>
        <div style="clear:both;"></div>            
        <div style="margin-top:10px; margin-bottom:5px;">
            
                <script type="text/javascript">
                google_ad_client = "ca-pub-6905686321259168";
                    /* FiltrarConcursos */
                    google_ad_slot = "3542022104";
                    google_ad_width = 630;
                    google_ad_height = 15;
                    //-->
                </script>
                <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            
        </div>
        <div style="clear:both;"></div>
        <div id="filtroHome">
            <table width="600" border="0">
                <tr>
                    <td>Região</td>
                    <td>Estado</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <select name="Regiao" id="regiao" class="inputFiltroHome">
                            <option value="0">Selecione a região</option>
                            <option value="1">Nacionais</option>
                            <option value="5">Centro-Oeste</option>
                            <option value="4">Norte</option>
                            <option value="2">Nordeste</option>
                            <option value="6">Sul</option>
                            <option value="3">Sudeste</option>
                        </select>
                    </td>
                    <td>
                        <div id="uf">
                            <select name="Estado" id="estado" class="inputFiltroHome" disabled>
                                <option value="0">Selecione o estado</option>
                            </select>
                        </div>                           
                    </td>
                    <td><input class="botaoVermelho" type="submit" name="Ok" id="filtro" value="Buscar concursos" /></td>
                </tr>
            </table>
        </div><!--/filtroHome-->
        <div id="resultadoHome">
            <div id="resultadoDados">
                <p class="resultadoTit">Resultados para <b><?php echo $_smarty_tpl->tpl_vars['regiao']->value;?>
</b></p>
                <p class="resultadoQuant">Encontrados <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 resultados</p>
            </div>
        </div><!--/resultadoHome-->
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['concursos']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']==0||$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']==2){?>
                <div id="boxHome">
                    <div id="boxData">&Uacute;ltimos</div>
                    <div id="boxInfo">        
                        		
                            <script type="text/javascript">
                                google_ad_client = "ca-pub-6905686321259168";
                                /* ViConcursos */
                                google_ad_slot = "4581337305";
                                google_ad_width = 468;
                                google_ad_height = 60;
                                //-->
                            </script>
                            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                          
                    </div>
                </div> 
            <?php }?>
            <div id="boxHome">
                <div id="boxData"><?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</div>                
                <div id="boxInfo">
                    <h2>
                        <a rel="Concursos P&uacute;blicos" class="<?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
concursos/detalhes/<?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</a>
                    </h2>
                    <p><span><?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subtitulo'];?>
</span></p>
                </div>
            </div>
        <?php endfor; endif; ?>   
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>