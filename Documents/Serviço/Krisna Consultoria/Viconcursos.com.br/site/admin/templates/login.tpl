{include file='inicio.tpl'}
{assign var="trataerro" value=$trataerro|default:""}
{literal}
    <script type="text/javascript">
        $(document).ready(function() {
            $(".userform").validate({
                rules: {
                    usuario: {required: true, minlength: 3},
                    senha: {required: true, rangelength: [4, 10]}
                }
            });
        });
    </script>
{/literal}
<div id="loginform">
    <form class="userform" method="post" action="">
        <fieldset>
            <legend>Acesso Restrito, identifique-se</legend>
            <ul>
                <li>
                    <label for="usuario">Usu&aacute;rio:</label>
                    <input type="text" size="35" name="usuario" id="usuario" value="" />                        
                </li >
                <li>
                    <label for="senha">Senha:</label>
                    <input type="password" size="35" name="senha" id="senha" value="" />                        
                </li>
                <li class="center">
                    <input type="submit" name="logar" id="logar" value="Login"/>
                </li>
            </ul>        
        </fieldset>    
    </form> 
    {$trataerro}
</div>
{include file='fim.tpl'}