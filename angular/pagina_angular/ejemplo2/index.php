<!DOCTYPE html>
<html lang="en" ng-app="App" >
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="angular.min.js"></script>
    <script type="" src="controller.js"></script>
</head>
<body ng-controller="miControlador">

<div class="container">
  <div class="row well">
    <div class="col-md-8">

           

<label>completar</label>
<input type="number" class="form-control" ng-model="valor1" >
<input type="number" class="form-control" ng-model="valor2">
<button ng-click="sumar()">sumar</button>
<input type="number" class="form-control" ng-model="resultado" value="{{ suma }}">
<h1 ng-if="suma<=10"><span style="color:red">{{ suma }}</span></h1>
<h1 ng-if="suma>=10"><span style="color:blue">{{ suma }}</span></h1>
            


    </div>
    
  </div>
</div>

</body>
</html>
