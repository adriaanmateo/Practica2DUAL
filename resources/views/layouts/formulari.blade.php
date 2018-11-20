<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulari</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
 
    .btn-ttc {
        color: white;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        background-color: #9B1401;
    }

    </style>
	</head>
	<body style="background: #FFCECE;text-align:center">
		<div class="title" style="color: #C21902 ;margin-bottom: 30px;font-size : 84px" >
			Calculador de Biorritmes
		</div>
		<div class="texto" style="padding: 2%; text-align: justify; border: 1px solid #9B1401; border-radius: 20px; margin: 2%">   <!-- Porcentage = responsive -->
			<p> Els bioritmes (del grec bios, vida i rhythmos, cadència) denota la variació en la funció i en alguns dels elements estructurals d’un organisme que es dóna de forma periòdica i predictible.

			Els bioritmes són presents en tots els organismes pluricel·lulars. Els bioritmes més generalitzats són els anomenats circadiaris (circadiari),lligats a l'exposició de la llum (alternança dia/nit). Es distingeixen dos tipus de bioritmes, de cicle inferior (batec del cor, moviments respiratoris) i superior (variacions estacionals, amb la consegüent caiguda de les fulles en els arbres caducifolis, letargia d’alguns animals, reproducció, etc.).

			En els animals (i, per extensió, en els humans), els bioritmes es reflecteixen sobretot en el sistema endocrí.

			D’entre els bioritmes més característics en l’espècie humana cal esmentar el son i la menstruació. La interrupció o la interferència en els bioritmes pot pot produir conseqüències de tipus patològic en l’organisme. </p>
		</div>
        <div>
            <form action="login.php" method="get">
    		  <div class="formulario" style=" text-align:center; display: flex; margin-left: 32%">
    				<p style="margin-right: 2%">Nom: <input type="text" placeholder="Nom" name="nom"><p/>
    				<p>Data de naixement: <input type="Date" name="data"/></p>  			
    		  </div>
              <br>
                <div class="button1" style="text-align:center;">
                    <button type="submit" class="btn btn-ttc">Registrar-me</button>
                </div>
            </form>
        </div>
	</body>
</html>
