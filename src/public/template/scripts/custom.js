/**
** Code: Tayfun Erbilen
** Web: www.darkod.com // www.erbilen.net
** Mail: tayfunerbile@gmail.com // freelance@darkod.com
** Date: 16.1.2014
**/

var film;
$(function(){
	film.init();
});

film = {

	init: function(){

		this.slider();
		this.fadeEffect();
		this.lightOnOff();
		this.placeholder();
		this.tab();

		setTimeout(function(){
			$('.video-ads').hide();
			$('.video-player').show();
		}, 10000);
		$('#skip-ads').on('click', function(){
			$('.video-ads').hide();
			$('.video-player').show();
		});

		// ie css fix
		$('.filmler').each(function(){
			$('li', this).each(function(){
				if ( ($(this).index() + 1) % 4 == 0 )
					$(this).css('margin-right', 0);
			});
		});

		var width = $(document).width();
		$('.ads160x600:eq(0)').css('left', (width - 1330) / 2 + 'px');
		$('.ads160x600:eq(1)').css('right', (width - 1330) / 2 + 'px');
		$(window).resize(function(){
			var width = $(document).width();
			$('.ads160x600:eq(0)').css('left', (width - 1330) / 2 + 'px');
			$('.ads160x600:eq(1)').css('right', (width - 1330) / 2 + 'px');
		});

	},

	slider: function(){
		$('#main-slider').pSlider({
			slider: $('#main-slider ul li'),
			button: {
				next: $('#main-slider .next-btn'),
				prev: $('#main-slider .prev-btn')
			},
			width: 144,
			extra: 13,
			visible: 6,
			skip: 6
		});

		$('#film-slider').pSlider({
			slider: $('#film-slider a'),
			button: {
				next: $('#film-slider .next-btn'),
				prev: $('#film-slider .prev-btn')
			},
			width: 300,
			duration: 500
		});

	},

	tab: function(){
		if ( jQuery.fn.pTab ){
			$(".pTab").pTab({
				pTab: '.pTabList',
				pTabElem: 'li:not(.light)',
				pClass: 'active',
				pContent: '.pContent',
				pEffect: 'fadeIn',
				pDuration: 300
			});
		}
	},

	fadeEffect: function(){
		$('[data-fadeEffect]').each(function(){
			var target = $(this).data('target');
			$(this).hover(function(){
				$(target, this).finish().fadeIn(300);
			}, function(){
				$(target, this).fadeOut(300);
			});
		});
	},

	lightOnOff: function(){
		var lighter = $('.lighter');
		$('#light').on('click', function(e){
			if ( $(this).hasClass('on') ){
				lighter.fadeOut(500);
				$(this).removeClass('on');
				$('a', this).html('IŞIKLARI <strong>KAPAT</strong>');
			} else {
				lighter.fadeIn(500);
				$(this).addClass('on');
				$('a', this).html('IŞIKLARI <strong>AÇ</strong>');
			}
			e.preventDefault();
		});
	},

	placeholder: function(){
		$('[data-value]').each(function(){
			var val = $(this).data('value'),
				currentValue = $(this).val();
			if ( currentValue == '' )
				$(this).val( val );
			$(this).focus(function(){
				var current = $(this).val();
				if ( current == val )
					$(this).val('');
			}).blur(function(){
				var current = $(this).val();
				if ( current == '' )
					$(this).val(val);
			});
		});
	}

};
