<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bioritmos</title>

        <!-- Fonts -->
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e6ffee;
                color: #636b6f;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            p {
                margin: auto;
                width: 50%;
                border: 3px solid green;
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
                    <a href="https://es.wikipedia.org/wiki/Biorritmo">¿Que son?</a>
                    <a href="https://es.wikipedia.org/wiki/Biorritmo#Historia">Historia</a>
                    <a href="https://es.wikipedia.org/wiki/Biorritmo#Publicaciones_cient%C3%ADficas">Noticies</a>
                </div>

                <div>
                    <h3>Biorritmes</h3>
                    <p>
                    La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
                    animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes
                    biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha
                    comprobado estadísticamente que la energía física se comporta cíclicamente en
                    periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en
                    33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en
                    una fase positiva, durante la cual las energías y las capacidades son altas
                    </p>
                </div>
                <br/><br/>
            </div>
            <div>
                    <?php echo $__env->yieldContent('header'); ?>
            </div>
            <div>
                    <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>
