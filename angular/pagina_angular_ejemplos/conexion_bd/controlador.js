var app= angular.module('myApp',[]);
app.controller('control',function($scope,$http){
 
        $scope.actual = {};
        $scope.actuales = [];

         $http.post('getalumnos.php').success(function(data){
              $scope.posts=data;
         });

        $scope.cambio = function(){
        	$http.post('getalumnos.php').success(function(data){
              $scope.posts=data;
         });
        }

         

		 $scope.registrar = function(){
				var url = "inserta.php";
					$http.post(url,{'nombre':$scope.actual.nombre, 'apellido':$scope.actual.apellido}).success(function(data, status, headers, config)
					{
					
					});

		}	


		$scope.eliminar = function(id)
	{
		var url = "delete.php?id=" + id;
		$http.post(url).success(function(data, status, headers, config)
		{
			
			
		});
	}	

	$scope.store = function(id)
	{
		var url = "store.php?id=" + id;
		$http.post(url).success(function(data, status, headers, config)
		{
			$scope.actuales=data;

			$scope.actual.id = $scope.actuales[0].id;
			$scope.actual.nombre = $scope.actuales[0].nombre;
			$scope.actual.apellido = $scope.actuales[0].apellido;
			


		});
	}	
					
					
		$scope.update = function()
	{
		var url = "update.php";
		$http.post(url,{'id':$scope.actual.id, 'nombre':$scope.actual.nombre, 'apellido':$scope.actual.apellido}).success(function(data, status, headers, config)
		{
			console.log(data);
		});
	}				

        
});