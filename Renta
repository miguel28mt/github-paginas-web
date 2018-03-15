<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


		<!-- Website CSS style -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Rentas</title>
	</head>
	<body >
	<style>
body {
    background-color: #808080;
}
</style>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5 class="navbar-brand text-white">RENTAS</h5>
					<form class="frm" id="frm" action="actRenta.php" method="get">
						<fielset>
						<div class="form-group">
							<label for="idRenta" class="navbar-brand text-white cols-sm-2 control-label">id</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-number fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="idRenta" id="idRenta"  placeholder="id"/>
								</div>
							</div>
							
						</div>
                    <div class="form-group">
							<label for="folio" class=" navbar-brand text-white cols-sm-2 control-label">Folio de Renta</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa  fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="folio" id="folio"  placeholder="Ingreasa el Folio de Renta"/>
								</div>
							</div>
							
						</div>


                        
						
						<div class="form-group">
							<label for="fecha" class="navbar-brand text-white cols-sm-2 control-label">Fecha</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="fecha" id="fecha"  />
								</div>
							</div>
							
						</div>

						
						
						<div class="form-group">
							<label for="Estado" class="navbar-brand text-white cols-sm-2 control-label">estado</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa  fa" aria-hidden="true"></i></span>
									<select name="Estado" id="Estado" class="form-control col-md-8">
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                     </select>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
                          <label class="navbar-brand text-white col-md-4 control-label" for="idUsu">Usuario</label>  
                          <div class="col-md-8">
                              <?php include_once("cboUsu.php"); ?>    
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="navbar-brand text-white col-md-4 control-label" for="idAuto">Auto</label>  
                          <div class="col-md-8">
                              <?php include_once("cboAuto.php"); ?>    
                         </div>
                        </div>
						

						

						<div class="form-group ">
							<div class="col-md-12 col-md-offset-4">
                   <button  class="btn btn-primary" name="boton" id="boton" value="Agregar">Agregar</button>
                   <button class="btn btn-warning" name="boton" id="boton" value="Actualizar">Actualizar</button>
                   <button  class="btn btn-danger" name="boton" id="boton" value="Borrar">Borrar</button>
                   <button type="button" class="btn btn-danger" name="boton" id="boton" value="Limpiar">Limpiar</button>

                </div>
						</div>
						
						</fielset>
					</form>
				</div>
			</div>
		</div>
         <br>
    <div id="msj" align="center"></div>
    <div id="tabla" aligh="center"></div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    
         <script>
        $("#tabla").load("tablaRenta.php");
        
        $("#tabla").on("click",".selecciona",function(){
            $("#idRenta").val($(this).attr("data-id"));
            $("#folio").val($(this).attr("data-fol"));
            $("#fecha").val($(this).attr("data-fec"));
            $("#Estado").val($(this).attr("data-edo"));
        });
        
        $("button[type=button]").click(function(){
            var boton = $(this).attr("value");
            alert("Diste click en un boton: " + boton);
            if (boton == "Limpiar")
                {
        
            $("#idRenta").val("");
            $("#folio").val("");
            $("#fecha").val("");
            $("#Estado").val("");
            $("#personas").val("");
            $("#precio").val("0");
                    $("#modelo").focus();
                }
            else
                {
                    var parametros = 'idRenta=' + $("#idRenta").val() + 
                        "&folio=" + $("#folio").val() +
                        "&fecha=" + $("#fecha").val() + 
                        "&Estado=" + $("#Estado").val() + 
                        "&personas=" + $("#personas").val() + 
                        "&precio=" + $("#precio").val() + 
                        "&boton=" + bot;
                    $.ajax({
                        url: "actRenta.php",
                        type: "GET",
                        data:parametros,
                        success: function(respuesta){
                           alert(respuesta);
                              
                            
                    }
                    }); ///fin de ajax
                }   ///fin del else del boton limpiar
        });
        
    </script>

	</body>
</html>
