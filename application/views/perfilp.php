<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Ingresó a su perfil</h1>
<?php echo "Usuario: " .$this->session->userdata('s_usuariosp')?>
<form action="<?php echo base_url();?>Profesionistas/actualizarDatos" method="POST">
<table>
	<h3>Actualiza tus datos</h3>
			<tr>
				<td><input type="text" name="txtNombre" placeholder="Tu nombre"></td>
				<td><input type="text" name="txtApPaterno" placeholder="Apellido paterno"></td>
				<td><input type="text" name="txtApMaterno" placeholder="Apellido materno"></td>
			</tr>
			<tr>
				<td><input type="text" name="txtCalle" placeholder="Calle"></td>
				<td><input type="text" name="txtNumInterno" placeholder="Número interior"></td>
				<td><input type="text" name="txtnNumExterno" placeholder="Número exterior"></td>
			</tr>
			<tr>
				<td><input type="text" name="txtColonia" placeholder="Colonia"></td>
			</tr>
			<tr>
				<td><input type="text" name="txtCiudad" placeholder="Ciudad"></td>
				<td><input type="text" name="txtEstado" placeholder="Estado"></td>
			</tr>
			<tr>
				<td><input type="text" name="txtTel" placeholder="Teléfono"></td>
				<td><input type="text" name="txtCel" placeholder="Celular"></td>
			</tr>
			<tr>
				<td><input type="text" name="txtSitio" placeholder="Sitio Web"></td>
			</tr>
			<tr>
				<td><input type="text" name="txtProfesion" placeholder="Tu profesión"></td>
			</tr>
			<tr>
				<td><input type="textarea" name="txtServicio" placeholder="Describe tu servicio"></td>
			</tr>
			<tr>
				<td><input type="email" name="txtCorreo" placeholder="Correo"></td>
				<td><input type="password" name="txtContra" placeholder="Contraseña"></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="Actualizar"></input></td>
			</tr>
		</table>
</form>
</body>
</html>