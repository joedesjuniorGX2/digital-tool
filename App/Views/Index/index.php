<?php

namespace Views\index;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Login - Index Controller Action Index View Index</h1>
  
  <?php foreach ($this->view->clients as $client): ?>
    <p><?= $client["name"]; ?></p>
    <p><?= $client["email"]; ?></p>
  <?php endforeach ; ?>  

  <?php var_dump($this->view->clients) ?>
</body>
</html>