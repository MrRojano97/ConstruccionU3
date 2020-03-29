@extends('layouts.app')

@section('content')
    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                <h2>Informacion</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7 sm-margin-b-50">
                <div class="margin-b-30">
                    <p>El genograma es una técnica de evaluación y diagnóstico, para representar gráficamente las principales características e interrelaciones de un grupo familiar a lo largo del tiempo, recibiendo otros nombres como familiograma, árbol genealógico y árbol familiar.</p>
                </div>
                <p>Este tiene su origen a mediados del siglo XX con Murray Bowen y desde entonces ha recibido diferentes adaptaciones, al igual que es utilizado no solamente por psicólogos, sino por todos los profesionales dedicados al ámbito social y de la salud.</p>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <img class="img-responsive" src="https://lamenteesmaravillosa.com/wp-content/uploads/2017/05/genograma-2.jpg" alt="Our Office">
            </div>
        </div>
    </div>

    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <div class="row row-space-1 margin-b-2">
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <img class="img-responsive" src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="service-info">
                                        <h3>Ventajas</h3>
                                        <p class="margin-b-5">1. Presentación de un registro médico sistemático.</p>
                                        <p class="margin-b-5">2. Formato gráfico de lectura fácil.</p>
                                        <p class="margin-b-5">3. Logra identificar pautas generacionales, biomédicas y psicosociales.</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <img class="img-responsive" style="width: 230px;" src="https://sites.google.com/site/mdcluisaperez/_/rsrc/1436159893500/2-3-inconvenientes/publicidad-en-internet-desventajas.png">
                                    </div>
                                    <div class="service-info">
                                        <h3>Limitaciones</h3>
                                        <p class="margin-b-5">1. Falta de colaboración del entrevistado</p>
                                        <p class="margin-b-5">2. El tiempo requerido para su elaboración (20 a 30 minutos en promedio)</p>
                                        <p class="margin-b-5">3. Que solo refleja la situación de un momento determinado.</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <img class="img-responsive grande" src="https://2.bp.blogspot.com/-x0m9oTRP-kA/VHuCkTI-opI/AAAAAAAAFls/jrMwsfRh2Y4/s1600/ventajas-y-desventajas.png">

                                    </div>
                                    <div class="service-info">
                                        <h3>Discrepancias</h3>
                                        <p class="margin-b-5"><p class="margin-b-5"> Como la información obtenida es solo de una persona, lo cual para algunos autores puede distorsionar, consciente o inconscientemente la realidad.</p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

@endsection

@extends('layouts.fother')
