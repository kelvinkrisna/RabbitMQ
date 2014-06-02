<?php
inicializa();
require_once(BASEPATH . CLASSPATH . 'autoload.php');
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
    date_default_timezone_set('America/Los_Angeles');
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
            require_once(MODULOSPATH . $modulo . ".php");
        else:
            header('HTTP/1.0 404 Not Found');
            echo '<p>M&oacute;dulo inexistente neste sistema!</>';
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

function montaLinks($titulo) {
    $linktitulo = convert_to_url_format($titulo);
    return $linktitulo;
}

function convert_to_url_format($str) {

    $str = str_replace(" � ", " ", $str);

    // converte a string para minuscula
    $str = @strtolower($str);

    // substitui os caracteres mais conhecidos
    $from = "���������&��������������";
    $to = "aaaaaeeeeeiiiooooouuuucsyz";
    $str = @strtr($str, $from, $to);

    // percorre a string e substitui os caracteres 'estranhos'
    for ($i = 0; $i < @strlen($str); $i++) {

        $c = @ord($str[$i]);

        if ((($c < 48) || // deixa os numeros
                ($c > 57)) && // deixa os numeros

                (($c < 97) || // deixa os caracteres alfabeticos
                ($c > 122)) && // deixa os caracteres alfabeticos

                ($c != 45) && // deixa o -

                ($c != 95)) {    // deixa o _
            // substitui o caracter 'estranho' por _
            $str[$i] = '-';
        }
    } // fim-for

    $str = str_replace("--", "-", $str);
    $str = str_replace("--", "-", $str);
    $str = str_replace("---", "-", $str);
    $str = str_replace("----", "-", $str);
    $str = str_replace("-----", "-", $str);
    return( $str );
}

function ExtdData($data) {
    $data = explode("/", $data);
    switch ($data[1]) {
        case 1 : return $data[0] . " JAN";
            break;
        case 2 : return $data[0] . " FEV";
            break;
        case 3 : return $data[0] . " MAR";
            break;
        case 4 : return $data[0] . " ABR";
            break;
        case 5 : return $data[0] . " MAI";
            break;
        case 6 : return $data[0] . " JUN";
            break;
        case 7 : return $data[0] . " JUL";
            break;
        case 8 : return $data[0] . " AGO";
            break;
        case 9 : return $data[0] . " SET";
            break;
        case 10 : return $data[0] . " OUT";
            break;
        case 11 : return $data[0] . " NOV";
            break;
        case 12 : return $data[0] . " DEZ";
            break;
    }
}
?>