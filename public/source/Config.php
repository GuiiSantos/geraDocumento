<?php

const CONF_URL = "http://localhost/";

/**
 * Retorna a url
 * 
 * @param string|null $path
 * @return string
 */
function url(string $path = null): string {
  if($path) {
      return CONF_URL . "/" .  ($path[0] == "/" ?  substr($path, 1) : $path);
  }

  return CONF_URL;
}

/**
 * Retorna os dados da API
 * 
 * @param string $url
 * @return mixed
 */
function api($url) {
  $token = "9dc19260-ff58-4cf2-a5f4-e2f297595fab";
  $authorization = "Authorization: Bearer " . $token;

  $ch = curl_init($url);

  curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $resultado = curl_exec($ch);
  curl_close($ch);

  return json_decode($resultado);
}

