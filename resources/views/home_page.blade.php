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
    <link rel="stylesheet" href="css/main.css">

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
    <section id="home-content">
        <div class="row">

            <div class="col s12 l6  m6">
                <h1>
                    Download videos and photos from <b>Facebook</b> or <b>Instagram</b> quickly and easily!
                </h1>
                <div class="socialbox">
                    <a class="waves-effect waves-light btn download-app">DOWNLOAD ANDROID</a><span class="down-icon"><i class="fa fa-android" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="col s12 l6  m6">
                <img class="img-demo" height="410" src="src/img/demo-ilustration.png" alt="">
                <div class="row btn-down">
                    <div class="socialbox col s12">
                        <a class="waves-effect waves-light btn facebook  ">FACEBOOK</a><span><i class="fa fa-facebook" aria-hidden="true"></i></span>

                    </div>
                    <div class="socialbox col s12">
                        <a class="waves-effect waves-light btn instagram  ">INSTAGRAM</a><span class="instagram-icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>

                    </div>
                </div>
            </div>

        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>

</html>