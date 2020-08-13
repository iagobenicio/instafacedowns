<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DownInstaFace</title>
    <!--  CSS MATERIALIZE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- LINK GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;900&display=swap" rel="stylesheet">
    <!--font-family: 'Noto Sans JP', sans-serif;-->

    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--CSS MAIN FILE-->
    <link rel="stylesheet" href={{ asset('css/main.css') }}>

    <!--FONTAWSOMENNES-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="z-depth-0">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img class="logo-breand" src="src/img/breand.png" alt="Logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="">HOME</a></li>
                <li><a href="">FACEBOOK</a></li>
                <li><a href="">INSTAGRAM</a></li>
                <li><a href="">HOW TO USE</a></li>
                <li><a href="">HELP</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="">HOME</a></li>
        <li><a href="">FACEBOOK</a></li>
        <li><a href="">INSTAGRAM</a></li>
        <li><a href="">HOW TO USE</a></li>
        <li><a href="">HELP</a></li>
    </ul>
    <section class="anun">
        <div class="anuncio">
        </div>
    </section>

    <section id="facebook-content" >
        <div class="row content " style="padding: 20px" >
            <div class="col-12 " >
                <form action="" >

                    <input id="url" type="text" placeholder="Paste the URL of the Facebook video">
                    <a onclick="sendUrl()" class="waves-effect waves-light  center-align purple darken-1 btn-down-now">
                        
                        <div id="loader-url" style="display: none" >
                            <div class="preloader-wrapper small active ">
                                <div class="spinner-layer spinner-green-only ">
                                  <div class="circle-clipper left ">
                                    <div class="circle"></div>
                                  </div><div class="gap-patch ">
                                    <div class="circle"></div>
                                  </div><div class="circle-clipper right ">
                                    <div class="circle "></div>
                                  </div>
                                </div>
                              </div>    
                        </div>
                        <div id="img-donw" class="img-down center-align"  >
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
    
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });


    function sendUrl() {
        var url = document.getElementById('url').value;
        console.log(url);

        postUrl = {
            "url": url
        };

        $.ajax({
            type: "POST",
            url: 'http://127.0.0.1:8000/api/down-videos',
            data: postUrl,
            beforeSend : () => {
                $('#img-down').css('display','none');
                $('#loader-url').css('display', 'block')
                $('.btn-down-now').css('padding', '10px');
            },
            success: (success) => {
                window.location.href = success.urlbakc + '&dl=1';
            },

            complete: (response) => {
                
                $('.btn-down-now').css('padding', '0');
                $('#img-down').css('display','block');
                $('#loader-url').css('display', 'none');
                $('input').val(''); 
            },
            error: (e) => {
                console.log(e);
            },
            dataType: 'json'
        });
    }

</script>

</html>
