{include file='inicio.tpl'}
{include file='menu.tpl'}
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
    {include file='sidebar.tpl'}
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}