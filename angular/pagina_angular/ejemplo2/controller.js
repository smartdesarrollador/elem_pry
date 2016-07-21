var App = angular.module('App', []);

// for minified use App.controller("NameCtrl",['$scope',function(scope){}]);
App.controller('miControlador', function($scope){
   $scope.valor1 = 0;
   $scope.valor2 = 0;

   $scope.sumar = function(){
   	 $scope.suma = $scope.valor1 + $scope.valor2;
   }
 
});
