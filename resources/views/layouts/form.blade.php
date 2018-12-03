<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Error</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   		<!-- Optional theme -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    	<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFCECE;
                color: #C21902;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                text-align: center;
            }    

            .btn-ttc {
		        color: white;
		        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
		        background-color: #9B1401;
    		} 
        </style>
    </head>
    <body>
       <div class="title" style="color: #C21902 ;margin-bottom: 30px;font-size : 84px" >
			Error
		</div>
		<div class="text" style="color: #C21902 ;margin-bottom: 30px" >
			Hi ha un error en la introducció de les dades !
		</div>
		<div>
            <form action="../layouts/formulari.blade.php" style=" text-align:center; display: flex; margin-left: 32%">
                    <div style="align-content: center; margin-left: 23%">
                        <button type="submit" class="btn btn-ttc" style="text-align:center; margin-top:5px" href="../layouts/formulari.blade.php">Tornar</button>
                    </div>
            </form>
        </div>
    </body>
</html>
