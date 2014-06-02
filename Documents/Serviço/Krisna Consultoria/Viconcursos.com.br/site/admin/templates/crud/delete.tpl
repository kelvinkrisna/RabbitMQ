{include file='inicio.tpl'}
{include file='menu.tpl'}
{assign var="msg" value=$msg|default:""}


<div id="content">
    <h2>{$titulotela}</h2>
    {$msg}    
    <form class="userform" method="post" action="">
        <fieldset>
            <legend> Confirme os dados para exclus&atilde;o </legend>
            <ul>
                {section name=i loop=$insert}
                    <li>                        
                        <label for="{$insert[i].name}">{$insert[i].labelnome}</label>
                        <input type="{$insert[i].type}" name="{$insert[i].name}" id="{$insert[i].name}" disabled="disabled" 
                               {if ($insert[i].type == 'checkbox' && $insert[i].checked)}
                                   checked="checked"
                               {/if} size="{$insert[i].size}" value="{$insert[i].value}" />{$insert[i].descricao}</li>                    
                    </li>
                {/section}       
                <br />
                <li class="center">
                    <input type="button" onclick="location.href = '?m={$modulo}&t={$tela}'" value="Cancelar" /> 
                    <input type="submit" name="excluir" value="Confirmar Exclusão" />
                </li>
            </ul>
        </fieldset>                
    </form>
    <br />


</div>  

<div style="clear:both" />
{include file='fim.tpl'}