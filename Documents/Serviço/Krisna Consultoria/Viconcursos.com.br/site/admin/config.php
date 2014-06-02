<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//diretorio do sistema
define("BASEPATH", dirname(__FILE__)."/");
//define("BASEURL", "http://www.viconcursos.com.br/admin/"); //produção
define("BASEURL", "http://localhost:8003/admin/");
define("ADMURL", BASEURL."painel.php");
define("CLASSPATH", "classes/");
define("MODULOSPATH", "modulos/");
define("UPLOADPATH", dirname(dirname(__FILE__))."/provas/");
define("UPLOADURL", "http://www.viconcursos.com/provas/");
define("UPLOADPATHIMG", dirname(dirname(__FILE__))."/img/");
define("UPLOADURLIMG", "http://www.viconcursos.com/img/");
define("CSSPATH", "css/");
define("JSPATH", "js/");

//bancode dados
//define("DBHOST", "localhost");
//define("DBUSER", "concurso");
//define("DBPASS", "P@ssw0rd");
//define("DBNAME", "concurso_viconcursos");
define("DBHOST", "viconcursos.cflqg1f5afsj.sa-east-1.rds.amazonaws.com:3306");
define("DBUSER", "vicon");
define("DBPASS", "krisna322014");
define("DBNAME", "viconcursos");

define('SMARTY_DIR',dirname(dirname(__FILE__)).'/lib/Smarty/libs/');
include(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();
$smarty->cache_dir = "cache";
$smarty->config_dir = "configs";
$smarty->compile_dir = "templates_c";
$smarty->template_dir = "templates";

$constantes = array('BASEPATH', 'BASEURL', 'ADMURL', 'CLASSPATH', 'MODULOSPATH', 'CSSPATH', 'JSPATH','DBHOST','DBUSER','DBPASS','DBNAME');
?>