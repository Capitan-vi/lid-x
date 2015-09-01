// $(document).ready(function(){
// 	$("#open-form").click(function(event){
// 		event.preventDefault();
// 		$(this).parent().parent().find(".hided-form").css("display","block");
// 		$(this).hide();
// 	});
// });

$(function() { 

	$("a[href|='#main-form']").click(function(){
		$(this).parent().parent().parent().parent()
		.find("#open-form").hide()
		.parent().parent().find(".hided-form").css("display","block");
	});

	$("#open-form").click(function(event){
		event.preventDefault();
		$(this).parent().parent().find(".hided-form").css("display","block");
		$(this).hide();
	});

 });