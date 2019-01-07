    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>¿Que estas buscando?</h1>
              
              <?php echo form_open('home/resultados', array()) ?>
                
                <div class="form-group">
                  <input type="text" name="busqueda" class="form-control" placeholder="Buscar por nombre, categoría o palabra clave (de  lo que este en el campo servicios)">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block py-3" value="Buscar">
                </div>
              </form>

            </div>
          </div>
        </div>

      </div>
    </section>