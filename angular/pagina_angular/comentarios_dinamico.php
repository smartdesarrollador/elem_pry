

    <!doctype html>
    <html ng-app="MyFirstApp">
      <head>
        <script src="js/angular.min.js"></script>
        <script src="js/controller.js"></script>
      </head>
      <body ng-controller="FirstController">
         <input type="text" ng-model="nuevoComentario.comentario"><br>

         <input type="text" ng-model="nuevoComentario.username"><br>

         <button ng-click="agregarComentario()">Agregar comentario</button>

            
            <h3>Comentarios</h3>

            <ul>
               <li ng-repeat="comentario in comentarios">
                    {{comentario.comentario}} - <strong>{{comentario.username}}</strong>
                 
               </li>
            </ul>
      </body>
    </html>