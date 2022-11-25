<?= header("Refresh: 1.5;".url()); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url() ?>/views/css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="erro">
    <h1><?= $erro ?></h1>
    <h2>você será redirecionado para o home</h2>
  </div>
</body>

</html>