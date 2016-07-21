angular.module("AppCalculadora",[])

.controller("CalculadoraController",function($scope){
   $scope.valor1 = 0;

   $scope.valor2 = 0;

   $scope.showMe = false;

$scope.result = function() {

      $scope.showMe = !$scope.showMe;

        $scope.resultado= 0;
    }
   



   
        
  
});