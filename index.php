<?php

    include "html/cabecalho.html";

?>

    <div id="slider">
        <figure>
            <img src="imagens/slide/slide1.png" class='img' alt>
            <img src="imagens/slide/slide2.png" class='img' alt>
            <img src="imagens/slide/slide3.png" class='img' alt>
            <img src="imagens/slide/slide4.png" class='img' alt>
            <img src="imagens/slide/slide5.png" class='img' alt>
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
                <a href="detalhaAceroleira.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">M. emarginata</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Aceroleira 
                </h4>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/lichia.jpg">
                <a href="detalhaLichia.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">L. chinensis</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Pé de Lichia 
                </h4>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/jabuticaba.jpg">
                <a href="detalhaJabuticabeira.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">P. cauliflora</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Jabuticabeira 
                </h4>
            </div>
        </div>

    </div>

    <div class="ui stackable centered four column grid">

         <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/macieira.jpg">
                <a href="detalhaMacieira.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">M. domestica</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Macieira 
                </h4>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/pitanga.jpg">
                <a href="detalhaPitangueira.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">E. uniflora</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Pitangueira
                </h4>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/pauformiga.jpg">
                <a href="detalhaPauformiga.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">T. americana</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Pau Formiga 
                </h4>
            </div>
        </div>

    </div>

    <div class="ui stackable centered four column grid">
       
        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/acacia.jpg">
                    <a href="detalhaAcacia.php">
                        <div class="middleCatalogo">
                            <div class="textCatalogo">Vachellia</div>
                        </div>
                    </a>
                    <h4 class="ui horizontal divider header">
                        Acácia
                    </h4>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/sibipiruna.jpg">
                <a href="detalhaSibi.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">C. pluviosa</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Sibipiruna
                </h4>
            </div>
        </div>

        <div class="column">
            <div class="ui piled segment containerCatalogo">
                <img class="ui image imageCatalogo" src="imagens/catalogo/ipe.jpg">
                <a href="detalhaIpe.php">
                    <div class="middleCatalogo">
                        <div class="textCatalogo">H. albus</div>
                    </div>
                </a>
                <h4 class="ui horizontal divider header">
                    Ipê
                </h4>
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