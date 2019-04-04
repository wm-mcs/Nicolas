 <section class="BackgroundGris padding-secion-custom" id="precios">
     
          <div class="get_width_100 flex-row-column text-center">
            <h2 class="section-heading ">Catalogo</h2>
            <br>
            <br>
            <hr class="my-4">
            <p class="color-text-gris mb-4"> Estas son las novedades 
            </p>

               @foreach($ProductosNuevos as $Entidad)
    
                 @include('paginas.productos.producto_individual_tipo_cuadro')   

               @endforeach


         
          </div>
      
    </section>