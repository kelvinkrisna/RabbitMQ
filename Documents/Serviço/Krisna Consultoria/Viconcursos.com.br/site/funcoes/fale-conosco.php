<?php

$headers = 'From: Viconcursos ' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1 \r\n';

$corpo = '<table width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td height="475" valign="top" style="background-color:#e9eff2;padding:30px 15px 0">
    <table width="710" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:16px;color:#333">
      <tbody><tr>
        <td valign="top" style="background-color:#E9EFF2"><table width="100%" height="90" border="0" cellspacing="0">
          <tr>
            <td width="12%" align="left" valign="top"><a href="http://www.viconcursos.com" target="_blank"><img src="http://www.viconcursos.com/imgs/news/logo-viconcursos.jpg" width="74" height="80" border="0"></a></td>
            <td width="88%" align="left" valign="top">
            <div style=" margin-top:7px;">
            <span style="font-size:20px; font-family:Tahoma, Geneva, sans-serif; color:#666; ">
            
            
            <a style="color:#666666; text-decoration:none;" href="http://twitter.com/viconcursos" target="_blank" title="Siga-nos no Twitter">@viconcursos </a></span>
            
            
             <br>
              <span style="font-size:14px; font-family:"Times New Roman", Times, serif; color:#666;">
              <em>Tudo sobre Concursos P&uacute;blicos. Not&iacute;cias, apostilas, dicas, provas e<br>
gabaritos, v&iacute;deo aulas e muito mais.</em></span><br>
              <span style="font-size:14px; font-family:Tahoma, Geneva, sans-serif; color:#006699; text-decoration:none;">
              <a style="color:#006699; text-decoration:none;" href="http://twitter.com/viconcursos" target="_blank" title="Viconcursos.com">
              http://www.viconcursos.com
              </a>
              
              </span>
             </div> 
              
              </td>
          </tr>
        </table></td></tr>

      

      <tr><td style="background-color:#fff; padding-left:35px; padding-top:10px;border:1px solid #CCC;"><table width="100%" border="0" cellspacing="0">
        <tr>
          <td height="37"><span style="font-size:18px; font-family:Tahoma, Geneva, sans-serif; color:#666666;">Viconcursos.com - Informa:</span>
		 
		   <span style="font-size:12px; font-family:Tahoma, Geneva, sans-serif; color:#666666;">&aacute;s ' . date("d/m/Y H:i:s", time()) . '</span>
		  
		  </td>
        </tr>
        <tr>
          <td><span style="font-family: Tahoma, Geneva, sans-serif; font-size: 16px; color: #000000"><b>Nome:</b> ' . $_POST['nome'] . ' </span></td>
        </tr>
        <tr>
          <td><b>E-mail:<b> ' . $_POST['email'] . '</td>
        </tr>
        <tr>
          <td height="22"><b>Cidade:</b> ' . $_POST['cidade'] . ' <b> UF</b> : ' . $_POST['uf'] . '</td>
        </tr>
        <tr>
          <td>' . $_POST['msg'] . '&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><span style="font-size:18px; font-family:Tahoma, Geneva, sans-serif; color:#999999;">Novidades:</span></td>
        </tr>
        <tr>
                 </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td></tr>
      
    </tbody></table>
  </td></tr></tbody></table>
';
$emai = "kelvin@krisnaconsultoria.com.br";

mail($emai, "Contato", $corpo, $headers);
?>