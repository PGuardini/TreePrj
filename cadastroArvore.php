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
  <title>CulTrees- Cadastro Árvore</title>

</head>
<body id="fundoLoginU">

    <a href="index.php"><button id="botaoVoltar" class="linkum ui button">
        <a id="corBotao" href="index.php"><i class="arrow left icon"></i>Voltar</a>
    </button></a>

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
            <i class="globe icon"></i>
            <input type="text" placeholder="Nome Popular">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="book icon"></i>
            <input type="name" placeholder="Nome Científico">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="map signs icon"></i>
            <input type="name" placeholder="Bioma">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="map marker alternate icon"></i>
            <input type="name" placeholder="Ocorrências">
          </div>
        </div>
      
        <div class="ui form">
          <div class="inline fields">
            <label for="fruit">A árvore é frutífera?</label>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                <label>Sim</label>
              </div>
            </div>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="fruit" tabindex="0" class="hidden">
                <label>Não</label>
              </div>
            </div>
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="heartbeat icon"></i>
            <input placeholder="Se sim, descreva as propriedades dos frutos">
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
