
<div class="modal fade" id="NuevoModal" tabindex="-1" aria-labelledby="NuevoModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5 " id="NuevoModalLabel"> AGREGAR REGISTRO</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" >

            <div class="mb-3">
                <label for="InputNombre" class="form-label"> Nombre</label>
                <input type="text" class="form-control" id="InputNombre" name="InputNombre" required placeholder="Ingrese nombres" >
            </div>

            <div class="mb-3">
                <label for="InputApellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="InputApellido" name="InputApellido" placeholder="Ingrese apellidos" required>
            </div>

            <div class="mb-3">
                <label for="InputCedula" class="form-label">Cedula</label>
                <input type="number" class="form-control" id="InputCedula" name="InputCedula" placeholder="Example 1006174502" required >
            </div>

            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Example@gmail.com" required >
            </div>

            <div class="mb-3">
                <label for="InputTelefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="InputTelefono" name="InputTelefono" placeholder="3219254703" required >
            </div>
            <input type="hidden" id="valor" name="valor" value="0">

            <div id="BotonesRegistro" class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button id="ButonRegistro" type="submit" class=" btn btn-primary col-12 " ><i class="fa-regular fa-floppy-disk"></i> Enviar</button>
            </div>   
            

        </form>  
      </div>
    </div>
  </div>
</div>