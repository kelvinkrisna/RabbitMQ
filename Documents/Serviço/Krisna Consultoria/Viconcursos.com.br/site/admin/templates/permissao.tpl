{include file='inicio.tpl'}
{include file='menu.tpl'}
{assign var="msg" value=$msg|default:""}
<div id="content">
    <h2>{$titulotela}</h2>
    {$msg}
</div>  
<div style="clear:both" />
{include file='fim.tpl'}