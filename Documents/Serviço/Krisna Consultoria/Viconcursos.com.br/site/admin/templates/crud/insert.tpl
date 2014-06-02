{include file='inicio.tpl'}
{include file='menu.tpl'}
{assign var="msg" value=$msg|default:""}

<div id="content">
    <h2>{$titulotela}</h2>

    {$msg}
    {$script}
    <form enctype="multipart/form-data" class="userform" method="post" action="">
        <fieldset>
            <legend> Informe os dados para o cadastro </legend>
            <ul>
                {section name=i loop=$insert}
                    <li>                        
                        <label for="{$insert[i].name}">{$insert[i].labelnome}</label>
                        {if $insert[i].type ==='select'}
                            <select name="{$insert[i].name}">
                                <option value="">Selecione uma categoria</option>
                                {section name=j loop=$insert[i].select}
                                    <option value="{$insert[i].select[j].id}">{$insert[i].select[j].categoria}</option>
                                {/section}
                            </select>
                        {else}
                            {if $insert[i].type ==='textarea'}
                                <textarea id="elm1" name="{$insert[i].name}" rows="20" cols="50" style="width: 80%">
                                    {$insert[i].value}
                                </textarea>
                            {else}
                                <input type="{$insert[i].type}" 
                                       name="{$insert[i].name}" 
                                       id="{$insert[i].name}" 
                                       {if ($insert[i].type == 'checkbox')}
                                           {if ($insert[i].disable == 'disabled')}
                                               disable="disable"
                                           {/if}    
                                           {if ($insert[i].checked)}
                                               checked="checked"
                                           {/if}
                                       {else}
                                           size="{$insert[i].size}" 
                                           value="{$insert[i].value}" 
                                       {/if}/>{$insert[i].descricao}
                            {/if}
                        {/if}
                    </li>
                {/section}
                
                <br />
                <li class="center">
                    <input type="button" onclick="location.href = '?m={$modulo}&t={$tela}'" value="Cancelar" /> 
                    <input type="submit" name="cadastrar" value="Salvar dados" />
                </li>
            </ul>
        </fieldset>                
    </form>
    <br />
</div>

<div style="clear:both"></div>

{include file='fim.tpl'}