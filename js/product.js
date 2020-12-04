$(document).ready(function(){ // функция будет выполнена при полной загрузке страницы
	$('.str').click();
	$('#default-config').click();
});

//загрузка config
$('.block-config').click(function(){
	$.ajax({
	  	type: "POST",
	  	url: 'pages/config.php',
	  	success: function(data) {
		 	$('#info-config').html(data);
	  	}
	});
});

//активный config
$('.block-config').click(function(){
	$('.param').removeClass('confg-active');
	$(this).find(".param").addClass('confg-active');
});