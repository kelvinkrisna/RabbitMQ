<?php /* Smarty version Smarty-3.1.13, created on 2013-10-12 18:31:26
         compiled from ".\templates\viconcursos\faleconosco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124725259bfae51b0a5-93401868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a94574ef7afb3f0417dd9164437275e4af30db' => 
    array (
      0 => '.\\templates\\viconcursos\\faleconosco.tpl',
      1 => 1377954415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124725259bfae51b0a5-93401868',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5259bfae6533f0_17506224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5259bfae6533f0_17506224')) {function content_5259bfae6533f0_17506224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <h1 style="padding-bottom:15px">Fale Com o Viconcursos</h1>
        <div id="conteudoPaginas">
            <p>
            <div id="faleconosco" style="padding:5px; display:none;  background-color:#DBF2FD; border:1px solid #B5E4FB;">
                Contato enviado com sucesso em breve nossa equipe entrará em contato. Obrigado!
            </div>
            <table class="mtsend" width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr>
                    <td align="right">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="17%" align="right">Nome:</td>
                    <td width="83%"><input name="textfield" type="text" class="imputf" id="nomef" style="width:400px" value="Digite seu nome" /></td>
                </tr>
                <tr>
                    <td align="right">E-mail:</td>
                    <td><input name="textfield2" type="text" class="imputf" style="width:400px" id="emailf" value="Digite seu E-mail" /></td>
                </tr>
                <tr>
                    <td align="right">Cidade:</td>
                    <td><input name="textfield3" type="text" class="imputf" style="width:220px" id="cidadef" value="Sua Cidade" /> 
                        UF: 
                        <input name="uf" type="text" class="imputf" id="uff" style="width:30px" value="uf" /></td>
                </tr>
                <tr>
                    <td align="right">Mensagem:</td> 
                    <td><textarea name="textarea" cols="45" id="msgf" rows="3" style="width:400px; height:70px;" class="imputf" >Digite sua mensagem</textarea></td>
                </tr>
                <tr>
                    <td align="right">&nbsp;</td>
                    <td>
                        <input type="submit" name="button"  class="sendfale"  value="Enviar" />
                        <span id="aguardxff" style="color:#060; display:none;">Aguarde Enviando...</span>
                        <span id="validacampos" style="color:#F00; display:none;"> | Preencha todos os Campos |</span>
                        <span id="validacamposEmail" style="color:#F00; display:none;"> | E-mail Inválido | </span>
                    </td>
                </tr>
                <tr>
                    <td align="right">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            </p>
            <p>&nbsp;</p>
            <div style="font-size:16px;">Equipe Viconcursos:</div>
            <br />
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div style="clear:both"></div>

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>