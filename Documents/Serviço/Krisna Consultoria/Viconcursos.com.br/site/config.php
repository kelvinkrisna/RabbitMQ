<?php
//diretorio do sistema
define("BASEPATH", dirname(__FILE__)."/");
//define("BASEURL", "http://www.viconcursos.com.br/"); //produção
define("BASEURL", "http://localhost:8003/");
define("ADMURL", BASEURL."index.php");
define("CLASSPATH", "classes/");
define("MODULOSPATH", "modulos/");
define("CSSPATH", "css/");
define("JSPATH", "js/");
define("SITENAME", "Vi Concursos - Tudo sobre concursos p&uacute;blicos no brasil");
//bancode dados
//define("DBHOST", "187.17.103.151");
//define("DBUSER", "viconcurso2");
//define("DBPASS", "dh025454");
//define("DBNAME", "viconcurso2");
define("DBHOST", "viconcursos.cflqg1f5afsj.sa-east-1.rds.amazonaws.com:3306");
define("DBUSER", "vicon");
define("DBPASS", "krisna322014");
define("DBNAME", "viconcursos");
define('SMARTY_DIR',dirname(__FILE__).'/lib/Smarty/libs/');
require(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty;
$smarty->cache_dir = "cache";
$smarty->config_dir = "configs";
$smarty->compile_dir = "templates_c";
$smarty->template_dir = "templates";
$constantes = array('BASEPATH', 'BASEURL', 'ADMURL', 'CLASSPATH', 'MODULOSPATH', 'CSSPATH', 'JSPATH','DBHOST','DBUSER','DBPASS','DBNAME');