<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="css/semantic/semantic.css">
  <link rel="stylesheet" href="css/victor.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/loginPaginaUnica.css" >
  <link rel="shortcut icon" type="image/png" href="imagens/favicon.png"/>
  <!-- Site Properties -->
  <title>CulTrees- Cadastro Usuário</title>

</head>
<body id="fundoLoginU">

    <button id="botaoVoltar" class="linkum ui button">
        <a id="corBotao" href="index.php"><i class="arrow left icon"></i>Voltar</a>
    </button>

<div id="opacidade" class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">

      <div id="letraLoginU" class=" content">
        <i class="address card icon"></i>
        Cadastro 
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user outline icon"></i>
            <input type="text" name="nome" placeholder="Nome">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
          <i class="user icon"></i>
            <input type="text" name="username" placeholder="Nome de usuário">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="envelope open icon"></i>
            <input type="email" name="email"  placeholder="E-mail">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="senha" placeholder="Escolha uma senha">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="confirmacao-de-senha" placeholder="Confirme sua senha">
          </div>
        </div>

        <div class="field">
            <div class="alinhamento ui checkbox">
                <input type="checkbox" name="example">
                <label>Li e aceito com os termos e condições</label>
            </div>
        </div>
        
        <div class="field">
            <div class="alinhamento ui checkbox">
                <input type="checkbox" name="example">
                <label>Desejo receber novidades</label>
            </div>
        </div>

        <div class="field">
        <div class="ui button fluid teal">
            <label for="file" class="ui icon">
                  <i class="file image icon"></i>
                   Escolha seu avatar
                </label>
                <input type="file" id="file" style="display:none">
        </div> 
    <div>
        <div class="ui divider"></div> 
        <div id="botaoLoginU" class=" ui fluid large teal submit button">Cadastrar</div>
    </div>

      <div class="ui error message"></div>

    </form>

</div>

</body>

</html>
