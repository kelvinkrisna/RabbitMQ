{include file='inicio.tpl'}
{include file='menu.tpl'}
{assign var="msg" value=$msg|default:""}


<div id="content">
    <h2>{$titulotela}</h2>
    {$msg}    
    {$script}
    <form class="userform" method="post" action="">
        <fieldset>
            <legend> Informe os dados para a alteração </legend>
            <ul>
                {section name=i loop=$insert}
                    <li> 
                        <label for="{$insert[i].name}">{$insert[i].labelnome}</label>
                        {if $insert[i].type ==='textarea'}
                            <textarea id="elm1" name="{$insert[i].name}" rows="20" cols="50" style="width: 80%">
                                {$insert[i].value}
                            </textarea>
                        {else}
                            
                            <input type="{$insert[i].type}" 
                                   name="{$insert[i].name}" 
                                   id="{$insert[i].name}" 
                                   {if ($insert[i].type == 'checkbox')}
                                       {if ($insert[i].disable)}
                                           disabled="disabled"
                                       {/if}    
                                       {if ($insert[i].checked)}
                                           checked="checked"
                                       {/if}
                                   {else}
                                       {if (!$insert[i].disable)}
                                           disabled="disabled"
                                       {/if}
                                       size="{$insert[i].size}" 
                                       value="{$insert[i].value}" 
                                   {/if}

                                   />{$insert[i].descricao}
                        {/if}
                    </li>
                {/section}       
                <br />
                <li class="center">
                    <input type="button" onclick="location.href = '?m={$modulo}&t={$tela}'" value="Cancelar" /> 
                    <input type="submit" name="editar" value="Salvar alterações" />
                </li>
            </ul>
        </fieldset>                
    </form>
    <br />


</div>  

<div style="clear:both" />
{include file='fim.tpl'}