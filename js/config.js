//ползунок
$(document).ready(function(){	

    $(".range-control").each(function(){
		let val = []; /* массив для values*/ 
		let min = $(this).attr('min');
		let max = $(this).attr('max');
		let sum = Number(max) - Number(min);
		for ( i = 0; i <= sum; i++) { /* заполняем массив */
			val[i] = i + Number(min);
		}
        let rangeSettings = {
			step:$(this).attr('step'), /* шаг */
			from: 0, /* начальный шаг */
			grid: true,
			values: val /* выводим массив */
        };
        $(this).ionRangeSlider(rangeSettings);
    });

    $(".double_range-control").each(function(){
        let rangeSettings = {
            type: "double",
            min: $(this).attr('min'),
            max: $(this).attr('max'),
            step:$(this).attr('step'),
            from:$(this).attr('from'),
            to:$(this).attr('to'),
            grid_num: 3,
            grid: true,
            prettify_enabled: true
        };
        $(this).ionRangeSlider(rangeSettings);
    });
});

// info список
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

// список
$(document).ready(function(){	

	//длина списка, определяем длину списков и выдаем классы, иначе все не красиво 
	let length = $('#info-config .bio-row');
	$.each(length, function(){
		//один список
		if ($(this).find('.combo-box').length === 1) {
			var sel_par = $(this).find("li");
			var arr_s = new Array();
			for (var i=0, child; child=sel_par[i]; i++) {
				var ts = child.innerHTML;
				var ks = child.textContent.length;	
				arr_s[i] = ks;
			}
			var max_s = 0;
			for (i = 1; i < arr_s.length; ++i) {
                if (arr_s[i] > max_s){
					max_s = arr_s[i];
				}
			}
			//console.log(arr_s);
			//console.log(max_s);
			if (max_s < 3){
				$(this).find('.combo-box').addClass('cm-l');
			}
			if (max_s < 7 && max_s > 2){
				$(this).find('.combo-box').addClass('cm-sm');
			}
			if (max_s < 12 && max_s > 6){
				$(this).find('.combo-box').addClass('cm-md');
			}
			if (max_s < 21 && max_s > 11){
				$(this).find('.combo-box').addClass('cm-lg');
			}
			if (max_s > 21){
				$(this).find('.combo-box').addClass('cm-xl');
			}
		}
		
		//два списка
		if ($(this).find('.combo-box').length > 1) { 
			$(this).find('ul').each(function() {
				//    var $this = $(this);
				//    console.log($this);
				let sel_par2 = $(this).find("li");
				var arr_s2 = new Array();
				for (var i=0, child2; child2=sel_par2[i]; i++) {
					var ts2 = child2.innerHTML;
					var ks2 = child2.textContent.length;
					//	console.log(ts2, ks2);	
					arr_s2[i] = ks2;
				}
				var max_s2 = 0;
				for (i = 1; i < arr_s2.length; ++i) {
                    if (arr_s2[i] > max_s2){
						max_s2 = arr_s2[i];
					}
				}
				//console.log(arr_s2);
				//console.log(max_s2);
				if (max_s2 < 3){
					$(this).parents('.combo-box').addClass('cm-l');
				}
				if (max_s2 < 7 && max_s2 > 2){
					$(this).parents('.combo-box').addClass('cm-sm');
				}
				if (max_s2 < 12 && max_s2 > 6){
					$(this).parents('.combo-box').addClass('cm-md');
				}
				if (max_s2 < 21 && max_s2 > 11){
					$(this).parents('.combo-box').addClass('cm-lg');
				}
				if (max_s2 > 21){
					$(this).parents('.combo-box').addClass('cm-xl');
				}
			});
		}
	});

	//закрытие при клике на пустое место 
	$(document).mouseup(function (e) {
		var container = $(".combo-box");
		if (container.has(e.target).length === 0){
			$('.combo-box ul').slideUp();
		}
	});
	//открытие и закрытие
    $('.combo-box ul').hide();
    $('.combo-box').click(function(){
		$('.combo-box').find('ul').stop().slideUp();
        $(this).find('ul').stop().slideToggle();
    });
    $('.combo-box li').click(function(){
        $(this).parents('.combo-box').find('.selector p').text($(this).text());
		$(this).parents('.combo-box').find('li').removeClass('li-active');
		$(this).addClass('li-active');
    });
});

//позицирование checkbox
$(document).ready(function(){
	let combo = $('#info-config .bio-row');
	let i = 0;
	$.each(combo, function(){
		// проверка строки
		if ($(this).children('.checkbox').length > 0) { 
			i = i + 1;
		}
		
		// повтор строки 
		if (i > 1) { 
			$(this).children('.checkbox').addClass('column-check');
			//console.log('check>1 ' + i);
		}

		// нет строки с combo
		if ($(this).children('.checkbox').length == 0) { 
			i = 0;	
			//console.log('check ' + i);
		}
	});
});