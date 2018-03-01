<?php
    include "html/cabecalho.html";
?>

<div class='margemCincoPorcento ui form'>
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Nome Popular</label>
            <input placeholder="Nome Popular" type="text">
        </div>
    </div>
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Nome Científico</label>
            <input placeholder="Nome Científico" type="text">
        </div>
    </div>   
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Idade</label>
            <input placeholder="Idade" type="number" min="1" max="500">
        </div>
    </div>
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Circunferencia</label>
            <input placeholder="Circunferencia" type="number" min="1">
        </div>
    </div>
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Espécie</label>
            <input placeholder="Espécie" type="text">
        </div>
    </div>     
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Bioma</label>
            <input placeholder="Bioma" type="text">
        </div>
    </div>
    <div class="three fields">
        <div class="field"></div>
        <div class="field">
            <label>Origem</label>
            <input placeholder="Origem" type="text">
        </div>
    </div>
    <div class="ui one column centered grid">
        <div class="column"></div>
            <label for="file" class="ui icon button large">
                <i class="file icon"></i>
                Foto da Árvore
            </label>
            <input type="file" id="file" style="display:none">
    </div>
    <div class="ui one column centered grid">
        <div class="column"></div>
            <button class="ui green button center aligned" type="submit">Adicionar Árvore</button>
    </div>
</div>



<?php
    include "html/rodape.html";
?>