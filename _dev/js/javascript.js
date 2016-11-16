// $(".enter").hover(entro, salgo);

// function entro(){
// 	$("#black").addClass(" fadeIn ");
// }
// function salgo(){
// 	$("#black").removeClass(" fadeIn ");
// }

$(".enter").on("click", function(){
	$("#introContainer").addClass(" veArriba ");
	$("#black").css({"display" : "block" , "background-color" : "#141414"});
	$(".llamar").addClass(" left ");
	$(".mapa").addClass(" right ");
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
var myApp = angular.module('alberca',[]);

myApp.controller('InitialController', ['$scope', function($scope) {
  $scope.hello = 'Hola!';
  $scope.albercaDatos = datos;
}]);
/*END Angular JS*/