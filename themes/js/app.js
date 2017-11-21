/**
 * Показ всплывающая подсказка
 * @param $element {object} jQuery объект элемента
 */
var showTip = (function($){

	var $el, styles;

	styles = '<style>.e-tip { padding: 5px 10px; text-align: center; position: absolute; opacity: 0; font-size: 12px; background-color: #00aef1; color: #fff; max-width: 121px; height: auto; z-index: 999999; border-radius: 3px; } .e-tip:before { content: ""; position: absolute; width: 0; height: 0; border-style: solid; border-width: 5px 5px 0 5px; border-color: #00adf1 transparent transparent transparent; left: 50%; bottom: -5px; margin-left: -5px; } body.all-cool .e-tip { background-color: #ff5300; } body.all-cool .e-tip:before { border-color: #ff5300 transparent transparent transparent; } body.gkmebel .e-tip { background-color: #fbca00; } body.gkmebel .e-tip:before { border-color: #fbca00 transparent transparent transparent; }</style>';

	var addCss = function() {
		$('head').append(styles);
	};

	var hideTip = function() {
		var popupTip = $(".e-tip");
		popupTip.remove();
		return true;
	};

	var showTip = function($self) {

		var element_top,
			element_left,
			element_width,
			element_tip,
			popupTip,
			$tip_container;

		element_tip = $self.data('tip') || 'текст не задан';
		element_top = $self.offset().top;
		element_left = $self.offset().left;
		element_width = $self.outerWidth();

		$tip_container = $("<div/>", {
			class: 'e-tip',
			title: element_tip,
			text: element_tip
		});

		$("body").append($tip_container);

		popupTip = $(".e-tip");

		popupTip.css({
			'top': element_top,
			'left': element_left,
		});

		popupTip
			.css({
				'top': (element_top - popupTip.outerHeight() - 20),
				'left': (element_left + (element_width / 2)) - (popupTip.outerWidth() / 2)
			});

		popupTip
			.animate({
				'top': (element_top - popupTip.outerHeight() - 10),
				opacity: 1
			}, 500);

		return true;
	};

	var onHoverInAction = function() {
		showTip($(this));
	};

	var onHoverOutAction = function() {
		hideTip();
	};

	var bindOnHover = function() {
		$el.each(function() {
			$(this).hover(onHoverInAction, onHoverOutAction);
		});
	};

	var init = function($element) {
		$el = $element;
		bindOnHover();
		addCss();
	};

	return {
		init: init
	}

})(jQuery);


