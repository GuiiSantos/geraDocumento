<?php
// Instância a classe Dompdf
use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Configurações de apresentação
$configurar = $dompdf->getOptions();
$configurar->setDefaultFont('Courier');
$dompdf->setOptions($configurar);
$dompdf->setPaper('A4', 'landscape');

// Conteúdo do PDF
$dompdf->loadHtml("<h1 style='text-align: center; font-family: 'Courier New', Courier, monospace;'>Olá, " . $resultado->nome . " seja bem vindo a votação!</h1>");

// Renderiza o pdf
$dompdf->render();

// Baixa o pdf gerado para o navegador
$dompdf->stream('voto.pdf');
