<!doctype html>
<html>
<head>
	<meta>
	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="misestilos.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body>

		<header>
			<h1>Bienvenidos</h1>
			<img src="claro.jfif">
		</header>
		<nav>
			<li>
				<a href="iniciar.php">Iniciar sesion</a>
				<a href="principal.php">Inicio</a>
			<li>
		</nav>
		<section>
			  <label for="texto" class="form-label">Ingrese el escrito</label>
  				<textarea class="form-control" id="texto" name="texto" rows="6" placeholder="Crear escrito"></textarea>
  				<p></p>
  				<select class="form-select" aria-label="Elija una " id="opcion" name="opcion">
  				<option selected>Elija una opcion</option>
  				<option value="Rodrigo">Rodrigo</option>
 				<option value="Manuel">Manuel</option>
  				<option value="Pedro">Pedro</option>
				</select>
				<p></p><p></p>
				<button type="button" class="btn btn-primary btn-lg" id="boton" name="boton">Enviar escrito</button>
		</section>
		<footer>
			<p>Derechos reservados Claro</p>
		</footer>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


<script>	
	$(document).ready(function(){
		
		$('#boton').click(function(){
			let texto=$('#texto').val();
			let opcion=$('#opcion').val();

			$.post('limpiar.php',{texto:texto,opcion:opcion},function(data){
			if(data === "datos enviados"){
				alert("Datos enviados");
			}
			else{
				alert("Datos no enviados");
			}
		});

	});
	});
</script>