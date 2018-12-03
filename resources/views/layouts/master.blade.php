<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biorritmos</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFCECE;
                color: #C21902;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:#C21902;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-left: 10px;
                margin-top:10px;
                margin-bottom: 30px;
                -webkit-animation-name: example;
                -webkit-animation-duration: 4s; 
                animation-name: example;
                animation-duration: 4s;
                animation-iteration-count: infinite;
                }

    @-webkit-keyframes example {
        0%   {color:#911201;}
        25%  {color:#000000;}
        50%  {color:#B81701;}
        75%  {color:#000000;}
        100% {color:#F21F02;}
    }
    @keyframes example {
        0%   {color:#911201;}
        25%  {color:#000000;}
        50%  {color:#B81701;}
        75%  {color:#000000;}
        100% {color:#F21F02;}
    }
            
            p {
                margin: auto;
                width: 50%;
                border: 3px solid #C21902;
                padding: 10px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="content">
                <div class="title m-b-md">
                    Calculador de Biorritmes
                </div>
                <div class="links">
                    <a href="https://es.wikipedia.org/wiki/Biorritmo">¿Què són?</a>
                    <a href="formulari.blade.php">Registrar-me</a>
                    <a href="https://es.wikipedia.org/wiki/Biorritmo#Publicaciones_cient%C3%ADficas">Noticies</a>
                </div>
                <br/>
                <div>
                    <p>
                    Aquesta pàgina serveix per calcular el biorritme d'una persona a partir de la seva data de naixement.
                    </p>
                    <br/><br/>
                    <p>
                    <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/panel-120472594-image-3c37067ef9f3e67f-320-320.png" width="20%" height="20%" />
                    Adrian Mateo - Alumne de 2n de DAM al Santa Anna Mataró.
                    </p>
                    <br/>
                    <p>
                    <img src="https://pbs.twimg.com/profile_images/725055056714842114/Go4Xgk3x_400x400.jpg" width="20%" height="20%" />
                    Adrià Mestres - Alumne de 2n de DAM al Santa Anna Mataró.
                    </p>
                </div>          
        </div>
    </body>
</html>
