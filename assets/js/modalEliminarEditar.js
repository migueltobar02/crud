let editaModal = document.getElementById("editarModal");
let EliminaModal = document.getElementById("EliminarModal");



/* editar*/

editaModal.addEventListener('shown.bs.modal', Event =>{
    let button = Event.relatedTarget
    let id = button.getAttribute('id-modal-editar')

    let imputId = editaModal.querySelector('.modal-body  #id')
    let inputNombre = editaModal.querySelector('.modal-body #InputNombre')
    let inputApellido = editaModal.querySelector('.modal-body #InputApellido')
    let inputCedula = editaModal.querySelector('.modal-body #InputCedula')
    let inputEmail = editaModal.querySelector('.modal-body #InputEmail')
    let inputTelefono = editaModal.querySelector('.modal-body #InputTelefono')


    let url = "getCliente.php"

    let formData = new FormData()
    formData.append('id', id)

    fetch(url,{
        method: 'POST',
        body: formData
    }).then(response => response.json())
    
    .then(data =>{
        imputId.value = data.id
        inputNombre.value = data.Nombre
        inputApellido.value = data.Apellido
        inputCedula.value = data.Cedula
        inputEmail.value = data.Email
        inputTelefono.value = data.Telefono

    }).catch(error => console.log(error))

})

/*eliminar*/

EliminaModal.addEventListener('shown.bs.modal', Event =>{

    let button = Event.relatedTarget
    let id = button.getAttribute('id-modal-eliminar')


    EliminaModal.querySelector('.modal-footer #id').value = id


})









