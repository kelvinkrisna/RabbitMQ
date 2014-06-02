<?php

require_once(dirname(__FILE__) . '/autoload.php');
protegearquivo(basename(__FILE__));

abstract class banco {

    //Propriedades
    private $servidor = DBHOST;
    private $usuario = DBUSER;
    private $senha = DBPASS;
    private $nomebanco = DBNAME;
    private $conexao = NULL;
    private $dataset = NULL;
    private $linhasafetadas = -1;

    public function __construct() {
        $this->conecta();
    }

    public function __destruct() {
        if ($this->conexao != NULL):
            mysql_close($this->conexao);
        endif;
    }

    //Servidor
    public function setServidor($Servidor) {
        $this->servidor = $Servidor;
    }

    public function getServidor() {
        return $this->servidor;
    }

    //usuario
    public function setUsuario($Usuario) {
        $this->usuario = $Usuario;
    }

    public function getusuario() {
        return $this->usuario;
    }

    //senha
    public function setSenha($Senha) {
        $this->senha = $Senha;
    }

    public function getSenha() {
        return $this->senha;
    }

    //conexao
    public function setconexao($Conexao) {
        $this->conexao = $Conexao;
    }

    public function getConexao() {
        return $this->conexao;
    }

//dataset
    public function setDataSet($DataSet) {
        $this->dataset = $DataSet;
    }

    public function getDataSet() {
        return $this->dataset;
    }

    //senha
    public function setLinhasAfetadas($LinhasAfetadas) {
        $this->linhasafetadas = $LinhasAfetadas;
    }

    public function getLinhasAfetadas() {
        return $this->linhasafetadas;
    }

    //senha
    public function setNomeBanco($NomeBanco) {
        $this->nomebanco = $NomeBanco;
    }

    public function getNomeBanco() {
        return $this->nomebanco;
    }

    public function conecta() {
        $this->conexao = mysql_connect($this->servidor, $this->usuario, $this->senha, TRUE) or die($this->trataerro(__FILE__, __FUNCTION__, mysql_errno(), mysql_error(), TRUE));
        mysql_select_db($this->nomebanco) or die($this->trataerro(__FILE__, __FUNCTION__, mysql_errno(), mysql_error(), TRUE));
        mysql_query("set NAMES 'utf8'");
        mysql_query("set character_set_connection=utf8");
        mysql_query("set character_set_client=utf8");
        mysql_query("set character_set_results=utf8");
    }

//End Function conecta

    public function inserir($objeto, $enviaemail = false) {
        //insert into nome da tabela (campo1, campo 2) values (valor1, valor 2)
        $sql = "insert into " . $objeto->getTabela() . " (";
        $campos = $objeto->getCamposValores();
        for ($i = 0; $i < count($campos); $i++):
            $sql .= key($campos);
            if ($i < (count($campos) - 1)):
                $sql .= ", ";
            else:
                $sql .= ") ";
            endif;
            next($campos);
        endfor;

        reset($campos);

        $sql .= "VALUES (";

        for ($i = 0; $i < count($campos); $i++):
            $sql .= is_numeric($campos[key($campos)]) ?
                    $campos[key($campos)] :
                    "'" . $campos[key($campos)] . "'";
            if ($i < (count($campos) - 1)):
                $sql .= ", ";
            else:
                $sql .= ") ";
            endif;
            next($campos);
        endfor;

        return $this->executaSQL($sql);
    }

    public function atualizar($objeto) {
        //update nomedatabela set campo1 = valor1, campo 2 = valor2 where campopk = valorpk
        $sql = "update " . $objeto->getTabela() . " set ";
        $campos = $objeto->getCamposValores();
        for ($i = 0; $i < count($campos); $i++):
            $sql .= key($campos);

            $sql .= " = ";

            $sql .= is_numeric($campos[key($campos)]) ?
                    $campos[key($campos)] :
                    "'" . $campos[key($campos)] . "'";
            if ($i < (count($campos) - 1)):
                $sql .= ", ";
            endif;
            next($campos);
        endfor;

        $sql .= " Where " . $objeto->getCampoPK() . " = ";
        $sql .= is_numeric($objeto->getValorPK()) ?
                $objeto->getValorPK() :
                "'" . $objeto->getValorPK() . "'";

        return $this->executaSQL($sql);
    }

    public function deletar($objeto) {
        $sql = "delete from " . $objeto->getTabela() . " ";
        $sql .= " Where " . $objeto->getCampoPK() . " = ";
        $sql .= is_numeric($objeto->getValorPK()) ?
                $objeto->getValorPK() :
                "'" . $objeto->getValorPK() . "'";

        return $this->executaSQL($sql);
    }

