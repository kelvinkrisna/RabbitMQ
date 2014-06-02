<?php

require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
__autoload('email_enviar');
__autoload('concursos');
__autoload('emails');
startenvio();

function startenvio() {
    $emailshora = '300';
    //Busca Lista de emails
    $email = new email_enviar();
    $email->setExtrasSelect("LIMIT 0, $emailshora");
    if ($email->contaRegistros($email) > 0):
        $email->selecionaTudo($email);
        for ($i = 1; $i <= 300; $i++):
            $row = $email->retornaDados();
            // Este sempre deverá existir para garantir a exibição correta dos caracteres
            $headers = "MIME-Version: 1.1\n";

            // Para enviar o e-mail em formato HTML com codificação de caracteres Unicode (Usado em todos os países)
            $headers .= "Content-type: text/html; charset=utf-8\n";

            // E-mail que receberá a resposta quando se clicar no 'Responder' de seu leitor de e-mails
            $headers .= "Reply-To: contato@viconcursos.com\n";

            $headers .= "From: Vi Concursos <contato@viconcursos.com>\n";

            //Busco Concurso
            $concurso = new concursos();
            $concurso->setExtrasSelect("where idconcursos=$row->idconcursos");
            $concurso->selecionaTudo($concurso);
            $dadosconcursos = $concurso->RetornaDados();

            //Monto Mensagem
            $corpo = '<table width="710" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:16px;color:#333">';
            $corpo .= '    <tbody>';
            $corpo .= '        <tr>';
            $corpo .= '            <td valign="top" style="background-color:#E9EFF2">';
            $corpo .= '                <table width="100%" height="90" border="0" cellspacing="0">';
            $corpo .= '                    <tr>';
            $corpo .= '                        <td width="12%" align="left" valign="top">';
            $corpo .= '                            <a href="http://www.viconcursos.com" target="_blank"><img src="http://www.viconcursos.com/img/logo-viconcursos.jpg" width="74" height="80" border="0"></a>';
            $corpo .= '                        </td>';
            $corpo .= '                        <td width="88%" align="left" valign="top">';
            $corpo .= '                            <div style=" margin-top:7px;">';
            $corpo .= '                                <span style="font-size:20px; font-family:Tahoma, Geneva, sans-serif; color:#666; ">';
            $corpo .= '                                    <a style="color:#666666; text-decoration:none;" href="http://twitter.com/viconcursos" target="_blank" title="Siga-nos no Twitter">@viconcursos </a>';
            $corpo .= '                                </span>';
            $corpo .= '                                <br />';
            $corpo .= '                                <span style="font-size:14px; font-family:"Times New Roman", Times, serif; color:#666;">';
            $corpo .= '                                    <em>Tudo sobre Concursos P&uacute;blicos. Not&iacute;cias, apostilas, dicas, provas e<br />';
            $corpo .= '                                        gabaritos, v&iacute;deo aulas e muito mais.</em>';
            $corpo .= '                                </span>';
            $corpo .= '                                <br />';
            $corpo .= '                                <span style="font-size:14px; font-family:Tahoma, Geneva, sans-serif; color:#006699; text-decoration:none;">';
            $corpo .= '                                    <a style="color:#006699; text-decoration:none;" href="http://www.viconcursos.com/" target="_blank" title="Viconcursos.com">';
            $corpo .= '                                        http://www.viconcursos.com';
            $corpo .= '                                    </a>';
            $corpo .= '                                </span>';
            $corpo .= '                            </div> ';
            $corpo .= '                        </td>';
            $corpo .= '                    </tr>';
            $corpo .= '                </table>';
            $corpo .= '            </td>';
            $corpo .= '        </tr>';
            $corpo .= '        <tr>';
            $corpo .= '            <td style="background-color:#fff; padding-left:35px; padding-top:10px;border:1px solid #CCC;">';
            $corpo .= '                <table width="100%" border="0" cellspacing="0">';
            $corpo .= '                    <tr>';
            $corpo .= '                        <td height="37">';
            $corpo .= '                            <span style="font-size:18px; font-family:Tahoma, Geneva, sans-serif; color:#666666;">Viconcursos.com - Informa:</span>';
            $corpo .= '                            <span style="font-size:12px; font-family:Tahoma, Geneva, sans-serif; color:#666666;">&aacute;s ' . date("d/m/Y H:i:s", time()) . '</span>';
            $corpo .= '                        </td>';
            $corpo .= '                    </tr>';
            $corpo .= '                    <tr>';
            $corpo .= '                        <td>';
            $corpo .= '                            <span style="font-size:20px; font-family:Tahoma, Geneva, sans-serif; color:#000000;">';
            $corpo .= '                                ' . htmlentities($dadosconcursos->titulo) . '';
            $corpo .= '                            </span>';
            $corpo .= '                            <br /><br />';
            $corpo .= '                            <span style="font-size:16px; font-family:Tahoma, Geneva, sans-serif; color:#000000;">';
            $corpo .= '                                ' . htmlentities($dadosconcursos->subtitulo) . '';
            $corpo .= '                            </span>';
            $corpo .= '                            <br /><br />';
            $corpo .= '                            <span style="font-size:25px; font-family:Tahoma, Geneva, sans-serif; color:#999999;">Acesse aqui a noticia:</span>';
            $corpo .= '                        </td>';
            $corpo .= '                    </tr>';
            $corpo .= '                    <tr>';
            $corpo .= '                        <td>';
            $corpo .= '                            <span style="font-size:11px; font-family:Tahoma, Geneva, sans-serif; color:#999999; text-decoration:none;">';
            $corpo .= '                                <a href="http://www.viconcursos.com/concursos/detalhes/' . $dadosconcursos->idconcursos . '" title="Acessar Noticia?">';
            $corpo .= '                                    Clique Aqui';
            $corpo .= '                                </a>';
            $corpo .= '                            </span>';
            $corpo .= '                        </td>';
            $corpo .= '                    </tr>';
            $corpo .= '                    <tr>';
            $corpo .= '                        <td>&nbsp;</td>';
            $corpo .= '                    </tr>';
            $corpo .= '                    <tr>';
            $corpo .= '                        <td>';
            $corpo .= '                            <span style="font-size:18px; font-family:Tahoma, Geneva, sans-serif; color:#999999;">Novidades:</span>';
            $corpo .= '                        </td>';
            $corpo .= '                    </tr>';
            $corpo .= '                    <tr> <td><p>Se voc&ecirc; est&aacute; recebendo este email em algum momento se cadastrou no site www.viconcursos.com . Como apoiamos a n&atilde;o reprodu&ccedil;&atilde;o de spam na rede, caso n&atilde;o quiser mais fazer parte da nossa lista, envie um email para contato@viconcursos.com</p></td>';
            $corpo .= '                    </tr>';
            $corpo .= '                    <tr>';
            $corpo .= '<td>&nbsp;</td>';
            $corpo .= '</tr>';
            $corpo .= '</table></td></tr>';
            $corpo .= '</tbody></table>';
            $corpo .= '</td></tr></tbody>';

            //Envio Email
            $emailbd = new emails();
            $emailbd->setExtrasSelect("where IDemail = $row->idemails");
            $emailbd->selecionaTudo($emailbd);
            $dadosemail = $emailbd->retornaDados();
            $emailenviar = $dadosemail->email;
            if (validEmail($emailenviar)):
                if (!mail($emailenviar, "Novo Concurso cadastrado!", $corpo, $headers, "-r contato@viconcursos.com")):
                    $headers .= "Return-Path: contato@viconcursos.com\n"; // Se "não for Postfix";
                    mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
                endif;
            else:
                echo $emailenviar;
                echo "<br />";
                $emailexcluir = new emails();
                $emailexcluir->setValorPK($dadosemail->IDemail);
                $emailexcluir->deletar($emailexcluir);
            endif;

            //Deleto registro.
            $emaildel = new email_enviar();
            $emaildel->setValorPK($row->idenviaemail);
            $emaildel->deletar($emaildel);
            echo '<br />';
            echo $i;
        endfor;
    endif;
    echo 'fim';
}

/**
  Validate an email address.
  Provide email address (raw input)
  Returns true if the email address has the email
  address format and the domain exists.
 */
function validEmail($email) {
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex) {
        $isValid = false;
    } else {
        $domain = substr($email, $atIndex + 1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64) {
            // local part length exceeded
            $isValid = false;
        } else if ($domainLen < 1 || $domainLen > 255) {
            // domain part length exceeded
            $isValid = false;
        } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
            // local part starts or ends with '.'
            $isValid = false;
        } else if (preg_match('/\\.\\./', $local)) {
            // local part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
            // character not valid in domain part
            $isValid = false;
        } else if (preg_match('/\\.\\./', $domain)) {
            // domain part has two consecutive dots
            $isValid = false;
        } else if
        (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
            // character not valid in local part unless 
            // local part is quoted
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                $isValid = false;
            }
        }
        if ($isValid && !(checkdnsrr($domain, "MX") ||
                checkdnsrr($domain, "A"))) {
            // domain not found in DNS
            $isValid = false;
        }
    }
    return $isValid;
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


