<?php
    include "html/cabecalho.html";
?>
<div class="ui grid">
    <div id="margemCincoPorcento" class="three column row">
        <div class="column"></div>
        <form class="column ui form">
            <div class="field">
                <label>Username</label>
                <input type="text" name="first-name" placeholder="Username">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="last-name" placeholder="Password">
            </div>
            <div class="field"></div>
            <button id="botaoVerde" class="ui green button" type="submit">Log In</button>
        </form>
    </div>
</div>

<?php
    include "html/rodape.html";
?>
