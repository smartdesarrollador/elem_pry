var App = angular.module('TestApp', []);

// for minified use App.controller("NameCtrl",['$scope',function(scope){}]);
App.controller("NameCtrl", function($scope) {

  // Default values for inputs
  $scope.firstname = "Jason";
  $scope.lastname = "Doe";
  //$scope.enteredName = $scope.firstname + ' ' + $scope.lastname 

  // For repeat ng-repeat
  $scope.names = ['Jay', 'Jhon', 'Jake', 'Clark'];

  //add function
  $scope.addName = function() {
    /*$scope.$watch('enteredName', function(newValue, oldValue){
				alert('New: '+newValue);
			});*/
    $scope.names.push($scope.enteredName);
    $scope.enteredName = '';
  }

  // remove name from array names
  $scope.removeName = function(name) {
    var i = $scope.names.indexOf(name);
    $scope.names.splice(i);
  }
});

App.controller("CountryCtrl", function($scope) {

  // Countries json
  $scope.countries = [{
    code: "US",
    name: "United States",
    population: 462893467
  }, {
    code: "VE",
    name: "Venezuela",
    population: 2893467
  }, {
    code: "IT",
    name: "Rome",
    population: 11293467
  }];
  
  // For filter option on the table
  // note look for reverse method on orderBy filter
  $scope.sortField = 'population';

  // set the default value for option
  $scope.selectedCountry = $scope.countries[0];

  $scope.onSelectCountry = function(selected) {
    var code = selected.code,
      name = selected.name,
      population = selected.population

    alert(code + '-' + name + '-' + population);
  }

});