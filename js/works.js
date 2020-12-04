$('.list').click(function(){	
	if($(this).find('.title-info').css('display') == 'none'){
		$('.title-info').css('display','none');
		$(this).find('.title-info').css('display','block');
	}
	else{
		$('.title-info').css('display','none');
		$(this).find('.title-info').css('display','none');
	}
});