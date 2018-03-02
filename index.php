<?php

    include "html/cabecalho.html";

?>

    <div id="slider">
        <figure>
            <img src="imagens/slide2.jpg" class='img' alt>
            <img src="imagens/jungle.jpg" class='img' alt>
            <img src="imagens/nature.jpg" class='img' alt>
            <img src="imagens/valley.jpg" class='img' alt>
            <img src="imagens/forest.jpg" class='img' alt>
        </figure>
    </div>

 	
        <div class="espacadorMenu"></div>
    <h2 class="ui horizontal divider header tituloPag">
        Catálogo
    </h2>
    <div class="espacadorTitulo"></div>

    <div class="ui stackable centered four column grid">

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/acerola.jpg">
                <a href="detalhaArvore.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">M. emarginata</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/lichia.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">L. chinensis</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/jabuticaba.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">P. cauliflora</div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="ui stackable centered four column grid">

         <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/macieira.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">M. domestica</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/pitanga.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">E. uniflora</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/pauformiga.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">T. americana</div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="ui stackable centered four column grid">
       
        <div class="column">
                <div class="ui piled segment containerCatalogo">
                    <img class="ui image imageCatalogo" src="imagens/catalogo/acacia.jpg">
                    <a href="">
                        <div class="middleCatalogo">
                            <div class="textCatalogo">Vachellia</div>
                        </div>
                    </a>
                </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/sibipiruna.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">C. pluviosa</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/ipe.jpg">
                <a href="">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">H. albus</div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="ui one column centered grid">
         <div class="column"></div>
        <button class="ui large center aligned button botaoInserir">
            <i class="leaf icon"></i>
            <a class="botaoArvore" href="cadastroArvore.php">Adicionar Árvore</a>
        </button>
    </div>

    <div class="espacadorRodape"></div> 
 	

<?php

    include "html/rodape.html";

?>