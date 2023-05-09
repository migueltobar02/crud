
<div class="modal fade" id="EliminarModal" tabindex="-1" aria-labelledby="EliminarModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-sm-12">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5 " id="EliminarModalLabel"> Aviso</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Deseas eliminar el Registro?
      </div>
      <div class="modal-footer ">
          <form action="eliminar.php" method="post" >
            <input type="hidden" id="id" name="id">
            
                <div id="BotonesRegistro" class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="button" class="btn btn-secondary col-12" data-bs-dismiss="modal">Cerrar</button>
                  <button id="ButonEliminar" type="submit" class=" btn btn-primary col-12 " > Eliminar</button>
                </div>   
          </form>  
      </div>
    </div>
  </div>
</div>