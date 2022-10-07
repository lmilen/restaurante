<?php

    include 'estilos.php';
    $nombreCli = $_POST['nombre'];
    $cedulaCli = $_POST['cedula'];
    $telefonoCli = $_POST['telefono'];
    $direccionCli = $_POST['direccion'];
    $bebida = $_POST['bebida'];
    $comida = $_POST['comida'];


?>
<div class="container" align="center">
    <div class="card" style="width: 35rem;">
      <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Resumen de su pedido</h5>
            <p class="card-text">
                <strong>Cliente: </strong> <?php echo $nombreCli ?> <br>
                <strong>Identificación: </strong> <?php echo  $cedulaCli ?> <br>
                <strong>Dirección: </strong><?php echo $direccionCli ?> <br>
                <strong>Télefono:</strong><?php echo $telefonoCli ?> <br>
                <strong>Bebida:</strong><?php  echo $bebida ?>  <br>
                <strong>Comida: </strong><?php  echo $comida ?>  <br>
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Pagar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estado de Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Pago exitoso
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
</div>

<?php
    //Manejo de archivos
    $file = fopen("pedido.txt","a");
    fwrite($file, $nombreCli.";".$telefonoCli.";".$direccionCli.PHP_EOL);
    fclose($file);
?>
    <br> <br>
    
    <div class="container" align="center">
        <h3> Cargando información de un archivo </h3>
        <?php
            if (!$file = fopen("pedido.txt", "r")){
                echo "No se ha podido abrir el archivo";
            }
            else{
                $file = fopen("pedido.txt", "r");
                while(!feof($file)) {
                    echo fgets($file)."<br>";
                }
                fclose($file);
            }

        ?>
        
    </div>