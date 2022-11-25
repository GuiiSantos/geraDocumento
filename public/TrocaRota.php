<?php

abstract class TrocaRota {

  /**
 * Rota do home
 * 
 * @param string|null $pagina
 */
  public function home($pagina) {
    $paginaAtual = (isset($pagina)) ? intval($pagina) : 1;

    // Inicialização da API
    $url = "https://assembleia.api.pandora.com.br/eventos/7747/votante";
    $votantes = api($url);
    
    // Inicializa paginação
    $quantidadeResultado = 5;
    $dividindoArray = array_chunk($votantes, $quantidadeResultado);
    $totalResultado = count($dividindoArray);
    @$resultadoPagina = $dividindoArray[$paginaAtual - 1];

    if ($totalResultado >= $paginaAtual) {
      require_once __DIR__ . "/views/home.php";
    }else {
      $this->erro(404);
    }
  }

  /**
 * Rota de baixar o documento
 * 
 * @param int $idNome
 */
  public function baixar($idNome) {

    $url = "https://assembleia.api.pandora.com.br/eventos/7747/votante/$idNome";
    $resultado = api($url);
    
      if (isset($resultado->id)) {
          require_once __DIR__ . "/views/baixar.php";
          } else {
            $this->erro();
          }
      }
    
  public function erro($erro = "404") {
    http_response_code($erro);
    require __DIR__ . '/views/404.php';
  }
}
