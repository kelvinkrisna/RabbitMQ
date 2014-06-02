<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/funcoes.php');
//protegearquivo(basename(__FILE__));
__autoload('emails');
 
$email = new emails(array(
            'email' => $_POST['email'],
            'cidade' => $_POST['estado'],
            'nome'  => $_POST['nome'],
            'regiao' => $_POST['regiao']    
        ));

if ($email->existeRegistro('email', $_POST['email'], 'regiao', $_POST['regiao'])):
    $htmlretorno = '
                    <div id="faleconosco" style="padding:5px; width:335px; font-size:11px; background-color:#FCDBD1; margin-bottom:5px; border:1px solid  #FABBA9;">
                        Desculpe já existe um <strong>E-mail</strong> cadastrado para esse Estado! <br />
                        Selecione outro estado ou outra região Obrigado!
                    </div> ';
    $htmlretorno .= '
                    <table border="0" id="newrec" class="tabelaLogin">
                    <tr>
                        <td width="41">Nome:</td>
                        <td width="269">
                            <input name="Buscar" value="'.$_POST['nome'].'" type="text" disabled class="inputCadastrar" id="nomer" style="width:240px" />
                        </td>
                    </tr>
                    <tr>
                        <td width="41">E-mail:</td>
                        <td width="269">
                            <input name="Buscar" type="text" disabled class="inputCadastrar" value="'.$_POST['email'].'" id="emailr" style="width:240px" />
                        </td>
                    </tr>
                    <tr>
                        <td width="41">Região:</td>
                        <td width="269">
                            <select name="Regiao" id="regiaocad" class="inputCadastrarrec" style="width:246px">
                                <option value="0">Selecione a região</option>
                                <option value="1">Nacionais</option>
                                <option value="5">Centro-Oeste</option>
                                <option value="4">Norte</option>
                                <option value="2">Nordeste</option>
                                <option value="6">Sul</option>
                                <option value="3">Sudeste</option>
                            </select>      
                        </td>
                    </tr>
                    <tr>
                        <td width="41">Estado:</td>
                        <td width="269">
                            <div id="ufcad">
                                <select name="Regiao"  id="estadocad"  class="inputCadastrarrecx" style="width:246px" disabled>
                                    <option value="0">Selecione o estado</option>
                                </select>  
                            </div>
                    </tr>
                    <tr>
                        <td width="41"></td>
                        <td width="269">
                            <input class="botaoAzul" type="submit" name="Ok" id="cadastrarrec" value="Cadastrar" style="margin-top:5px" />
                            <span id="avisonewscad"></span>
                            <span id="validaregiao" style="font-size:11px; display:none; color:#F00;">Selecione A região</span>
                            <span id="validaestado" style="font-size:11px; display:none; color:#F00;">Selecione o Estado</span>
                        </td>
                    </tr>
                </table> <div style="clear:both;"></div>';
else:
    $email->inserir($email);
    if ($email->getLinhasAfetadas() == '1'):
        $htmlretorno = '
                        <div id="faleconosco" style="padding:5px; width:335px; font-size:12px;   background-color: #A2DD17; margin-bottom:5px; border:1px solid  #83B412; color:#FFF;">
                              Obrigado seu email foi cadastrado com Sucesso!
                              <div class="fffgsair" style="background-color: #83B412; border:1px solid #6C950F; margin-top:10px; width:60px; height:20px; text-align:center; color:#FFF; margin-left:100px; cursor:pointer;"><b>Sáir</b></div>
                        </div>';
    endif;    
endif;
echo $htmlretorno;
 