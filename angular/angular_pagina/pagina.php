<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 



</head>
<body >



<div class="container"  >
	<div class="row well">
		<div class="col-md-12">
				

<div ng-app="TestApp">
  <h1>Name Controller</h1>
  <div ng-controller="NameCtrl">
<!--    <h3>Inputs</h3>
    <input type="text" ng-model="firstname" />
    <input type="text" ng-model="lastname" />

    <br /> FirstName: {{firstname}}
    <br /> Lasname: {{lastname}}-->
    <form ng-submit="addName()">
      <h3>Add Name from Controller</h3>
      <input name="firstname" ng-model="firstname" required/>
      <input ng-model="lastname" />
      
      <h3>Add to list</h3>
      <input ng-model="enteredName" required/>
      <input type="submit" value="add" ng-disabled="form.name.$invalid" />

    </form>
    
    <h3>List of Names</h3>
    <ul>
      <li ng-repeat="name in names">{{name}} -
        <a href="" ng-click="removeName(name)">remove</a>
      </li>
    </ul>
    
  </div>
  <hr />
  <!-- Country Controller -->
  <h1>Country Controller</h1>
  <div ng-controller="CountryCtrl">
    <h3>Country List</h3>
    <ul>
      <li ng-repeat="country in countries"> {{country.name}} - {{country.population}} </li>
    </ul>

    <h3>Country Table</h3>
<!--    Add search filter to the table-->
    Search <input ng-model="query" />
<!--    end-->
    <table>
      <tr>
        <th><a href="" ng-click="sortField = 'name'">Country Name</a></th>
        <th><a href="" ng-click="sortField = 'population'">Population</a></th>
      </tr>
      <tr ng-repeat="country in countries | filter:query | orderBy:sortField">
        <td>{{country.name}}</td>
        <td>{{country.population}}</td>
      </tr>
    </table>


    <h3>Country Combo</h3>
    <select ng-model="selectedCountry" ng-options="country.name for country in countries" ng-change="onSelectCountry(selectedCountry)">
    </select>


  </div>
  
<!-- Http Request 
  look $http at Angular js when you use minified is better to use 
  this code in the function :
    instead App.controller("CountryCtrl", function($scope)
    use App.controller("CountryCtrl", ['$scope',function(scope){}])
-->
  
</div>
                  
               

		</div>
	</div>

	
	
</div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/angular.js"></script>
<script src="js/controlador.js"></script>

</body>
</html>
