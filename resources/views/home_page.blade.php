@extends('site')

@section('conteudo')

@section('home','active ')
@section('titulo','DONWSINSATFACE - HOME ')
    
    <section id="home-content">
        <div class="row">

            <div class="col s12 l6  m6">
                <h1>
                    Download videos and photos from <b>Facebook</b> or <b>Instagram</b> quickly and easily!
                </h1>
                <div class="socialbox">
                    <a onclick="M.toast({html: 'Disponível em breve!', classes: ' purple darken-4'})" class="waves-effect waves-light btn download-app">DOWNLOAD ANDROID</a><span class="down-icon"><i class="fa fa-android" aria-hidden="true"></i></span>
                    
                </div>
            </div>
            <div class="col s12 l6  m6">
                <img class="img-demo" height="410" src="src/img/demo-ilustration.png" alt="">
                <div class="row btn-down">
                    <div class="socialbox col s12">
                        <a href="/facebook-donwload" class="waves-effect waves-light btn facebook  ">FACEBOOK</a><span><i class="fa fa-facebook" aria-hidden="true"></i></span>

                    </div>
                    <div class="socialbox col s12">
                        <a href="instagram-donwload" class="waves-effect waves-light btn instagram  ">INSTAGRAM</a><span class="instagram-icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>

                    </div>
                </div>
            </div>

        </div>
    </section>
</body>
@endsection