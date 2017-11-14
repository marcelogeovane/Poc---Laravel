@extends('layouts.master')

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        <h3 class="name">Estação Ferroviária</h3>
                        <hr class="star-light">
                        <img class="img-responsive" src="assets/img/predios/estacao.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="dados" class="success">
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
           			<tr>Estação Ferroviária</tr>
           		</td>
           		<br>
           		<td>
           			<tr>Endereço: </tr>
           			<tr>Rua Governador Benedito Valadares,s/nº - Centro, Formiga - MG, 35570-000
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
                    <p>HISTORICO DA LINHA: A linha-tronco da RMV foi construída originalmente pela E. F. Oeste de
Minas a partir da estação de Ribeirão Vermelho, onde a linha de bitola de 0,76 chegou em
1888. A partir daí, a EFOM iniciou seu projeto de ligar o sul de Goiás a Angra dos Reis,
passando por Barra Mansa por bitola métrica: construída em trechos, somente em 1928 a
EFOM chegou a Angra dos Reis, na ponta sul, e no início dos anos 1940 a Goiandira, em Goiás,
na ponta norte, e já agora como Rede Mineira de Viação. A linha chegou a ser eletrificada
entre Barra Mansa e Ribeirão Vermelho, e transportou passageiros até o início dos anos 1990.
Nos anos 1970, o trecho final norte entre Monte Carmelo e Goiandira foi erradicado devido à
construção de uma represa no rio Paranaíba, e a linha foi desviada para oeste encontrando
Araguari. Hoje (2003) a linha, já não mais eletrificada, é operada pela concessionária FCA.
A ESTAÇÃO: A estação de Formiga foi inaugurada em 1905. 
Mais tarde, a falência da E. F. Goiaz fez com que o Governo incorporasse a linha Formiga-
Patrocínio à EFOM, passando a fazer parte de sua linha-tronco.</p>
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
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Um bosque com árvores, algumas casas e prédios ao redor, a linha ferroviária e uma trilha
para passeio.<br>
Foram utilizadas na construção, materiais com o: tijolos, elementos artísticos, telhado feito de
telha francesa, calhas, rufos, condutores, coroamento ( Platibanda, frontão, cimalha) reboco,
pintura à base de água, cerâmica, pedra, granito, portas, janelas, ferragens.</p>
                </div>
            </div>
        </div>
    </section>