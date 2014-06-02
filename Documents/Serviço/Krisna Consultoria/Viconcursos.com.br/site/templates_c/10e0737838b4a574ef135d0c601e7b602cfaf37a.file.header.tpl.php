<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 10:07:17
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52151980cdbb3fdf6-39690355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1377954404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52151980cdbb3fdf6-39690355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51980cdbb8b2e7_47466107',
  'variables' => 
  array (
    'url' => 0,
    'totalVagas' => 0,
    'totalProvas' => 0,
    'totalDicas' => 0,
    'online' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51980cdbb8b2e7_47466107')) {function content_51980cdbb8b2e7_47466107($_smarty_tpl) {?><div id="wrap">
    <div id="topo">
        <div id="logoTopo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="Página Inicial V&iacute;oncursos">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/logo.png" title="Concursos P&uacute;blicos" alt="Concursos P&uacute;blicos" /></a>
        </div>
        <div id="infosTopo">
            <div id="nosite">No site...</div>
            <div id="p"><?php echo $_smarty_tpl->tpl_vars['totalVagas']->value;?>
 <span>Vagas</span></div>
            <div id="p"><?php echo $_smarty_tpl->tpl_vars['totalProvas']->value;?>
 <span>Provas e Gab.</span></div>
            <div id="p"><?php echo $_smarty_tpl->tpl_vars['totalDicas']->value;?>
 <span>Dicas e Info.</span></div>
            <div id="p"><?php echo $_smarty_tpl->tpl_vars['online']->value;?>
 <span>Pessoas Online</span></div>
            
        </div>
        <div id="buscaTopo">
            <div id="sigaTitulo">Siga-nos</div>
            <div id="sigaIcones">
                <ul id="menuxb">
                    <li><a title="Twitter" href="http://www.twitter.com/viconcursos" target="_blank" class="twitter"><span>Twitter</span></a></li>
                    <li><a title="Facebook" href="https://www.facebook.com/viconcursos" target="_blank" class="facebook"><span>Facebook</span></a></li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div style="float:left"> 
                <h4>Buscar</h4><br>
                <span id="buscalk">Concursos P&uacute;blicos</span>
                <span id="buscalk">Vídeo Aulas</span>
                <span id="buscalk">Dicas</span>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pesquisar/geral" id="cse-search-box" style="float:left;">
                <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="180">
                            <input type="hidden" name="cx" value="partner-pub-6905686321259168:3948882104" />
                            <input type="hidden" name="cof" value="FORID:10" />
                            <input type="hidden" name="ie" value="UTF-8" />
                            <input type="text" name="q" class="inputBusca"  value="Buscar por concursos" />
                        </td>
                        <td><input type="submit" class="botaoVermelhoxx" name="sa" value="Ok" /></td>
                    </tr>
                </table>
            </form>
            <script type="text/javascript" src="http://www.google.com.br/coop/cse/brand?form=cse-search-box&amp;lang=pt"></script>
        </div>
        <div id="bloconovidade">
                <br />
                <h4>Receba nossas novidades</h4>
                <ul>
                    <li id="recebe-novidades">
                        <input class="inputRodape" name="Buscar" id="nomenews" type="text" value="Seu nome" />
                    </li>
                    <li id="recebe-novidades">
                        <input class="inputRodape" name="emailnews" id="emailnews" type="text" value="Seu e-mail" />
                    </li>
                    <li id="recebe-novidades">
                        <input class="botaoVermelho" type="submit" name="Ok" id="cadnews" value="Cadastrar" style="height:22px" />
                        <span id="avisonews"></span></li>
                </ul>
            </div>
    </div><?php }} ?>