$(".enter").on("click", function(){
	console.log("Clickado");
	$("#introContainer").addClass(" veArriba ");
	
	$(".llamar").addClass(" left ");
	$(".mapa").addClass(" right ");

	$( "#black" ).queue(function() {
	  $(".historia").delay(1000).animate({"z-index" : "100"}).fadeIn(800);
	  $( this ).dequeue();
	});
});


/*Hamburguesa*/
$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
		$(".menu").toggleClass('open');
	});
});
/*END Hamburguesa*/







/*Angular JS*/
var myApp = angular.module('alberca',['ngRoute']);

myApp.config(['$routeProvider', function($routeProvider){
	$routeProvider
		.when("/", {
			 templateUrl : "wp-content/themes/Alberca/views/intro.html",
			 controller: 'InitialController',
			 activetab: 'intro' //Esta es la clase ke kiero ke tenga en el HTML
		})
		.when("/historia", {
			templateUrl : "wp-content/themes/Alberca/views/historia.html",
			 controller: 'InitialController',
			 activetab: 'historia'
		})
		.when("/habitaciones", {
			templateUrl : "wp-content/themes/Alberca/views/habitaciones.html",
			 controller: 'InitialController',
			 activetab: 'habitaciones'
		})
		.when("/contacto", {
			templateUrl : "wp-content/themes/Alberca/views/contacto.html",
			 controller: 'InitialController',
			 activetab: 'contacto'
		});
}]);

myApp.controller('InitialController', ['$scope', function($scope) {
  $scope.hello = 'Hola!';
  $scope.albercaDatos = datos;


}]);
/*END Angular JS*/






/*MAPA*/
 var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
/*MAPA*/