<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
<h1>Profesionistas registrados</h1>

<table>
	<tr>
		<th>Total de resultados: <?php echo count($resultados)?></th>
	</tr> 
	<?php
		foreach ($resultados as &$item) {
    		echo "<tr> 
					<td>".$item['nombre']." ".$item['a_paterno']." ".$item['a_materno']."<br/>
					".$item['profesion']." en ".$item['municipio'].", ".$item['estado']."<br/>
					Calificación: ".$item['puntuacion']." de 5<br/>
					".anchor('profesionistas/perfil/'.$item['id_profesionista'], 'Ver perfil'.'')."
					</td>					
				  </tr>";
		}
	?>	
</table>
</body>
</html>