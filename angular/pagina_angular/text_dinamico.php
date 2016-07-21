

    <!doctype html>
    <html ng-app="MyFirstApp">
      <head>
        <script src="js/angular.min.js"></script>
        <script src="js/controller.js"></script>
      </head>
      <body ng-controller="FirstController">
         <input type="text" ng-model="nombre">
            {{"hola " + nombre}}
      </body>
    </html>