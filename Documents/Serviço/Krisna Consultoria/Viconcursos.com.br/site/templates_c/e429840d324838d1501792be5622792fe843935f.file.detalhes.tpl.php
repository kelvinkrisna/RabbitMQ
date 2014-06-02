<?php /* Smarty version Smarty-3.1.13, created on 2013-09-12 18:15:58
         compiled from ".\templates\concursos\detalhes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:667851a107c712bc64-47320757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e429840d324838d1501792be5622792fe843935f' => 
    array (
      0 => '.\\templates\\concursos\\detalhes.tpl',
      1 => 1379020513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667851a107c712bc64-47320757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a107c71d77d2_03258610',
  'variables' => 
  array (
    'concurso' => 0,
    'url' => 0,
    'linkcompleto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a107c71d77d2_03258610')) {function content_51a107c71d77d2_03258610($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
    <div id="wrapEsq">
        <div id="dataSingle">
            <a href="">Postado em <?php echo $_smarty_tpl->tpl_vars['concurso']->value[0]['data'];?>
 - Concursos</a>  &nbsp;&nbsp;&nbsp;  
        </div>
        <div id="tituloSingle">
            <h1><?php echo $_smarty_tpl->tpl_vars['concurso']->value[0]['titulo'];?>
  <g:plusone size="medium" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['linkcompleto']->value;?>
"></g:plusone></h1>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('plugin/compartilhe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <br />
        <table width="650" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td> 
                    
                        <script type="text/javascript"><!--
                                   google_ad_client = "ca-pub-6905686321259168";
                            /* Juridico */
                            google_ad_slot = "9198276105";
                            google_ad_width = 300;
                            google_ad_height = 250;
                            //-->
                        </script>
                        <script type="text/javascript"
                                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                      
                </td>
                <td align="left">  
                     
                        <script type="text/javascript"><!--
            google_ad_client = "ca-pub-6905686321259168";
                            /* Juridico */
                            google_ad_slot = "9198276105";
                            google_ad_width = 300;
                            google_ad_height = 250;
                            //-->
                        </script>
                        <script type="text/javascript"
                                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                    
                </td>
            </tr>
        </table>
        <div id="adSingleX">
            <div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/prepare-se.jpg); width:163px; height:30px; background-repeat:no-repeat;">
            </div>
            <div style=" background-color:#F6F6F6; border:1px solid #E8F0FA; width:161px; height:610px;">	
                
                    <script type="text/javascript">
                        <!--
                        google_ad_client = "ca-pub-6905686321259168";
                        /* Banner Lateral */
                        google_ad_slot = "1346839303";
                        google_ad_width = 160;
                        google_ad_height = 600;
                        //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                
            </div>            
        </div>         
        <div id="conteudoSingleX">
            <p>
            <div>
                <b>Informações sobre o Concurso:</b>
            </div>
            <div style="text-align: justify">
                <br />
                <?php echo $_smarty_tpl->tpl_vars['concurso']->value[0]['concurso'];?>


                <br />
                <br />
            </div>
            <div>
                <h2>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['concurso']->value[0]['edital'];?>
" target="_blank"> Edital</a>
                </h2>
                <br />
                <br />
            </div>

            <?php if ($_smarty_tpl->tpl_vars['concurso']->value[0]['nome']!=''){?> 
                <?php echo $_smarty_tpl->getSubTemplate ('plugin/compartilhe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <br />
                <div>Postado por:</div>
                <div style="float:left; margin-left:5px;">
                    <b>Equipe ViConcursos</b><br />
                </div>
            <?php }?>
            <br />
            <br />
            <div id="adsHome">
                
                    <script type="text/javascript">
                        <!--
                        google_ad_client = "ca-pub-6905686321259168";
                        /* Left Detail Concursos */
                        google_ad_slot = "1486440100";
                        google_ad_width = 200;
                        google_ad_height = 90;
                        //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script> 
                
            </div>
        </div>
        <div style=" clear:both;"></div>
        <?php echo $_smarty_tpl->getSubTemplate ('plugin/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <br />
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<!--<div style="clear:both"></div>-->

<?php echo $_smarty_tpl->getSubTemplate ('fim.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>