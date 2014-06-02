<?php
require_once(dirname(__FILE__).'/autoload.php');
__autoload('banco');
protegearquivo(basename(__FILE__));
abstract class base extends banco{
    //propriedades
    private $tabela = "";
    private $campos_valores = array();
    private $campopk = NULL;
    private $valorpk = NULL;
    private $extras_select = "";
    
    public function setTabela($tabela){
        $this->tabela = $tabela;        
    }
    public function getTabela(){
        return $this->tabela;
    }    
    public function setCamposValores($campos_valores){
        $this->campos_valores = $campos_valores;        
    }
    public function getCamposValores(){
        return $this->campos_valores;
    }
    
    public function setCampoPK($campopk){
        $this->campopk = $campopk;        
    }
    public function getCampoPK(){
        return $this->campopk;
    }
    
    public function setValorPK($valorPk){
        $this->valorpk = $valorPk;        
    }
    public function getValoPK(){
        return $this->valorpk;
    }
    
    public function setExtrasSelect($extras_select){
        $this->extras_select = $extras_select;        
    }
    
    public function getExtrasSelect(){
        return $this->extras_select;
    }
    
    //Metodos 
    public function AddCampo($campo=NULL,$valor=NULL){
        if ($campo!=NULL):
            $this->campos_valores[$campo] = $valor;
        endif;
    }
    
    public function DelCampo($campo){
        if(array_key_exists($campo, $this->campos_valores)):
            unset($this->campos_valores[$campo]);
        endif;            
    }
    
    public function setValor($campo=NULL, $valor=NULL){
        if ($campo!=NULL && $valor!=NULL):
            $this->campos_valores[$campo] = $valor;
        endif;           
    }
    
    public function getValor($campo=NULL){
        if ($campo!=NULL && array_key_exists($campo, $this->campos_valores)):
            return $this->campos_valores[$campo];
        else:
            return FALSE;            
        endif;
            
    }
}
?>
