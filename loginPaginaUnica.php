<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="css/semantic/semantic.css">
  <link rel="stylesheet" href="css/victor.css">
  <link rel="stylesheet" href="css/loginPaginaUnica.css" >
  <link rel="shortcut icon" type="image/png" href="imagens/favicon.png"/>
  <!-- Site Properties -->
  <title>Login Cultrees</title>




</head>
<body id="fundoLoginU">

<button id="botaoVoltar" class="ui button"><a href="index.php"><i class="arrow left icon"></i>Voltar</a></button>

<div id="opacidade" class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">

      <div id="letraLoginU" class=" content">
        login
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail ou nome de usuário">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Senha">
          </div>
        </div>
        <div id="botaoLoginU" class=" ui fluid large teal submit button">Login</div>
        <a href="#">Esqueceu a senha?</a>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Novo por aqui? <a href="#">Cadastre-se</a>
    </div>
  </div>
</div>

</body>

</html>
