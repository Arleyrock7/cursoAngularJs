<!DOCTYPE html>
<html ng-app>
<head>
	<meta charset="utf-8">
	<title>Modelo en Scope</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>


<body ng-controller="AlumnosController">
	<div class="container">
		<div class="row">						
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
				<div class="row">						
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h1>Cuaderno Alumnos</h1>
						<div class="wrapper">
						<div>
						<!--Creamos la directiva ng repeat para mostrar lista de items de nuestra colección-->
						<!--El filtro predeterminado orderBy sirve para organizar las listas, podemos crear los nuestros -->
								<div class="contact-item" ng-repeat="alumno in listaAlumnosScript | orderBy:'nombre'">
									<div id="principal-dates">{{alumno.nombre}} - {{alumno.telefono}}</div>
									<span id="secundary-dates">{{alumno.curso}}</span>
									<hr>
								</div>
						
								<br>
				<!-- Usamos ng-click="ShowForm()" Y ng-show="formVisibility" para mostrar y ocultar el formulario de registro de alumnos dando click al boton -->
								<center><button ng-click="ShowForm()" ng-hide="formVisibility">Añadir contactos</button></center>

								<!--AGREGAR ALUMNOS*******************************************-->						
									<hr>
									<h1>Añadir un contacto</h1>
							<div ng-show="formVisibility" class="wrapper">
									Nombre:<br> 
										<input type="text" ng-model="nuevoAlumno.nombre"></input><br>	
									Telefono:<br> 
										<input type="text" ng-model="nuevoAlumno.telefono"></input><br>
									Curso:<br> 
										<input type="text" ng-model="nuevoAlumno.curso"></input><br>
									<hr>
										<button ng-click="Save()">Guardar</button>
							</div>
								<!--END AGREGAR ALUMNOS*******************************************-->		
						</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					</div>	
				</div>

			</div>			
		</div>
	</div>
<!--
	NOTA: Podemos construir nuestras propias directivas
-->
 
	<script src="js/angular.min.js" type="text/javascript"></script>
	<script src="js/script_1.js" type="text/javascript"></script>
</body>
</html>