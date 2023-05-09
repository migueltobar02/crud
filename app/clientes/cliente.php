<?php

session_start();
if(!isset($_SESSION['Usuario'])){

    echo '
        <script>
            alert("Por Favor debe iniciar sesion");
            window.location= "../../index.php";
        </script>
    ';
    session_destroy();
    die();
};

?>

<?php
//SELECT id,Nombre, Apellido, Cedula, Email, Telefono FROM cliente
require_once('../config/Db_conect.php');
$conect = conectar();

$sql = "SELECT id,Nombre, Apellido, Cedula, Email, Telefono FROM cliente WHERE Estado = 0 ";
$result = $conect->query($sql);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">

    
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    
    <title>Clientes</title>
    <style>
        body{
            background: #d7d7d7;
        }
        #Opciones{
            border-radius: 8px;
            background-color: #c0c0c0;
           
        }
        #Tablaclient{
            
            background-color: #d7d7d7;
            border-radius: 10px;
            border-color: red;
           
        }
        #example_paginate{
            margin: 10px;
        }
        #example_info, #example_length ,#example_filter{
            color: black; 
        }
        
         #example{
            box-shadow: 2px 2px 5px 5px;
            background-color:  #d7d7d7;
            border-color: black;
            border-radius: 10px;
        }
        table thead{
            background-color:  #cac4b0;
            text-align: center; 
        }
        table tbody{
            color: black;
            text-align: center;
        }
        table tfoot{
            text-align: center;
        }
        @media  (max-width: 415px) {
        #botonR{
          display: flex;
          flex-direction:row;

          
        }
        
      }
       
        

    </style>

  </head>
  <body>
    <div id="Opciones" class="d-flex flex-row-reverse wh-100 p-2 flex-sm-column ">  
            <ul class="nav justify-content-end">
                <li id="Inicio" class=" nav-item ">
                    <a class="nav-link active" aria-current="Inicio" href="#">Inicio</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Opciones</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Compras</a></li>
                    <li><a class="dropdown-item" href="#">Ventas</a></li>
                    <li><a class="dropdown-item" href="#">Productos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="cerrar_session.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        
    </div>
  
    <h1 class="text-center">Clientes</h1>    
    <div id="Tablaclient" class="container">
        <div id="botonR" class="d-flex row justify-content-end px-2 py-2">
            <a  chref="#" class="btn btn-dark col-2" data-bs-toggle="modal" data-bs-target="#NuevoModal"><i class="fa-solid fa-circle-plus"></i> Nuevo registro</a>
        </div>
        <div class="row  mt-2">
           <div class="col-lg-12">
            <table id="example" class="table table-bordered cell-border " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cédula</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acción</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php echo $row['Apellido'] ?></td>
                            <td><?php echo $row['Cedula'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Telefono'] ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal" id-modal-editar="<?= $row['id'];?>"><i class="fa-solid fa-user-pen"></i> Editar</a>
                                <a id="botonEliminar" href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarModal" id-modal-eliminar="<?= $row['id'];?>"><i class="fa-solid fa-trash"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cédula</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acción</th>
                    </tr>
                </tfoot>
            </table>  
         
           </div>
       </div> 
    </div>
    <?php include 'nuevoModal.php'; ?>
    <?php include 'editarModal.php'; ?>
    <?php include 'eliminarModal.php'; ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/js/modalEliminarEditar.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

      
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            lengthMenu: [5, 7, 10, 20, 50, 100, 200, 500]
        });
    } );  
    
    </script>
      
      
  </body>
</html>