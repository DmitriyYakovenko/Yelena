$(document).ready(function(){

	

	$('.modal-support').hide();
	$('.hide-modal').click(function(){
		$('.modal-support').hide();
	})
	$('.support').click(function(){
		$('.modal-support').show();
	});


//HIDE CLICK BODY
$(document).mouseup(function (e)  {
	var folder = $(".modal-support");

	if (!folder.is(e.target) && folder.has(e.target).length === 0) {
		folder.hide();
	}
});



$('.search input').hide();
var searchOpen=false;

$(".fa-search").each(function() {
	$(this).click(function(){
		if (searchOpen==false) {
			$(this).siblings(".search input[type=search]").show();
			searchOpen = true;
		} else {
			$(this).siblings(".search input[type=search]").hide();
			searchOpen = false;
		}
	});
	
});	
	
	
	$.fn.equivalent = function (){
		var $blocks = $(this), //запишем значение jQuery выборки к которой будет применена эта функция
			maxH    = $blocks.eq(0).height(); //примем за максимальную высоту - высоту первого блока в выборке

		$blocks.each(function(){
			//делаем сравнение высоты каждого блока с максимальной
			maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
		});

		$blocks.height(maxH); //устанавливаем найденное максимальное значение высоты для каждого блока jQuery выборки
	}

	$('.size').equivalent(); //применяем нашу функцию в элементам jQuery выборки - $('.nav')
	
//	
	
	$('.add-img').hide();
	$(document).ready(function(){
		$('.textarea textarea').click(function(){
			$('.textarea textarea').css('border-radius', '5px 5px 0px 0px')
			$('.add-img').show();
		});
	});

	$('.fa-chevron-circle-up.top').on('click', function() {

		$('body,html').animate({
			scrollTop: 0
		}, 1000);

		return false;
	});

//MENU MOBILE
	var menuOpen;

	$(".fa-bars").each(function() {
		$(this).click(function(){
			if (menuOpen) {
				$(this).siblings("header ul.menu").show();
				menuOpen = 0;
			} else {
				$(this).siblings("header ul.menu").hide();
				menuOpen = 1;
			}
		});
	
	});
	
	$('#cansecl').click(function(){
		$('.modal-support').hide();
	});	
});

function setEqualHeight(blocks, etalon, correction) {
	blocks = $(blocks);
	if (blocks.length > 1) { // Проверяем наличие блоков
		var tallest = 0;
		blocks.each(function () { // Проходим по всем блокам и находим самый высокий
			var height = $(this).outerHeight(true);
			if (tallest < height) tallest = height;
		});
		if (etalon && tallest < etalon) { // Сравниваем с эталоном
			result = etalon;
		} else {
			result = tallest;
		}
		if (correction) result = result + correction; // Подгоняем
		blocks.height(result); // Выравниваем
	}
}
setEqualHeight('.size-5, .size-2, .size-3');