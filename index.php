<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>inicio</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">
		<link rel="stylesheet" href="sweetalert.css">
    <link rel="stylesheet" href="jquery.toast.css">
		<script src="https://use.fontawesome.com/1cf2aae13c.js"></script>
	</head>
	<body>
		<header id="container">
			<h1 class="text-center animar">Registro</h1>		
		</header>

<div class="container">	
<div class="row">
<div class="col-lg-12">
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i> AGREGAR NUEVO REGISTRO</button>
</div>
</div>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ingresa un nuevo producto</h4>
      </div>
      <div class="modal-body">
      <form id="form">
  <div class="form-group">
    <label for="producto"><i class="fa fa-check" aria-hidden="true"></i> Producto</label>
    <input type="text" class="form-control" name="producto" id="producto" placeholder="Producto" required autocomplete="off">
  </div>
  <div class="form-group">
    <label for="stock"><i class="fa fa-check" aria-hidden="true"></i> Stock</label>
    <input type="text" class="form-control" name="stock"  id="stock" placeholder="Stock" required autocomplete="off">
  </div>
   <div class="form-group">
    <label for="precio"><i class="fa fa-check" aria-hidden="true"></i> Precio</label>
    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required autocomplete="off">
  </div>
  <button type="submit" id="boton" class="btn btn-primary">Registrar</button>	
</form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
 </div>
</div>
<!--  tabla   -->
              <br>
			<div class="container">	
              <table class="table table-bordered table-hover table-responsive" id="cuerpo">
              	<thead>
              	<tr>
              		<th class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Producto</th>
              		<th class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Precio</th>
              		<th class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Stock</th>
                  <th class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Imagen Estatica</th>
              		<th class="text-center" colspan="2"><i class="fa fa-check" aria-hidden="true"></i> Accion</th>
              	</tr>
              	</thead>
              	<tbody>
              		
              	</tbody>		
              	</table>
      </div>


<!--modal para editar-->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title">Edite:</h4>
        </div>
      <div class="modal-body">
      <form id="formProducto">
         <div class="form-group">
           <input type="text" id="idproducto" name="idproducto" class="form-control" readonly>
          </div> 
          <div class="form-group">
          <label for="sugerenciaReporte">Producto:</label>
          <input type="text" id="nombre" name="nombre" class="form-control">
          </div>
            <div class="form-group">
          <label for="precio2">Precio:</label>
          <input type="text" id="precio2" name="precio2" class="form-control">
          </div>
            <div class="form-group">
          <label for="stock2">Stock:</label>
          <input type="text" id="stock2" name="stock2" class="form-control">
          </div>
          <button type="submit" class="update-btn btn btn-primary" >Actualizar</button>
         
       </form>
      </div>
  </div>
</div>
</div>
			
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="push.js"></script>
		<script src="sweetalert.min.js"></script>
    <script src="jquery.toast.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>
