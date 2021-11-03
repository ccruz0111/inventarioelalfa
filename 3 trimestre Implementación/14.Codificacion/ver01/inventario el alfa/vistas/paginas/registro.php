
<div class="d-flex justify-content-center  text-center">
<h3 class="text-center py-3">Registrarse:</h3>

<br>
<form class="p-5 bg-light"  method="post">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<div class ="input-group">
			<div class="input-group-prepend">
				<spam class="input-group-text"><i class="fas fa-user"></i>
				</spam>
			</div>
			<input type="text" class="form-control"  id="nombre" name="registroNombre">
		</div>

		<div class="form-group">

			<label for="email">Correo electrónico :</label>
			<div class ="input-group">
				<div class="input-group-prepend">
					<spam class="input-group-text"><i class="fas fa-envelope"></i>
					</spam>
				</div>

				<input type="email" class="form-control" id="email"name="registroEmail" placeholder="ej:Ccruz@dominio.com"  
				pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$">
			</div>
			<div class="form-group">
				<label for="pwd">Contraseña:</label>
				<div class ="input-group">
				<div class="input-group-prepend">
					<spam class="input-group-text"><i class="fas fa-lock"></i></spam>
				</div>

				<input type="password" class="form-control"  id="pwd"name="registroPassword" >
			</div>

<?php
$registro = ControladorFormularios::ctrRegistro();
if($registro =="ok")
{
	echo '<script> 

        if(window.history.replaceState){
        	window.history.replaceState(null,null,window.location.href);
        }


	</script>';

	echo '<div class="alert alert-success">El usuario ha sido registrado </div>';
}
?>			

<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>

