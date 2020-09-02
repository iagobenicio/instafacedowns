
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-4965592854730646" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <title >@yield('titulo')</title>
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
    <script data-ad-client="ca-pub-4965592854730646" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>
    <nav class="z-depth-0">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img class="logo-breand" src="src/img/breand.png" alt="Logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class=@yield('home')><a href="/">HOME</a></li>
                <li class=@yield('facebook')><a href="/facebook-donwload">FACEBOOK</a></li>
                <li class=@yield('insatgram')><a href="/instagram-donwload">INSTAGRAM</a></li>
                <li class=@yield('images')><a href="/images-donwload">DONWLOAD IMAGES</a></li>
                <li class=@yield('howToUse')><a href="/how-to-use">HOW TO USE</a></li>
                <li class=@yield('help')><a href="/help">HELP</a></li>
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