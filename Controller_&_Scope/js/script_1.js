/*Definimos el Controller y le pasamos como parametro $scope*/
function AlumnosController($scope){
/*Creamos el modelo alumnos con los atributos: nombre, telefono y curso*/
	$scope.listaAlumnosScript=[
		{nombre: "Juan Blanco", telefono: "1234567890", curso:"Segundo ESO"},
		{nombre:"Rosa Luxemburgo", telefono:"0987654321", curso:"Primero ESO"},
		{nombre:"Alberto Herrera", telefono:"1122334455", curso:"Segundo ESO"},
		{nombre:"Ana Mariño", telefono:"5544332211", curso:"Tercero ESO"}
	];
	$scope.Save=function(){
		$scope.listaAlumnosScript.push({
			nombre:$scope.nuevoAlumno.nombre, 
			telefono:$scope.nuevoAlumno.telefono, 
			curso:$scope.nuevoAlumno.curso
		})	
	}


}