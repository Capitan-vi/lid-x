//---------------------------------------------------------------------------------------------------------//
//----------------------------------------------SLIDERS----------------------------------------------------//
//---------------------------------------------------------------------------------------------------------//

window.onload = function(){
	if (document.getElementById('js-portfolio-case-slider')) {

		/* конфигурация */
		var ul = document.getElementById('js-portfolio-case-slider');
		var imgs = ul.getElementsByClassName('js-portfolio-case-slide');
		var width = getComputedStyle(ul.firstElementChild).width; // ширина изображения
		width = +width.slice(0,-2);
		var count = 1; // количество изображений

		var number_info = 0;
		var position = 0; // текущий сдвиг влево

		document.getElementById('js-prev-slide').onclick = function() {

			ul.style.width = '9999px';

		  if (position >= 0) { // уже прокручено до конца влево
			ul.insertBefore(imgs[imgs.length-1],imgs[0]);
			position = position - width;
			number_info++;
		  }
		  newPosition = position + width;
		  animateProp({
			elem: ul,
			prop: "marginLeft",
			start: position,
			end: newPosition,
			duration: 250,
			delay: 20
		  });
		  position = newPosition;
		  
		  number_info--;
		  this.parentNode.firstElementChild.innerHTML = imgs[number_info].getAttribute('data-name');
		  
		  return false;
		}

		document.getElementById('js-next-slide').onclick = document.getElementById('js-next-slide-btn').onclick = function(e) {

			ul.style.width = '9999px';

		  if (position <= -width*(imgs.length-count)) { // уже прокручено до конца вправо
			var first = imgs[0];
			ul.removeChild(imgs[0]);
			ul.appendChild(first);
			position = position + width;
			number_info--;
		  }
		  
		newPosition = position - width;
		  animateProp({
			elem: ul,
			prop: "marginLeft",
			start: position,
			end: newPosition,
			duration: 250,
			delay: 20
		  });
		  position = newPosition;
		  
		  number_info++;

		  if (this != document.getElementById('js-next-slide-btn'))this.parentNode.firstElementChild.innerHTML = imgs[number_info].getAttribute('data-name');
		  
		  return false;
		};

		document.getElementById('js-all-slides').onclick = function() {

			ul.style.width = 'auto';
			ul.style.marginLeft = '0';

			return false;
		}
	}

	if (document.getElementById('js-our-responses-slider')) {

		/* конфигурация */
		var ul2 = document.getElementById('js-our-responses-slider');
		var imgs2 = ul2.getElementsByClassName('js-our-responses-slide');
		var width2 = getComputedStyle(ul2.parentNode).width; // ширина изображения
		if ( window.innerWidth > 1200 ) { width2 = +width2.slice(0,-2)/2 } else { width2 = +width2.slice(0,-2) }
		var count2 = 2; // количество изображений

		var position2 = 0; // текущий сдвиг влево

		document.getElementById('js-prev-response').onclick = function() {
		  if (position2 >= 0) { // уже прокручено до конца влево
			ul2.insertBefore(imgs2[imgs2.length-1],imgs2[0]);
			position2 = position2 - width2;
		  }
		  newPosition2 = position2 + width2;
		  animateProp({
			elem: ul2,
			prop: "marginLeft",
			start: position2,
			end: newPosition2,
			duration: 200,
			delay: 20
		  });
		  position2 = newPosition2;
		  
		  
		  return false;
		}

		document.getElementById('js-next-response').onclick = function() {
		  if (position2 <= -width2*(imgs.length-count2)) { // уже прокручено до конца вправо
			var first = imgs2[0];
			ul2.removeChild(imgs2[0]);
			ul2.appendChild(first);
			position2 = position2 + width2;
		  }
		  
		newPosition2 = position2 - width2;
		  animateProp({
			elem: ul2,
			prop: "marginLeft",
			start: position2,
			end: newPosition2,
			duration: 200,
			delay: 20
		  });
		  position2 = newPosition2;
		  
		  return false;
		};
	}

	function animate(opts) {

	  var start = new Date;
	  var delta = opts.delta || linear;

	  var timer = setInterval(function() {
		var progress = (new Date - start) / opts.duration;

		if (progress > 1) progress = 1;

		opts.step( delta(progress) );

		if (progress == 1) {
		  clearInterval(timer);
		  opts.complete && opts.complete();
		}
	  }, opts.delay || 13);

	  return timer;
	}

	/**
	 Анимация стиля opts.prop у элемента opts.elem
	 от opts.from до opts.to продолжительностью opts.duration
	 в конце opts.complete

	 Например: animateProp({ elem: ..., prop: 'height', start:0, end: 100, duration: 1000 })
	*/
	function animateProp(opts) {
	  var start = opts.start, end = opts.end, prop = opts.prop;

	  opts.step = function(delta) {
		var value = Math.round(start + (end - start)*delta);
		opts.elem.style[prop] = value + 'px';
	  }
	  return animate(opts);
	}

	// ------------------ Delta ------------------

	function elastic(progress) {
	  return Math.pow(2, 10 * (progress-1)) * Math.cos(20*Math.PI*1.5/3*progress);
	}

	function linear(progress) {
	  return progress;
	}

	function quad(progress) {
	  return Math.pow(progress, 2);
	}

	function quint(progress) {
	  return Math.pow(progress, 5);
	}

	function circ(progress) {
	  return 1 - Math.sin(Math.acos(progress));
	}

	function back(progress) {
	  return Math.pow(progress, 2) * ((1.5 + 1) * progress - 1.5);
	}


	function bounce(progress) {
	  for(var a = 0, b = 1, result; 1; a += b, b /= 2) {
		if (progress >= (7 - 4 * a) / 11) {
		  return -Math.pow((11 - 6 * a - 11 * progress) / 4, 2) + Math.pow(b, 2);
		}
	  }
	}

	function makeEaseInOut(delta) {
	  return function(progress) {
		if (progress < .5)
		  return delta(2*progress) / 2;
		else
		  return (2 - delta(2*(1-progress))) / 2;
	  }
	}


	function makeEaseOut(delta) {
	  return function(progress) {
		return 1 - delta(1 - progress);
	  }
	}
	
	if (document.getElementById('js-portfolio-case-slider')) {

		ul.style.marginLeft = '0px';
		var container = document.getElementsByClassName('wrapper');
		var one_container = container[0];
		var current_width = getComputedStyle(one_container).width;
		
		window.onresize = function(){
			if (ul.style.marginLeft != '0px'){
				if (getComputedStyle(one_container).width != current_width){
					if (current_width == "1140px"){
						//if (getComputedStyle(one_container).width == "720px"){
							var to_left = ul.style.marginLeft;
							to_left = +to_left.slice(0,-2);
							to_left = to_left - 420*(to_left / 1140);
							ul.style.marginLeft = to_left + 'px';
							current_width = '720px';
							width = getComputedStyle(ul.firstElementChild).width; // ширина изображения
							width = +width.slice(0,-2);
							position = position - 300;
						//}
					}
					else if (current_width == "720px"){
							var to_left = ul.style.marginLeft;
							to_left = +to_left.slice(0,-2);
							to_left = to_left + 420*(to_left / 720);
							ul.style.marginLeft = to_left + 'px';
							current_width = '1140px';
							width = getComputedStyle(ul.firstElementChild).width; // ширина изображения
							width = +width.slice(0,-2);
							position = position + 300;
					}
				}
			}
		}
		if (document.getElementById('js-our-responses-slider')) {

			ul2.style.marginLeft = '0px';

			if (ul2.style.marginLeft != '0px'){
				if (getComputedStyle(one_container).width != current_width){
					if (current_width == "1140px"){
						//if (getComputedStyle(one_container).width == "720px"){
							var to_left = ul2.style.marginLeft;
							to_left = +to_left.slice(0,-2);
							to_left = to_left - 420*(to_left / 1090);
							ul2.style.marginLeft = to_left + 'px';
							current_width = '720px';
							width2 = getComputedStyle(ul2.firstElementChild).width; // ширина изображения
							width2 = +width2.slice(0,-2) * 2;
							position2 = position2 + 420;
						//}
					}
					else if (current_width == "720px"){
							var to_left = ul2.style.marginLeft;
							to_left = +to_left.slice(0,-2);
							to_left = to_left + 420*(to_left / 670);
							ul2.style.marginLeft = to_left + 'px';
							current_width = '1140px';
							width2 = getComputedStyle(ul2.firstElementChild).width; // ширина изображения
							width2 = 980;//+width2.slice(0,-2) * 2;
							position2 = position2 + 560;
					}
				}
			}
		}
		
	}


//---------------------------------------------------------------------------------------------------------//
//----------------------------------------------FORMS------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------//

	var body = document.getElementsByTagName('body')[0];

	// создает затемнение и удаляет форму по щелчку вне

	function del (formName) {

		var popupShading = document.createElement('div');

		popupShading.className = 'js-contact-form-popup-shading';
		popupShading.id = 'js-contact-form-popup-shading';
		body.appendChild(popupShading);

		document.getElementById('js-contact-form-popup-shading').onclick = function () {

			document.getElementById('js-contact-form-popup-shading').parentNode.removeChild(document.getElementById('js-contact-form-popup-shading'));

			if ( document.getElementById('js-contact-form-popup') ) {

				document.getElementById('js-contact-form-popup').parentNode.removeChild(document.getElementById('js-contact-form-popup'))
			
			}

			else { document.getElementById(formName).style.display='none'; }
		}
	}

	//показываем форму отправки сообщения

	if (document.getElementById('js-send-message') && document.getElementById('js-send-message-form') ) {

		document.getElementById('js-send-message').onclick = function () {

			document.getElementById('js-send-message-form').style.display='block';

	 		del('js-send-message-form');

	 		return false;

		}
	}

	//показываем форму подписаться

	if (document.getElementById('js-blog-subscribe') && document.getElementById('js-blog-subscribe-form')) {

		document.getElementById('js-blog-subscribe').onclick = function () {

			document.getElementById('js-blog-subscribe-form').style.display='block';

	 		del('js-blog-subscribe-form');

	 		return false;

		}
	}

	//функция копирования формы контактов

	function popupForm (formTitle,submitTitle) {

		if (arguments.length > 2 && document.getElementById('js-contact-form')) {

			for (var j = 2; j < arguments.length; j++){

				if (document.getElementById(arguments[j])) {

					document.getElementById(arguments[j]).onclick = function () {

						var form = document.getElementById('js-contact-form');
						var	newForm = form.cloneNode(true);

						var newFormCheckbox = newForm.querySelectorAll( 'input[type="checkbox"]');
						var newFormLabel = newForm.querySelectorAll('input[type="checkbox"]+label');

						for (var i = 0; i < newFormCheckbox.length; i++) {
					        
				            newFormCheckbox[i].id = 'js-popup-' + newFormCheckbox[i].id;
				            newFormLabel[i].htmlFor = 'js-popup-' + newFormLabel[i].htmlFor;

					    }

					    if (formTitle) { newForm.getElementsByClassName('js-contact-form-title')[0].innerHTML = formTitle; }

					    if (submitTitle) { newForm.getElementsByClassName('js-contact-form-submit')[0].value = submitTitle; }

					    if (newForm.hasAttribute('style')){ newForm.removeAttribute('style'); }

						newForm.classList.add('js-contact-form-popup');
						newForm.id = 'js-contact-form-popup';

						body.appendChild(newForm);

						del();

						return false;
					}
				}
			}
		}

		return false;
	}

	popupForm('Заказать звонок','Перезвоните пожалуйста','js-header-order-call','js-footer-order-call');

	popupForm(false,false,'js-we-make-sales-contact-form','js-our-clients-contact-form','js-our-responses-contact-form',
			'js-three-reasons-contact-form','js-footer-make-order-text-contact-form','js-footer-make-order-contact-form');

}