<?php
session_start();
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="misestilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Vista de escritos</title>
</head>
<body>
	<header>
		<h1>Escritos recibidos=1</h1>
		<img src="claro.jfif">
	</header>
<aside>
<button type="button"  onclick= "window.location.href='tabla.php'"  class="btn btn-primary">Ver escritos de hoy</button>
<p></p><p></p><p></p><p></p><p></p>
<button type="button"  onclick= "window.location.href='escritos.php'"  class="btn btn-primary">Crear nuevo escrito</button>
</aside>
<section>
	<select class="form-select" aria-label="Default select example">
  <option selected>Elija( En realidad es un solo mensaje)</option>
  <option value="1"><? echo $_SESSION['nombre']?></option>
</select>
 <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="textArea" class="form-label">Escrito</label>
                    <textarea class="form-control" id="textArea" rows="5" readonly>
                    <?php echo $_SESSION['mostrar'];?>
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>Derechos reservados claro</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>