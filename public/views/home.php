<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="<?= url() ?>/views/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
</head>

<body>
  <div class="caixa">
    <h1 class="titulo">gerador de documento</h1>
    <table>
      <tr>
        <th>id</th>
        <th>nome</th>
        <th>baixar</th>
      </tr>
      <?php

      foreach ($resultadoPagina as $votante) : ?>

        <tr>
          <td><?= $votante->id ?></td>
          <td><?= $votante->nome ?></td>
          <td>
            <a href='baixar/<?= $votante->id ?>'>Baixar PDF</a>

          </td>

        </tr>
      <?php
      endforeach; ?>
    </table>
    <div class="pagination">
      <?php

      $anterior = $paginaAtual - 1;
      $proximo = $paginaAtual + 1;
      if ($paginaAtual > 1) {
        echo " <a class='btn' href='$anterior'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'/></svg> Anterior </a>";
      }
      if ($paginaAtual < $totalResultado) {
        echo " <a class='btn' href='$proximo'> Próxima <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
  </svg> </a>";
      }

      ?>
    </div>
    <h1 class="titulo"><?= ($totalResultado > 1) ? "$totalResultado páginas": "$totalResultado páginas";?></h1>
  </div>
</body>

</html>