@extends('layouts.frame')

@section('title', 'Storia della carapigna - Sa Carapigna Sebastiano Pranteddu')
@section('description', 'Sa Carapigna Sebastiano Pranteddu, di generazione in generazione produciamo con orgoglio il gelato più antico della Sardegna.')
@section('keywords', 'carapigna gelato sardegna marmilla aritzo')

@section('content')
    <x-navigation/>

    <!-- Home Section -->
    <section class="home-section bg-dark-alfa-50 parallax-2 fixed-height-small" data-background="images/preparazione/lavorazione-carapigna.jpg" id="home">
        <div class="js-height-parent container">

            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">

                    <h1 class="hs-line-14 font-alt mb-20 mb-xs-30">
                        Gli Strumenti e la Preparazione
                    </h1>
                    <div class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                        Dalla limonata alla soffice consistenza
                    </div>

                </div>
            </div>
            <!-- End Hero Content -->

        </div>
    </section>
    <!-- End Home Section -->


    <!-- Text -->
    <section class="page-section pt-100 pb-100">
        <div class="container relative">
            <h2 class="section-title font-alt mb-20 mb-sm-20">Sa Carapigna</h2>
            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-text align-center">
                        Sa Carapigna è un antichissimo gelato sardo al gusto di 
                        limone risalente al XVII secolo, realizzato manualmente 
                        secondo una particolare lavorazione. Rappresenta il primo 
                        sistema di congelamento sotto agitazione inventato dall'uomo 
                        e prevede l'utilizzo di tecniche e strumenti unici.
                    </div>
                </div>
            </div>
                
        </div>
    </section> 
    <!-- End Text -->

    <!-- Section 1 -->
    <section class="page-section pt-0 pb-0">
        <div class="container relative">

            <div class="row">

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 mb-sm-40">

                    <!-- About Project -->
                    <div class="text">

                        <h3 class="font-alt mb-30 mb-xxs-10">Sa Carapignera</h3>
                        <p>
                            Sa carapignera o anche sorbettiera è un recipiente cilindrico munito di un particolare 
                            coperchio con manico impugnabile, che ne permette una chiusura ermetica. 
                            Anticamente si utilizzavano carapigneras in stagno, piombo, ferro-zinco ecc., 
                            abbandonate poi per via della poca resistenza dovuta alla deperibilità dei materiali, in alcuni casi tossici.
                        </p>

                    </div>
                    <!-- End About Project -->

                </div>

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">

                    <!-- Image -->
                    <div class="work-full-media mt-0 white-shadow wow fadeInUp">
                        <img src="images/preparazione/carapignera.JPG" alt="La carapignera contenitore della limonata" />
                    </div>
                    <!-- End Image -->

                </div>

            </div>

        </div>
    </section>
    <!-- End Section 1 -->


    <!-- Section 2 -->
    <section class="page-section pt-90 pb-0">
        <div class="container relative">

            <div class="row">

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 mb-sm-40">

                    <!-- Image -->
                    <div class="work-full-media mt-0 white-shadow wow fadeInUp">
                        <img src="images/preparazione/barrile.jpg" alt="Il barile" />
                    </div>
                    <!-- End Image -->

                </div>

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">

                    <!-- About Project -->
                    <div class="text">

                        <h3 class="font-alt mb-30 mb-xxs-10">Su Barile</h3>

                        <p>
                            Su barrile è un mastello in legno di castagno formato da doghe serrate insieme da due o 
                            tre cerchi in ferro o recentemente in acciaio inox, che lo circoscrivono a differenti altezze. 
                            Garantisce un ottimo isolamento termico tra la miscela ghiaccio-sale e l’ambiente esterno.
                        </p>

                    </div>
                    <!-- End About Project -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Section 2 -->


    <!-- Section 3 -->
    <section class="page-section pt-90 pb-0">
        <div class="container relative">

            <div class="row">

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 mb-sm-40">

                    <!-- About Project -->
                    <div class="text">

                        <h3 class="font-alt mb-30 mb-xxs-10">Su Ferru 'e ferru</h3>
                        <p>
                            Su ferru ‘e ferru è una paletta metallica, anticamente in ferro e ora in acciaio 
                            inossidabile, costituita da un lungo e sottile manico a sezione circolare terminante 
                            con una punta piatta e lanceolata. In passato su ferru ‘e ferru in ferro veniva 
                            ripulito da eventuali tracce di ruggine sfregandolo energeticamente con sa tauledda, 
                            (un coccio di terracotta), e succo di limone.
                        </p>

                    </div>
                    <!-- End About Project -->

                </div>

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">

                    <!-- Image -->
                    <div class="work-full-media mt-0 white-shadow wow fadeInUp">
                        <img src="images/preparazione/ferru-ferru.JPG" alt="Ferru e ferru strumento manuale per lavorare la limonata" />
                    </div>
                    <!-- End Image -->

                </div>

            </div>

        </div>
    </section>
    <!-- End Section 3 -->


    <!-- Section 4 -->
    <section class="page-section pt-90">
        <div class="container relative">

            <div class="row">

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 mb-sm-40">

                    <!-- Image -->
                    <div class="work-full-media mt-0 white-shadow wow fadeInUp">
                        <img src="images/preparazione/ferru-linna.JPG" alt="Ferru e linna, strumento manuale per la lavorazione finale" />
                    </div>
                    <!-- End Image -->

                </div>

                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">

                    <!-- About Project -->
                    <div class="text">

                        <h3 class="font-alt mb-30 mb-xxs-10">Su Ferru 'e linna</h3>

                        <p>
                            Su ferru ‘e linna è un piccolo mestolo in legno, utilizzato per amalgamare 
                            la carapigna nell’ultima fase della lavorazione. Viene anche utilizzato, durante 
                            la preparazione de su bagnu, ogni qual volta sia necessario mescolare o rimestare 
                            il preparato. 
                        </p>

                    </div>
                    <!-- End About Project -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Section 4 -->

    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->


    <!-- Split Section 1 -->
    <section class="split-section bg-gray-lighter">
        <div class="clearfix relative">
            
            <!-- Section Headings -->
            <div class="split-section-wrapper split-section-content bg-gray-lighter left">
                <div class="ssh-table">
                    <div class="ssh-cell page-section" >
                        <div class="text align-center">
                            <h2 class="font-alt mt-0 mb-50 mb-xxs-20">Su Bagnu</h2>

                            <p class="mb-50 mb-xxs-20">
                                La catena produttiva de Sa Carapigna ha inizio con la preparazione de “su bagnu”, 
                                una soluzione di acqua, zucchero e limone, ottenuta secondo una ricetta tramandata 
                                da generazioni. Su bagnu viene versato all’interno de “sa carapignera” che viene 
                                a sua volta inserita all’interno de “su barrile”.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Headings -->
            
            <!-- Section Headings -->
            <div class="split-section-headings right">
                <div class="ssh-table">
                    <div class="ssh-cell page-section bg-scroll" data-background="images/preparazione/bagnu-limoni.jpg" style="height: 400px"></div>
                </div>
            </div>
            <!-- End Section Headings -->

        </div>
    </section>
    <!-- End Call Action Section -->


    <!-- Split Section 2 -->
    <section class="split-section bg-gray-lighter">
        <div class="clearfix relative">

            <!-- Section Headings -->
            <div class="split-section-wrapper split-section-content bg-gray-lighter right">
                <div class="ssh-table">
                    <div class="ssh-cell page-section" >
                        <div class="text align-center">
                            <h2 class="font-alt mt-0 mb-50 mb-xxs-20">Ghiaccio e Sale</h2>

                            <p class="mb-50 mb-xxs-20">
                                L’intercapedine formata tra sa carapignera e su barrile viene riempita 
                                di ghiaccio e sale che non sono ingredienti, ma vengono utilizzati 
                                esclusivamente per la refrigerazione. Il sale permette un abbassamento 
                                della temperatura di fusione del ghiaccio portando la miscela al raggiungimento 
                                di temperature negative che in condizioni ottimali possono attivare a –20°C. 
                                La rotazione de sa carapignera garantisce un rapido scambio termico tra la 
                                miscela ghiaccio-sale e la limonata, permettendone cosi il congelamento.
                            </p>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Headings -->
            
            <!-- Section Headings -->
            <div class="split-section-headings left">
                <div class="ssh-table">
                    <div class="ssh-cell page-section bg-scroll" data-background="images/preparazione/ghiaccio-sale.jpg" style="height: 400px"></div>
                </div>
            </div>
            <!-- End Section Headings -->

        </div>
    </section>
    <!-- End Split Section -->


    <!-- Split Section 3 -->
    <section class="split-section bg-gray-lighter">
        <div class="clearfix relative">
            
            <!-- Section Headings -->
            <div class="split-section-wrapper split-section-content bg-gray-lighter left">
                <div class="ssh-table">
                    <div class="ssh-cell page-section" >
                        <div class="text align-center">
                            <h2 class="font-alt mt-0 mb-50 mb-xxs-20">La Mantecazione</h2>

                            <p class="mb-50 mb-xxs-20">
                                Il prodotto viene successivamente lavorato con “su ferru ‘e ferru” e “su ferru ‘e 
                                linna” al fine di amalgamare, sminuzzare e garantire al prodotto finito una 
                                consistenza simile a quella della neve fresca.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Headings -->
            
            <!-- Section Headings -->
            <div class="split-section-headings right">
                <div class="ssh-table">
                    <div class="ssh-cell page-section bg-scroll" data-background="images/preparazione/lavorazione-mantecazione.jpg" style="height: 400px"></div>
                </div>
            </div>
            <!-- End Section Headings -->

        </div>
    </section>
    <!-- End Call Action Section -->
@endsection