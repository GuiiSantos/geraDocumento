<?php

use PHPUnit\Framework\TestCase;
require_once "./source/Config.php";

abstract class TrocaRotaTest extends TestCase {

    public function testHome(int $pagina) {

        $paginaAtual = (isset($pagina)) ? intval($pagina) : 1;
    
        $url = "https://assembleia.api.pandora.com.br/eventos/7747/votante";
        $votantes = api($url);

        $quantidadeResultado = 5;
        $dividindoArray = array_chunk($votantes, $quantidadeResultado);
        $totalResultado = count($dividindoArray);
        $resultadoPagina = $dividindoArray[$paginaAtual - 1];
    
        if ($totalResultado >= $paginaAtual) {
          require_once __DIR__ . "/views/home.php";
        }else {
          $this->tesTErro(404);
        }
      }

      public function TestBaixar($idNome) {

        $url = "https://assembleia.api.pandora.com.br/eventos/7747/votante/$idNome";
        $resultado = api($url);
        
          if (isset($resultado->id)) {
              require_once __DIR__ . "/views/baixar.php";
              } else {
                $this->TestErro(404);
              }
          }
        
      public function TestErro($erro = "404") {
        http_response_code($erro);
        require __DIR__ . '/views/404.php';
      }
}