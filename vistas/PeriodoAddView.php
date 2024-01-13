<?php 
    include_once("../controladores/PeriodoController.php");
    $periodoControllerObj = new PeriodoController();
    if(isset($_POST['enviar'])){
        $response= $periodoControllerObj->addNewPeriodo($_POST['NombrePeriodo']);
        if($response)
        {
            echo "registro exitoso";
        } else{
            echo "Error al registrar, consultar al administrador";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Periodo Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0"> 

	<p>
	<div> 
    <h3> Registrar Periodo</h3>

	<form action="" method="POST"  >
    <div class="mb-3">
        <label for="exampleInputEmail1" 
            class="form-label">
            Nombre Periodo
        </label>
        <input 
            type="text" 
            class="form-control" 
            name="NombrePeriodo" 
            aria-describedby="emailHelp">
    </div>

    <button 
        type="submit" 
        class="btn btn-primary" 
        name="enviar" 
        value="Crear">
        Registrar
    </button>
 	</form>
	</div>
</body>    
</html>