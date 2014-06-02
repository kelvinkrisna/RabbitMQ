{include file='inicio.tpl'}
{include file='menu.tpl'}


<div id="content">
    <h2>{$titulotela}</h2>
    
    {$subjs}
    {literal}
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#listausers').dataTable({
                "bScrollY": "400px",
                "bPaginate": true,
                "bJQueryUI": false,
                "aaSorting":[[0, "asc"]]
            });
        });
    </script>
    {/literal}
    <div><a href="?m={$modulo}&t=or_incluir" title="Novo Cadastro"><img src="img/add.png" alt="Novo Cadastro" /></a> </div>
    <table cellspacing="0" cellpadding="0" border="0" class="display" id="listausers">
        <thead>
            {$headerdados}
        </thead>
        <tbody>
            {$dados}          
        </tbody>    
    </table>

</div>  
    
<div style="clear:both" />
{include file='fim.tpl'}