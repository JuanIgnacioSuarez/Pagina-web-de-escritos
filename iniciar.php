<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="misestilos.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	 <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-auth.js"></script>
    <script>      
        // Configuración de Firebase
        var firebaseConfig = {
            apiKey: "AIzaSyD68aXtauXTrw_b9q32WIINp1uHAAq9Tg0",
            authDomain: "juansuarez-108c5.firebaseapp.com",
            projectId: "juansuarez-108c5",
            storageBucket: "juansuarez-108c5.appspot.com",
            messagingSenderId: "236664379371",
            appId: "1:236664379371:web:0f521fde4c8a1d8bf16bae",
            measurementId: "G-XMKY95HSKT"
        };
        // Inicializar Firebase
   		 firebase.initializeApp(firebaseConfig);
        firebase.analytics();  
</script>
	<title>Inicio de sesion</title>
</head>
<body>



	<header>
		<h1>Inicie sesion para continuar</h1>
		<img src="claro.jfif">
	</header>



	<nav>
		<ul><li>
		<a href="inicio.php">Inicio</a>
		<a href="escritos.php">Volver a escritos</a>
	</li></ul>
	</nav>



	<section>
		<article> 
		<label for="exampleFormControlInput1" class="form-label">Correo</label>
  		<input type="email" class="form-control" name="email" id="email" placeholder="Ingrese correo">
		</article>
		<article>
			<div class="row g-3 align-items-center">
  		<div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Contraseña</label>
  		</div>
 	 <div class="col-auto">
    <input type="password" id="contra" name="contra" class="form-control" aria-describedby="passwordHelpInline">
  	</div>
  	<div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Debe ser entre 8 y 20 caracteres de largo
    </span>
 	 </div>
		</div>
		</article>
		<article>
			<div class="row g-3 align-items-center">
  		<div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Captcha</label>
  		</div>
 	 <div class="col-auto">
    <input type="text" id="captcha" name="captcha" class="form-control" aria-describedby="passwordHelpInline">
  	</div>
  	<div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Cuidado con las mayusculas
    </span>
		</article>
		<article>
			<img src="captcha.php">
		</article>
		<article>
			<button type="button" id="registrar" name="registrar" class="btn btn-primary">Enviar</button>
		</article>
	</section>




	<footer>
		Derechos reservados a claro
	</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<script>
	$(document).ready(function(){

		$('#registrar').click(function(){
			let email=$('#email').val();
			let contra=$('#contra').val();
			let captcha=$('#captcha').val();

			$.post('auxiliar.php',{email:email,contra:contra,captcha:captcha},function(data){
				if(data === "captcha correcto"){
					firebase.auth().signInWithEmailAndPassword(email,contra)
				.then((userCredential) =>{
					alert("Datos correctos");
					window.location.href='mostrar.php';
				})
				.catch((error)=>{
					console.log(error.code);
					alert("Error de autenticacion , por favor verifique los datos");
				});
			}
			else{
				alert("Captcha incorrecto , intente de nuevo");
			}
			}); 
		});
	});
</script>