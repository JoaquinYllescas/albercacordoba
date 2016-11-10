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