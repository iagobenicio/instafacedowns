@extends('site')

@section('images', 'active')
    

    @section('conteudo')

        <section class="anun">
            <div class="anuncio">
            </div>
        </section>

        <section id="facebook-content">
            <div class="row content " style="padding: 20px">
                <div class="col-12 ">
                    <form action="">

                        <input id="url" type="text" placeholder="Paste the URL">
                        <a onclick="sendUrlImages()" class="waves-effect waves-light  center-align purple darken-1 btn-down-now">

                            <div id="loader-url" style="display: none">
                                <div class="preloader-wrapper small active ">
                                    <div class="spinner-layer spinner-green-only ">
                                        <div class="circle-clipper left ">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="gap-patch ">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right ">
                                            <div class="circle "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="img-donw" class="img-down center-align">
                                <img style="width: 70px;" src="src/img/Download_alt_font_awesome.svg.png" alt="">
                            </div>

                        </a>
                    </form>
                </div>
            </div>

            </div>
        </section>
        <section class="anun">
            <div class="anuncio">
            </div>
        </section>

    @endsection
