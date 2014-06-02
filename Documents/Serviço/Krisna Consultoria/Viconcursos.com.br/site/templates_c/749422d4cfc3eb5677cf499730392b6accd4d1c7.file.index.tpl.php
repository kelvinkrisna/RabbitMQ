<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 10:07:17
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1734451980cdb600ab1-12932809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1377954404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1734451980cdb600ab1-12932809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51980cdb9c7f29_77686084',
  'variables' => 
  array (
    'paginacao' => 0,
    'url' => 0,
    'concursos' => 0,
    'htmlpaginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51980cdb9c7f29_77686084')) {function content_51980cdb9c7f29_77686084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["paginacao"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['paginacao']->value)===null||$tmp==='' ? "0" : $tmp), null, 0);?>
<div id="content">
    <div id="wrapEsq">
        <h1>Concursos P&uacute;blicos  <g:plusone size="medium"></g:plusone></h1>    
        <br />
        <p id="Melhores">Se voc&ecirc; procura estabilidade, seguran&ccedil;a e &oacute;timos sal&aacute;rios. Aqui &eacute; o seu site. Encontre os melhores concursos.</p>
        <div id="wrapEsqhxxx">Buscar concursos</div>
        <div style="clear:both;"></div>
        <div id="filtroHome">
            <table width="600" border="0">
                <tr>
                    <td>Região</td>
                    <td>Estado</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><select name="Regiao" id="regiao" class="inputFiltroHome">
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
        </div>
        <div id="miolo">
            <div id="abasHomex">
                <ul>
                    <li class="abaSel"><a id="tab1" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modulos/tabs.php?id=1">Últimos concursos</a></li>
                    <li class="notix"><a id="tab2" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modulos/tabs.php?id=2">Últimas notícias</a></li>
                    <li class="ultimasdicas"><a id="tab3" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modulos/tabs.php?id=3">Últimas dicas e informações</a></li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div id="tabcontent">
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
                    <div id="boxHome">
                        <div id="boxData"><?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</div>                
                        <div id="boxInfo">
                            <h2 style="float:left">
                                <a rel="Concursos Públicos Abertos" class="<?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
concursos/detalhes/<?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo_tratado'];?>
"><?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</a></h2>
                            <div style="float:left; padding-top:0px; padding-left:10px;"> 
                                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/em-aberto-viconcursos.jpg" title="Concursos em Abertos" alt="Concursos P&Uacute;blicos em Abertos" width="67" height="18" />
                            </div>
                            <div style="clear:both;"></div>
                            <p><span><?php echo $_smarty_tpl->tpl_vars['concursos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subtitulo'];?>
</span></p>
                        </div>
                    </div>
                <?php endfor; endif; ?>  
                <?php if ($_smarty_tpl->tpl_vars['paginacao']->value=='1'){?>
                    <div id='paginacao'><?php echo $_smarty_tpl->tpl_vars['htmlpaginacao']->value;?>
</div>
                <?php }?>
            </div>
            <div id="preloader">
                <img src="img/loading.gif" align="absmiddle"> Loading...				
            </div>
            <div id='paginacao'> </div> 
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!--<div style="clear:both"></div>-->
<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>