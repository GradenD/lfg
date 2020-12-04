$(document).ready(function(){ // функция будет выполнена при полной загрузке страницы
	$('#pr').click();
});


// выбранный актив
$('.block-config').click(function(){
	$('.param').removeClass('confg-active');
	$(this).find(".param").addClass('confg-active');
});

//активный user
function bio_user() {
	$('#h1-user').removeClass('info-act');
	$('#info-body').removeClass('info-act');
	$('#info-footer').removeClass('info-act');
	$('#h1-password').addClass('info-act');
	$('#body-password').addClass('info-act');
	$('#footer-password').addClass('info-act');
}

//активный password
function bio_password() {
	$('#h1-user').addClass('info-act');
	$('#info-body').addClass('info-act');
	$('#info-footer').addClass('info-act');

	$('#h1-password').removeClass('info-act');
	$('#body-password').removeClass('info-act');
	$('#footer-password').removeClass('info-act');
}

//профиль
$('#pr').click(function(){
	$('#info-fot').removeClass('info-act');
	$('.bio-row-i').removeClass('i-act');
	bio_user();
	$('#save').addClass('info-act');
	$('.edit').removeClass('edit-color');
});

//пароль
$('#password').click(function(){
	bio_password();
	$('.bio-row-i').removeClass('i-act');
});


//редактирование профиля 
$('#ed-pr').click(function(){
	$('#save').removeClass('info-act');
	bio_user();
	$('#info-fot').addClass('info-act');
	$('#h1-password').addClass('info-act');
	$('.bio-row-i').addClass('i-act');
	$('.edit').addClass('edit-color');
});



//редактируемая область
var editBtn = document.getElementById('ed-pr');
var pr = document.getElementById('pr');
var editables = document.querySelectorAll('#first, #country, #phone, #skype, #last, #bithday, #email, #discord')

pr.addEventListener('click', function(e) {
		editables[0].contentEditable = 'false';
		editables[1].contentEditable = 'false';
		editables[2].contentEditable = 'false';
		editables[3].contentEditable = 'false';
		editables[4].contentEditable = 'false';
		editables[5].contentEditable = 'false';
		editables[6].contentEditable = 'false';
		editables[7].contentEditable = 'false';
		// Change Button Text and Color
		// Save the data in localStorage 
		for (var i = 0; i < editables.length; i++) {
			localStorage.setItem(editables[i].getAttribute('id'), editables[i].innerHTML);
		}
	}
);

editBtn.addEventListener('click', function(e) {
	if (!editables[0].isContentEditable) {
		editables[0].contentEditable = 'true';
		editables[1].contentEditable = 'true';
		editables[2].contentEditable = 'true';
		editables[3].contentEditable = 'true';
		editables[4].contentEditable = 'true';
		editables[5].contentEditable = 'true';
		editables[6].contentEditable = 'true';
		editables[7].contentEditable = 'true';
	}
});