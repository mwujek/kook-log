$(document).ready(function(){
 
 var totalHours = $('.total-hours');
 var totalWaves = $('.total-waves');
 var wphText = $('.total-wph');
 

 function getTotals(){
 	var h = 0;
 	var w = 0;
 	var wph = 0;
 	$('.amount-time').each(function(){
 		h += Number($(this).text());//.toFixed(1);
 	});
 	$('.amount-waves').each(function(){
 		w += Number($(this).text());//.toFixed(1);
 	});

 	var wph = (w / h).toFixed(1);

 	totalHours.text(h);
 	totalWaves.text(w);

 	wphText.text(wph);
 }

 getTotals();

});