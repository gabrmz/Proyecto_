<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/img/slider-1.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
      	<div class="col-md-8 text-center col-sm-12 element-animate">
      	<h1>Deja opiniones para ayudar a destacar a los buenos profesionistas. </br>¿Te unes?</br>↓</h1>
      	</div>
    </div>
  </div>
</section>

<section class="section element-animate">
  <div class="clearfix mb-5 pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center heading-wrap">
            <h2>Profesionistas registrados</h2>
            <span class="back-text">Catálogo</span>
          </div>
        </div>
      </div>
    </div>
      
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <form action="#" method="post">               
          <div class="row">
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
          </div>
        </form>
      </div>
    </div>
  </div>
</section>