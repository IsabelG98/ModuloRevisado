<?php
include 'encabezado.html';
include('../bd/conec.php');
?>
<?php
if (isset($_POST['detalles'])) {
		switch ($_POST['detalles']) {
			case 'detalles':
				if (is_string($_POST['nombre'])) {
					$NOMBRE=$_POST['nombre'];
					
				}

				if (is_string($_POST['descripcion'])) {
					$DESCRIPCION=$_POST['descripcion'];
					
				}

				if (is_numeric( $_POST['telefono'])) {
					$TELEFONO=$_POST['telefono'];
					
				}

				if (is_string($_POST['correo'])) {
					$CORREO=$_POST['correo'];
					
				}
				if (is_string($_POST['latitud'])) {
					$LATITUD=$_POST['latitud'];
					
				}

				if (is_string($_POST['longitud'])) {
					$LONGITUD=$_POST['longitud'];
					
				}

				if (is_string($_POST['imagen'])) {
					$IMAGEN=$_POST['imagen'];
					
				}
				if (is_string($_POST['tipo'])) {
					$TIPO=$_POST['tipo'];
					
				}

				break;	
				
					
				

				
		}
	}

 ?>

<br>
<br>
<br>
					   
<div class="container">
	<div><img  src="<?php echo $IMAGEN; ?>" alt="Card image" width="150px" height="300px" class="card-img-top" style="width:60%"><div>
          
                  <h4 class="card-title"><?php echo $NOMBRE; ?></h4>
                  <p class="card-text"><li>Descripcion</li><?php echo $DESCRIPCION; ?></p>
                  <h2 class="card-title">tipo de local: <?php echo $TIPO; ?></h2>
                  <!-- Theme Made By www.w3schools.com --><p class="card-text"><li>TELEFONO: </li> <?php echo $TELEFONO; ?></p>
                  <p class="card-text"><li>CORREO: </li> <?php echo $CORREO; ?></p>
                  
                    
                    <form action="mapa.php" method="POST">
                      <input type="hidden" name="latitud" value="<?php echo $LATITUD; ?>">
                      <input type="hidden" name="longitud" value="<?php echo $LONGITUD; ?>">
                        <button class="btn btn-primary" name="envia" value="envia" type="submit">Ver Ubicacion</button>
                    </form>
        
<div>

<?php include('../templates/pie.php');?>