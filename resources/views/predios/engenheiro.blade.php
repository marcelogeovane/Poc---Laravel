@extends('layouts.master')
    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <h3 class="name">Casa do Engenheiro</h3>
                        <hr class="star-light">
                        <img class="img-responsive" src="assets/img/predios/casarao.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="dados" class= "success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Dados</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="col-lg-8">
           <table class="table hidden"> 
                <td>
                    <tr>Nome: </tr>
                    <tr>Casa do Engenheiro</tr>
                </td>
                <br>
                <td>
                    <tr>Endereço: </tr>
                    <tr>R. Gorvenador Benedito Valadares,s/nº - Centro, Formiga - MG, 35570-000
                        <br>
                        Latitude: ?
                        <br>
                        Longitude: ?
                    </tr>
                </td>
           </table>
                
            </div>
            <div class="col-lg-4"  >
                    <div id="map"></div>
                </div>

            
        </div>
    </section>

    <!-- About Section -->
    <section class="primary" id="history">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>História</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p> O edifício serviu de moradia para os engenheiros que vinham trabalhar na Ferrovia. A
Estação Ferroviária construiu a casa para que estes engenheiros vivessem com suas
famílias, pois eles vinham de grandes cidades para trabalhar na Rede Ferroviária (dona
de grande parte do território ao redor da casa e da Ferrovia).</p>
                </div>
            </div>
        </div>
    </section>

<section id="situaçao" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Situação e Exterior</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>A Antiga Casa do Engenheiro da Rede Ferroviária localiza-se nas proximidades do
Prédio da Antiga Estação Ferroviária. O imóvel está localizado na Rua Governador
Valadares, via pavimentada, na região central de Formiga. Possui boa infra-estrutura,
rede de água e esgoto, passeios e boa iluminação pública. A edificação está inserida
numa área que compreende o complexo ferroviário, pátio de manobras, incluindo linhas
férreas, vagão de passageiros, estação rádio telegráfica e a antiga estação ferroviária,
hoje Museu Francisco Nhonhô Fonseca.</p>
                </div>
                <div class="col-lg-4">
                <p>Este complexo está adjacente a uma grande
área verde localizada na encosta do ‘’Morro do Cristo’’. Nas limitações urbanas desta
área, compreendem as edificações vizinhas da Rua Governador Valadares, que são,
predominantemente, térreas. Contudo, mais adiante, novas construções de prédios de
vários pavimentos, como se verificam em algumas partes do centro do município,
denunciam a tendência de adensamento nesta região.</p>
               </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
   