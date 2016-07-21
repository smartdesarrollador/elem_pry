
    <!doctype html>
    <html >
      <head>
        <script src="js/angular.min.js"></script>

        <style>

input[type=number]::-webkit-outer-spin-button,

input[type=number]::-webkit-inner-spin-button {

    -webkit-appearance: none;

    margin: 0;

}

 

input[type=number] {

    -moz-appearance:textfield;

}

</style>
        
      </head>
      <body >
         <div ng-app="myApp" ng-controller="myCtrl">

        <p><input type="number" ng-model="valor1"></p>
        <p><input type="number" ng-model="valor2"></p>

<button ng-click="result()">Click Me!</button>

<p>{{ count }}</p>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {

    $scope.valor1 = 1;
    $scope.valor2 = 4;
$scope.result = function() {
    $scope.count = $scope.valor1 + $scope.valor2;
  }
});
</script> 
      </body>
    </html>