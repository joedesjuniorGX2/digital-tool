<!DOCTYPE html>
<html>

<head>
  <title>Login - Frigelar Digital Tool</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../App/Views/Login/assets/css/style.css"> 
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="img">
      <img src="https://frigelar.vteximg.com.br/arquivos/og-image-home.jpg?v=636806500306270000">
    </div>
    <div class="login-content">
      <form>
        <img src="https://pbs.twimg.com/profile_images/1201952716613926912/HsbLHoss_400x400.jpg">
        <h2 class="title">Seja bem-vindo!</h2>
        <h6 class="title">Para realizar o login na Frigelar Digital Tool, informe seu usuário e senha nos campos abaixo:
        </h6>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Usuário</h5>
            <input type="text" name="username" id="username" class="input">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Senha</h5>
            <input type="password" name="password" id="password" class="input">
          </div>
        </div>
        <a href="#">Esqueceu sua senha?</a>
        <button type="submit" class="btn" id="btn" onclick="validaInputs()">Entrar</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
