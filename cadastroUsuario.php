<?php
    include "html/cabecalho.html";
?>
<div class="ui grid">
    <div class="margemCincoPorcento three column row">
        <div class="column"></div>
        <form class=" column ui form">
        <div class="field">
            <label>Nome</label>
            <input type="text" name="nome" placeholder=" Nome">
        </div>
        <div class="field">
            <label>Nome de Usuário</label>
            <input type="text" name="nome-de-usuario" placeholder="Nome de Usuário">
        </div>
        <div class="field">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="field">
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Senha">
        </div>
        <div class="field">
            <label>Confirmação de Senha</label>
            <input type="password" name="confirmação-de-senha" placeholder="Confirmação de Senha">
        </div>
        <div class="field">
            <div class="ui checkbox">
            <input type="checkbox" tabindex="0" class="hidden">
            <label>Desejo receber newsletter</label>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
            <input type="checkbox" tabindex="0" class="hidden">
            <label>Eu aceito os termos e as condições</label>
            </div>
        </div>
        <button class="ui green button" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
<?php
    include "html/rodape.html";
?>