(function($) {

	$(function() {

		/* Корзина: Группировка чекбоксов */
		$('.js-cart-checkbox-group input[type="checkbox"]').on('change', function(e) {
			if (!$(this).prop('checked')) return true;
			var checked = $(this).parents('.js-cart-checkbox-group').find('input[type="checkbox"]:checked');
			checked.prop('checked', false);
			$(this).prop('checked', true);
		});

		/* Корзина: Select2 доставка */
		if ( $.fn.select2 ) {
			$(".js-select2-delivery").select2({
				placeholder: "Способ доставки",
				// allowClear: true,
				minimumResultsForSearch: Infinity,
				dropdownParent: $(".js-select2-delivery").parent()
			});
		}

		/* Корзина: Select2 оплата */
		if ( $.fn.select2 ) {
			$(".js-select2-payment").select2({
				placeholder: "Способ доставки",
				// allowClear: true,
				minimumResultsForSearch: Infinity,
				dropdownParent: $(".js-select2-payment").parent()
			});
		}

		/* Страница товара: Карусель фотографий */
		var pcOwlCarousel = $('.js-pc-carousel');

		pcOwlCarousel.on('changed.owl.carousel', function(event) {

			var
				element   = event.target,
				name      = event.type,
				namespace = event.namespace,
				items     = event.item.count,
				item      = event.item.index,
				pages     = event.page.count,
				page      = event.page.index,
				size      = event.page.size,
				thumbs    = $('.js-pc-carousel-thumbs');

			thumbs.find('[class*="item"]')
				.removeClass('active')
				.eq(item)
				.addClass('active');

		});

		pcOwlCarousel.on('initialized.owl.carousel', function(event) {

			var
				verticalThumbsNumber = 5,
				thumbs               = $('.js-pc-carousel-thumbs'),
				thumbsTopOffset      = thumbs.offset().top,
				innerContainer       = thumbs.find('[class*="inner-container"]'),
				prevArrow,
				nextArraw,
				thumbsBottomOffset;

			prevArrow = $('<div/>', {
				'class' : 'pc-carousel-thumbs__arrow pc-carousel-thumbs__arrow_prev fa fa-angle-up disabled js-carousel-thumb-prev'
			});

			nextArrow = $('<div/>', {
				'class' : 'pc-carousel-thumbs__arrow pc-carousel-thumbs__arrow_next fa fa-angle-down js-carousel-thumb-next'
			});

			function onClickAction(e) {
				e.preventDefault();
				var index = $(this).parent().index();
				pcOwlCarousel.trigger('to.owl.carousel', index);
			};

			thumbs.find('a').on('click', onClickAction);

			thumbs
				.append(prevArrow)
				.append(nextArrow);

			$('.js-carousel-thumb-next').on('click', function(e) {
				e.preventDefault();
				if(thumbs.attr('in-progress') === 'true')
					return;
				if(thumbsBottomOffset <= innerContainer.offset().top+innerContainer.outerHeight()) {

					var
						currentOffset,
						itemHeigth;

					itemHeigth = (thumbs.find('[class*="item"]').outerHeight()+10) * -1;

					currentOffset = innerContainer.css('transform').split(',');
					currentOffset = parseFloat(currentOffset[5]);

					if (isNaN(currentOffset))
						currentOffset = 0;

					thumbs.attr('in-progress', true);

					innerContainer.css({
						transform : 'matrix(1, 0, 0, 1, 0, '+(currentOffset+itemHeigth)+')'
					});
				}

				setTimeout(function() {

					if(innerContainer.offset().top < thumbsTopOffset) {
						$('.js-carousel-thumb-prev').removeClass('disabled');
					} else {
						$('.js-carousel-thumb-prev').addClass('disabled');
					}

					if(thumbsBottomOffset >= innerContainer.offset().top+innerContainer.outerHeight()) {
						$('.js-carousel-thumb-next').addClass('disabled');
					} else {
						$('.js-carousel-thumb-next').removeClass('disabled');
					}

					thumbs.attr('in-progress', false);

				}, 400);
			});

			$('.js-carousel-thumb-prev').on('click', function(e) {
				e.preventDefault();

				if(thumbs.attr('in-progress') === 'true') return;

				if(thumbsTopOffset >= innerContainer.offset().top) {

					var
						currentOffset,
						itemHeigth;

					itemHeigth = (thumbs.find('[class*="item"]').outerHeight()+10);

					currentOffset = innerContainer.css('transform').split(',');
					currentOffset = parseFloat(currentOffset[5]);

					if (isNaN(currentOffset))
						currentOffset = 0;

					thumbs.attr('in-progress', true);

					innerContainer.css({
						transform : 'matrix(1, 0, 0, 1, 0, '+(currentOffset+itemHeigth)+')'
					});
				}

				setTimeout(function() {

					if(innerContainer.offset().top < thumbsTopOffset) {
						$('.js-carousel-thumb-prev').removeClass('disabled');
					} else {
						$('.js-carousel-thumb-prev').addClass('disabled');
					}

					if(thumbsBottomOffset >= innerContainer.offset().top+innerContainer.outerHeight()) {
						$('.js-carousel-thumb-next').addClass('disabled');
					} else {
						$('.js-carousel-thumb-next').removeClass('disabled');
					}

					thumbs.attr('in-progress', false);

				}, 400);
			});

			thumbs.find('[class*="wrap"]').css({
				'height' : thumbs.find('[class*="item"]').outerHeight()*verticalThumbsNumber+(10*(verticalThumbsNumber))
			});

			thumbsBottomOffset = thumbsTopOffset+thumbs.outerHeight();


		});

		pcOwlCarousel.owlCarousel({
			loop: false,
			items: 1,
			nav: true,
			navText: ['', ''],
			navClass: ['pc-carousel__arrow pc-carousel__arrow_left fa-angle-left fa', 'pc-carousel__arrow pc-carousel__arrow_right fa-angle-right fa']
		});


		/** Подсказки */
		showTip.init($('[data-tip]'));


		/**
		 * Callback таймера акции в карточке товара
		 * с полосками
		 */
		function actionCoundownLine(event) {

			var
				style = '<style id="pc-action-countdown"></style>',
				currentHtml;

			if ( window.countdownHtml == undefined) {
				window.countdownHtml = $(this).html();
				window.countdownHtml = window.countdownHtml.replace(/D/g, '%D');
				window.countdownHtml = window.countdownHtml.replace(/H/g, '%H');
				window.countdownHtml = window.countdownHtml.replace(/M/g, '%M');
				window.countdownHtml = window.countdownHtml.replace(/S/g, '%S');
				$('head').append(style);
			}

			$('#pc-action-countdown')
				.text('.pc-action__item:nth-child(1) .pc-action__label:after { width: '+(event.offset.days/30)*100+'%; } .pc-action__item:nth-child(2) .pc-action__label:after { width: '+(event.offset.hours/24)*100+'%; } .pc-action__item:nth-child(3) .pc-action__label:after { width: '+(event.offset.minutes/60)*100+'%; } .pc-action__item:nth-child(4) .pc-action__label:after { width: '+(event.offset.seconds/60)*100+'%; }');

			currentHtml = window.countdownHtml;
			$(this).html(event.strftime(currentHtml));
		};


		/**
		 * Callback таймера акции в карточке товара
		 * с полосками
		 */
		function actionCoundownCircle(event) {

			var currentHtml,
				blocks,
				circleOptions;

			if ( window.countdownHtml == undefined) {
				window.countdownHtml = $.trim($(this).html());
				window.countdownHtml = window.countdownHtml.replace(/D/g, '%D');
				window.countdownHtml = window.countdownHtml.replace(/H/g, '%H');
				window.countdownHtml = window.countdownHtml.replace(/M/g, '%M');
				window.countdownHtml = window.countdownHtml.replace(/S/g, '%S');
			}

			currentHtml = window.countdownHtml;

			// currentHtml.filter('li').each(function() {

			// 	var block = $(this),
			// 		canvas,
			// 		ctx,
			// 		radius;

			// 	if ($(this).find('canvas').length) {
			// 		circleOptions = {
			// 			percent  : block.attr('data-percent') || 25,
			// 			size     : block.attr('data-size') || 50,
			// 			lineWidth: block.attr('data-line') || 2,
			// 			rotate   : block.attr('data-rotate') || 0
			// 		};
			// 		canvas = document.createElement('canvas');
			// 		if (typeof(G_vmlCanvasManager) !== 'undefined')
			// 			G_vmlCanvasManager.initElement(canvas);
			// 		ctx = canvas.getContext('2d');
			// 		canvas.width = canvas.height = circleOptions.size;
			// 		block.append(canvas);
			// 		ctx.translate(circleOptions.size / 2, circleOptions.size / 2);
			// 		ctx.rotate((-1 / 2 + circleOptions.rotate / 180) * Math.PI);
			// 		radius = (circleOptions.size - circleOptions.lineWidth) / 2;
			// 		percent = Math.min(Math.max(0, 50 || 1), 1);
			// 		ctx.beginPath();
			// 		ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);
			// 		ctx.strokeStyle = '#ff5300';
			// 		ctx.lineCap = 'round';
			// 		ctx.lineWidth = 1;
			// 		ctx.stroke();
			// 	}
			// });

			$(this).html(event.strftime(currentHtml));
		};

		var timeAkcii =  $("#timeAkcii").val();

		/** Таймер акции (с полосками) */
			$(".js-pc-action").countdown(timeAkcii, actionCoundownLine);
		
		/** Таймер акции (с кружками) */
		$(".js-pc-action-circle").countdown("2017/06/29", actionCoundownCircle);

		/** Perfect Srcrollbar: Области и города */
		$('.js-perfect-scrollbar-regions, .js-perfect-scrollbar-citys').perfectScrollbar();

	});

})(jQuery);
