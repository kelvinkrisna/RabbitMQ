<!DOCTYPE html>
<html>
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$titulo}</title>        
        {section name=i loop=$css}
            {$css[i]}            
        {/section}
        
        {section name=i loop=$js}
            {$js[i]}
        {/section}
    </head>
    <body class="painel">
        {include file='header.tpl'}