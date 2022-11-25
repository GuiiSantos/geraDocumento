<?php

// Instância o autoload do composer
require "vendor/autoload.php";

require_once __DIR__ . '/Rota.php';

$chamaUrlAtual = $_SERVER['REQUEST_URI'];


// Instância a classe Dompdf
$rota = new Rota();

// Inicia as rotas
$rota->iniciar($chamaUrlAtual);
