<?php
inicializa();
require_once(BASEPATH . CLASSPATH . 'autoload.php');
__autoload('sessao');
protegearquivo(basename(__FILE__));

function inicializa() {
    if (file_exists(dirname(__FILE__) . '/config.php')):
        require_once(dirname(__FILE__) . '/config.php');
    else:
        die(utf8_decode('O arquivo de configuração não foi localizado, contate o administrador.'));
    endif;

    foreach ($constantes as $valor) :
        if (!defined($valor)):
            die(utf8_decode('Faltam configurações básicas do sistema, contate o administrador. ' . $valor));
        endif;
    endforeach;

    if (isset($_GET['logoff'])):
        if ($_GET['logoff'] == TRUE):
            require_once(BASEPATH . CLASSPATH . 'autoload.php');
            __autoload('usuarios');
            $user = new usuarios();
            $user->doLogout();
            exit;
        endif;
    endif;
}

function loadCSS($arquivo = NULL, $media = 'screen', $import = FALSE) {
    if ($arquivo != NULL):
        if ($import == TRUE):
            return '<style type="text\css">@import url("' . BASEURL . CSSPATH . $arquivo . '.css");</style>';
        else:
            return '<link rel="stylesheet" type="text/css" href="' . BASEURL . CSSPATH . $arquivo . '.css" media="' . $media . '" />';
        endif;

    endif;
}

function loadJS($arquivo = NULL, $remoto = FALSE) {
    if ($arquivo != NULL):
        if ($remoto == FALSE)
            $arquivo = BASEURL . JSPATH . $arquivo . '.js';
        return '<script type="text/javascript" src="' . $arquivo . '"></script>';
    endif;
}

function loadModulo($modulo = NULL, $tela = NULL) {
    if ($modulo == NULL || $tela == NULL):
        return '<p>Erro na função <strong>' . __FUNCTION__ . '</strong>: faltam parâmetros para execução.</p>';
    else:
        if (file_exists(MODULOSPATH . $modulo . ".php")):
            include_once(MODULOSPATH . $modulo . ".php");
        else:
            echo utf8_decode('<p>Módulo inexistente neste sistema!</>');
        endif;
    endif;
}

function protegearquivo($nomearquivo, $redirPara = 'index.php?erro=3') {
    $url = $_SERVER["PHP_SELF"];
    if (preg_match("/$nomearquivo/i", $url)):
//redireciona para outra url;
        redireciona($redirPara);
    endif;
}

function redireciona($url = '') {
    header("Location: " . BASEURL . $url);
}

function codificaSenha($senha) {
    return md5($senha);
}

function verificaLogin() {

    $sessao = new sessao();
    if ($sessao->getNvar() <= 0 || $sessao->getValor('logado') != TRUE):
        redireciona('?erro=3');
    endif;
}

function PrintMSG($msg = NULL, $tipo = NULL) {
    if ($msg != NULL):
        switch ($tipo) {
            case 'erro':
                return '<div class="erro">' . $msg . '</div>';
                break;
            case 'alerta':
                return '<div class="alerta">' . $msg . '</div>';
                break;
            case 'pergunta':
                return '<div class="pergunta">' . $msg . '</div>';
                break;
            case 'sucesso':
                return '<div class="sucesso">' . $msg . '</div>';
                break;
            default:
                return '<div class="sucesso">' . $msg . '</div>';
                break;
        }
    endif;
}

function isAdmin() {
    verificaLogin();
    $sessao = new sessao(FALSE);
    __autoload('usuarios');
    $user = new usuarios(array('administrador' => NULL));
    $iduser = $sessao->getValor('iduser');
    $user->setExtrasSelect("WHERE id=$iduser");
    $user->selecionaCampos($user);
    $res = $user->RetornaDados();
    if (strtolower($res->administrador) == 's'):
        return TRUE;
    else:
        return FALSE;
    endif;
}
?>