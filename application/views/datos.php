<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/img/slider-1.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate">
          <h1><?php echo $profesionista['nombre']?> <?php echo $profesionista['a_paterno']?> <?php echo $profesionista['a_materno']?> </h1>
          <p><?php echo $profesionista['profesion']?>  </br><?php echo $profesionista['municipio']?>, <?php echo $profesionista['estado']?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section element-animate">
  <div class="clearfix mb-5 pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center heading-wrap">
            <h2>Detalles del profesionista</h2>
            <span class="back-text">Opiniones</span>
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
                  <th>Opiniones: <?php echo count($valoraciones)?></th>
                </tr> 
                <?php
                  if (count($valoraciones) > 0){
                    foreach ($valoraciones as &$item) {
                        echo "<tr> 
                                <td>COMENTARIO: ".$item['opinion']."<br/>
                                  CALIFICACIÓN: ".$item['puntuacion']." de 5<br/><br/>          
                                </td>         
                              </tr>";
                    }
                  }
                ?>  
              </table>
               <?php 
                if(!$this->session->userdata('s_id_cliente')){
                    echo "¿Deseas dejar un comentario? Por favor  ".anchor('/login', 'Inicia sesión');
                }else{
                  
                    echo '<div class="row">
                          <div class="col-md-12 form-group">
                            <label for="message">Escribe tu opinión: </label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input type="submit" value="Publicar" class="btn btn-primary">
                          </div>
                        </div>';
                }
              ?>         
          </div>
        </form>
      </div>

          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span><?php echo $profesionista['servicios']?></span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span><?php echo $profesionista['tel']?></span></br></span>
                  <span><?php echo $profesionista['cel']?></span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span><?php echo $profesionista['web']?></span>
                </p>
            </div>
          </div>
    </div>
  </div>
</section>
