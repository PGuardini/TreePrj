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
  <title>Cadastro Árvore</title>




</head>
<body id="fundoLoginU">

    <button id="botaoVoltar" class="linkum ui button">
        <a id="corBotao" href="index.php"><i class="arrow left icon"></i>Voltar</a>
    </button>

<div id="opacidade" class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">

      <div id="letraLoginU" class=" content">
      <i class="tree icon"></i>
        Cadastro Árvore
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="leaf icon"></i>
            <input type="text" name="email" placeholder="Nome Popular">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="tree icon"></i>
            <input type="name" name="nameC" placeholder="Nome Científico">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="sort numeric down icon"></i>
            <input type="number" name="idade" min="0" max="9500" placeholder="Idade">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="circle notch icon"></i>
            <input type="number" name="circu" min="0" max="60" placeholder="Circunferência">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="joomla icon"></i>
            <input type="number" name="circu" min="0" max="60" placeholder="Espécie">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="crosshairs icon"></i>
            <input type="number" name="circu" min="0" max="60" placeholder="Bioma">
          </div>
        </div>

        <div class="field">
        <div class="ui button fluid teal">
            <label for="file" class="ui icon">
                  <i class="file image icon"></i>
                   Foto da Árvore
                </label>
                <input type="file" id="file" style="display:none">
            </div> 
        <div>
        <div class="ui divider"></div> 
        <div id="botaoLoginU" class=" ui fluid large teal submit button">Cadastrar Árvore</div>
      </div>

      <div class="ui error message"></div>

    </form>

</div>

</body>

</html>
