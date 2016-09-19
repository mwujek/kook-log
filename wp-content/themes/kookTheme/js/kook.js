$(document).ready(function(){
 
 var totalHours = $('.total-hours');
 

 function getHours(){
 	var sum = 0;
 	$('.amount-time').each(function(){
 		sum += Number($(this).text());//.toFixed(1);
 	});
 	totalHours.text(sum);
 }

 getHours();

});