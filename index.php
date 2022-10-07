<!DOCTYPE html>
<html>

<head>
    <?php
        include 'estilos.php';
    ?>
</head>
<body>
     <div class="container">
    <div class="row justify-content-start">
   
            <div class="col-12" align="center">
                <h1> RESTAURANTE EL BUEN SABOR</h1>
            </div>

            <div class="border border-primary">
                 <form action="Registro.php"method="POST">
                
                        <h2> Datos cliente </h2>
                     <div class="row justify-content-start">
                        <div class="col-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" 
                        name="nombre" aria-describedby="emailHelp">
                        </div>

                        <div class="col-5">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" id="cedula" name="cedula">
                        </div>
                     </div>
                        <div class="row justify-content-start">
                    <div class="col-6">
                            <h6> Comida </h6>
                            <select class="form-select" aria-label="Default select example" name="comida"> 
                                <option value="" disabled selected>Escoja la opción de comida</option>
                                <option value="Hamburguesa" id="hamburguesa">Hamburguesa</option>
                                <option value="Perro Caliente" id="perro">Perro caliente</option>
                                <option value="Helado" id="helado">Helado</option>
                                <option value="Pollo" id="pollo">Pollo</option>
                                <option value="Chuleta" id="chuleta">Chuleta de cerdo</option>
                            </select>
                        </div>

                        <div class="col-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" aria-describedby="emailHelp">
                        </div>
                    </div>
                     <br>
                    <div align="center">
                        <br>
                        <input class="btn btn-primary" type="submit" value="Enviar">
                        <input class="btn btn-secondary" type="reset" value="Limpiar">
                        <input type="submit" value="Registrar" name="btnRegistrar">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>