<?php
require_once __DIR__ . "/TrocaRota.php";
class Rota extends TrocaRota {
  public function iniciar(string $chamaUrlAtual) {

    $urlPrincipal = explode("/", $chamaUrlAtual);

    unset($urlPrincipal[0]);

    if ($urlPrincipal[1] === "") {

      $this->home(@$pagina);

    } else if ($urlPrincipal[1] === "baixar") {
        if (filter_var($urlPrincipal[2], FILTER_VALIDATE_INT)) {
          
          $this->baixar($urlPrincipal[2]);
      }
    } else if (is_numeric($urlPrincipal[1])) {
      if (!$urlPrincipal[2]) {
        if (filter_var($urlPrincipal[1], FILTER_VALIDATE_INT)) {

          $this->home($urlPrincipal[1]);
        } 
      } else {
      $this->erro();
      }
    } else if(!$urlPrincipal[1] === "baixar"){
      $this->erro();

    } else {
      $this->erro();

    }
  }
}
