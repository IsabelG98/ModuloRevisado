<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'encabezado.html'; ?>
<br>
<br>
<br>
<div class="container">
  <h2>Registrarte en Deli Rapid</h2>
  <form class="form-horizontal" action="registroUsu.php" method="post">

  <div class="form-group">
      <label class="control-label col-sm-2">Correo</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Ingresa un tu correo" name="correo">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Nombre:</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Ingresa tu nombre" name="nombre">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Apellidos</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" placeholder="Ingresa tus apellidos" name="apellidos">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2">Telefono</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" placeholder="Ingresa tu numero telefonico" name="telefono">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control"placeholder="Enter password" name="pwd">
      </div>
    </div>


    

   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success ">Guardar componente</button>
      </div>
    </div>

  
  </form>
</div>

</body>
</html>
