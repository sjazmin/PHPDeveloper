<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 1</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Assets/css/bootstrap-theme.min.css" rel="stylesheet" />
    <style type="text/css">
    	.form-control.valid{
    		width: 50% !important;
    	}
    </style>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
            <h1>PHP Developer</h1>
        </div>
		<div class="row">
            <div class="col-xs-12">
        	
        	<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="../index.php">Evaluación</a></li>
			  <li class="breadcrumb-item"><a href="../parte1.php">Parte 1</a></li>
			  <li class="active">Ejercicio 1</li>
			</ol>
			<div class="panel panel-default">
                    <div class="panel-heading">Parte 1 - Ejercicio 1</div>
                    <div class="panel-body">
                        <form method="POST" action="">
			            <div class="form-group">
							<label>Ingrese una cadena:</label>
							<input class="form-control valid" type="text" name="valor" />
							</br>
							<input class="btn btn-default" type="submit" name="enviar" value="Enviar" />
							</br>
							</br>
							<?php 
								include_once ("../functions/changeString.php");

								//Valido se ejecutó el botón enviar
								if (isset($_POST['enviar'])) {

									$oCambio = new changeString();
									$nCambio = $oCambio->build($_POST['valor']);

									echo "<p>Resultado: $nCambio</p>"; 
								}
							?>
						</div>
						</form>
                    </div>
                </div>
           
            </div>
		</div>
	</div>

</body>
</html>