    public function deletarWhere($objeto) {
        $sql = "delete from " . $objeto->getTabela() . " ";
        if ($objeto->getExtrasSelect() != NULL):
            $sql .= " " . $objeto->getExtrasSelect();
        else:
            $this->trataerro(__FILE__, __FUNCTION__, '123', 'Não foi passado parametros de exclusão');
        endif;

        return $this->executaSQL($sql);
    }

    public function selecionaTudo($objeto) {
        $sql = "SELECT * FROM " . $objeto->getTabela();

        if ($objeto->getExtrasSelect() != NULL):
            $sql .= " " . $objeto->getExtrasSelect();
        endif;

        return $this->executaSQL($sql);
    }

    public function contaRegistros($objeto) {
        $sql = "SELECT count(*) as total FROM " . $objeto->getTabela();

        if ($objeto->getExtrasSelect() != NULL):
            $sql .= " " . $objeto->getExtrasSelect();
        endif;
        $this->executaSQL($sql);
        while ($row = $objeto->retornaDados()) {
            $valor = $row->total;
        };
        return $valor;
    }

   public function maxRegistros($objeto) {
        $sql = "SELECT max(" . $objeto->getCampoPK() . ") as total FROM " . $objeto->getTabela();

        if ($objeto->getExtrasSelect() != NULL):
            $sql .= " " . $objeto->getExtrasSelect();
        endif;
        $this->executaSQL($sql);
        while ($row = $objeto->retornaDados()) {
            $valor = $row->total;
        };
        return $valor;
    }

    public function somaCampo($objeto, $campo) {
        $sql = "SELECT sum($campo) as total FROM " . $objeto->getTabela();

        if ($objeto->getExtrasSelect() != NULL):
            $sql .= " " . $objeto->getExtrasSelect();
        endif;
        $this->executaSQL($sql);
        while ($row = $objeto->retornaDados()) {
            $valor = $row->total;
        };
        return $valor;
    }

    public function selecionaCampos($objeto) {
        $sql = "SELECT ";
        $campos = $objeto->getCamposValores();

        for ($i = 0; $i < count($campos); $i++):
            $sql .= key($campos);

            if ($i < (count($campos) - 1)):
                $sql .= ", ";
            else:
                $sql .= " ";
            endif;
            next($campos);
        endfor;

        $sql .= " FROM " . $objeto->getTabela();
        if ($objeto->getExtrasSelect() != NULL): $sql .= " " . $objeto->getExtrasSelect();
        endif;
        return $this->executaSQL($sql);
    }

    public function executaSQL($sql = NULL) {
        if ($sql != NULL):
            $query = mysql_query($sql) or $this->trataerro(__FILE__, __FUNCTION__);
            $this->linhasafetadas = mysql_affected_rows($this->conexao);            
            if (substr(trim(strtolower($sql)), 0, 6) == 'select'):
                $this->dataset = NULL;
                $this->dataset = $query;
                return $query;
            else:
                return $this->linhasafetadas;
            endif;
        else:
            $this->trataerro(__FILE__, __FUNCTION__, NULL, 'Comando Sql não informado na rotina', FALSE);
        endif;
    }

    public function RetornaDados($tipo = NULL) {
        switch (strtolower($tipo)):
            case "array":
                return
                        mysql_fetch_array($this->dataset);
                break;
            case "assoc": return mysql_fetch_assoc($this->dataset);
                break;

            case "object":
                return mysql_fetch_object($this->
                        dataset);
                break;
            default :
                return mysql_fetch_object($this->dataset);
                break;
        endswitch;
    }

    public function trataerro($arquivo = NULL, $rotina = NULL, $numErro = NULL, $msgErro = NULL, $GeraExcept = FALSE) {
        if ($arquivo == NULL)
            $arquivo = 'Não Informado';
        if ($rotina == NULL)
            $rotina = 'Rotina Não informada';
        if ($numErro == NULL)
            $numErro = mysql_errno($this->conexao);
        if ($msgErro == NULL)
            $msgErro = mysql_error($this->conexao);

        $resultado = 'Ocorreu um erro com os seguintes detalhes: </br>
            <strong> Arquivo: </strong> ' . $arquivo . '<br />
            <strong> Rotina: </strong> ' . $rotina . '<br />
            <strong> Codigo: </strong> ' . $numErro . '<br />
            <strong> Mensagem: </strong> ' . $msgErro . '<br />';

        if ($GeraExcept) {
            die($resultado);
        } else {
            echo($resultado);
        }
    }

//End function trataerro    
}

?>