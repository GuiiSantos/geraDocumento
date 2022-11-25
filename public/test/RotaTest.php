<?php 
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/TrocaRotaTest.php';

abstract class RotaTest extends TrocaRotaTest {
    public function testIniciar(string $chamaUrlAtual) {

        $urlPrincipal = explode("/", $chamaUrlAtual);
    
        unset($urlPrincipal[0]);
    
        if ($urlPrincipal[1] === "") {
    
          $this->testHome(@$pagina);
    
        } else if ($urlPrincipal[1] === "baixar") {
            if (filter_var($urlPrincipal[2], FILTER_VALIDATE_INT)) {
              
              $this->testBaixar($urlPrincipal[2]);
          }
        } else if (is_numeric($urlPrincipal[1])) {
          if (!$urlPrincipal[2]) {
            if (filter_var($urlPrincipal[1], FILTER_VALIDATE_INT)) {
    
              $this->testHome($urlPrincipal[1]);
            } 
          } else {
          $this->testErro();
          }
        }else if(!$urlPrincipal[1] === "baixar"){
          $this->testErro();
    
        } else {
          $this->testErro();
    
        }
      }
}