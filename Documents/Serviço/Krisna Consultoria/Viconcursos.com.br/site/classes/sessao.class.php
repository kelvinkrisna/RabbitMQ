<?php
require_once(dirname(dirname(__FILE__)) . '/funcoes.php');
protegearquivo(basename(__FILE__));

class sessao{
    protected $id;
    protected $nvars;
    
    public function __construct($inicia=TRUE) {
        ob_start();
        if ($inicia==TRUE):
            $this->start();
        endif;        
    }
    
    public function start(){
        if(!isset($_SESSION)):
            session_start();
        endif;
        
        $this->id = session_id();
        $this-> setNvar();
    }
    
    private function setNvar(){
        $this->nvars = sizeof($_SESSION);        
    }
    
    public function getNvar(){
        return $this->nvars;
    }
    
    public function setVar($var, $valor){
        $_SESSION[$var] = $valor;
        $this->setNvar();
    }
    
    public function unsetVar($var){
        unset($_SESSION[$var]);
        $this->setNvar();
    }
    
    public function getValor($var){
        if (isset($_SESSION[$var])):
            return $_SESSION[$var];
        else:
            return NULL;
        endif;        
    }
    
    public function destroy($inicia=false){
        session_unset();
        session_destroy();
        $this->setNvar();
        if ($inicia==TRUE):
            $this->start();
        endif;            
    }
    
    public function printAll(){
        foreach ($_SESSION as $k => $v):
            printf("%s = %s<br />", $k,$v);
        
        endforeach;
    }
}
?>
