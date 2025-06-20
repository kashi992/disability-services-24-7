
(function ($) {
	"use strict";

	var windowOn = $(window);

	// 01. PreLoader Js
	windowOn.on('load', function () {
		$("#loading").fadeOut(500);
	});




	// 03. Common Js

	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	$("[data-text-color]").each(function () {
		$(this).css("color", $(this).attr("data-text-color"));
	});

	$(".has-img").each(function () {
		var imgSrc = $(this).attr("data-menu-img");
		var img = `<img class="mega-menu-img" src="${imgSrc}" alt="img">`;
		$(this).append(img);

	});


	$('.wp-menu nav > ul > li').slice(-4).addClass('menu-last');


	$('.slc-hamburger-toggle').on('click', function(){
		$('.header-side-menu').slideToggle('header-side-menu');
	});



	if($('.main-menu-content').length && $('.main-menu-mobile').length){
		let navContent = document.querySelector(".main-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".main-menu-mobile");
		mobileNavContainer.innerHTML = navContent;
	
	
		let arrow = $(".main-menu-mobile .has-dropdown > a");
	
		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fa-regular fa-angle-right'></i>";
	
			self.append(function () {
			  return arrowBtn;
			});
	
			self.find("button").on("click", function (e) {
			  e.preventDefault();
			  let self = $(this);
			  self.toggleClass("dropdown-opened");
			  self.parent().toggleClass("expanded");
			  self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
			  self.parent().parent().children(".sub-menu").slideToggle();
			  
	
			});
	
		  });
	}


	//  Offcanvas Js
	$(".offcanvas-open-btn").on("click", function () {
		$(".offcanvas__sec").addClass("offcanvas-opened");
		$(".body_Overlay").addClass("opened");
	});
	$(".offcanvas-close-btn").on("click", function () {
		$(".offcanvas__sec").removeClass("offcanvas-opened");
		$(".body_Overlay").removeClass("opened");
	});



	//  Body overlay Js
	$(".body_Overlay").on("click", function () {
		$(".offcanvas__sec").removeClass("offcanvas-opened");
		$(".search-area").removeClass("opened");
		$(".cartmini__area").removeClass("cartmini-opened");
		$(".body_Overlay").removeClass("opened");
	});



	// 10. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#header_sticky").removeClass("header_sticky");
		} else {
			$("#header_sticky").addClass("header_sticky");
		}
	});




	//  Theme Settings Js

	// settings append in body
	function slc_settings_append($x){
		var settings = $('body');
		let dark;
		$x == true ? dark = 'd-block' : dark = 'd-none';
		var settings_html = `<div class="slc-theme-settings-area transition-3">
		<div class="slc-theme-wrapper">
		   <div class="slc-theme-header text-center">
			  <h4 class="slc-theme-header-title">Harry Theme Settings</h4>
		   </div>

		   <!-- THEME TOGGLER -->
		   <div class="slc-theme-toggle mb-20 ${dark}">
			  <label class="slc-theme-toggle-main" for="slc-theme-toggler">
				 <span class="slc-theme-toggle-dark active"><i class="fa-light fa-moon"></i> Dark</span>
					<input type="checkbox" id="slc-theme-toggler">
					<i class="slc-theme-toggle-slide"></i>
				 <span class="slc-theme-toggle-light"><i class="fa-light fa-sun-bright"></i> Light</span>
			  </label>
		   </div>

		   <!--  RTL SETTINGS -->
		   <div class="slc-theme-dir mb-20">
			  <label class="slc-theme-dir-main" for="slc-dir-toggler">
				 <span class="slc-theme-dir-rtl"> RTL</span>
					<input type="checkbox" id="slc-dir-toggler">
					<i class="slc-theme-dir-slide"></i>
				 <span class="slc-theme-dir-ltr active"> LTR</span>
			  </label>
		   </div>

		   <!-- COLOR SETTINGS -->
		   <div class="slc-theme-settings">
			  <div class="slc-theme-settings-wrapper">
				 <div class="slc-theme-settings-open">
					<button class="slc-theme-settings-open-btn">
					   <span class="slc-theme-settings-gear">
						  <i class="fa-light fa-gear"></i>
					   </span>
					   <span class="slc-theme-settings-close">
						  <i class="fa-regular fa-xmark"></i>
					   </span>
					</button>
				 </div>
				 <div class="row row-cols-4 gy-2 gx-2">
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn d-none" data-color-default="#F50963" type="button" data-color="#F50963"></button>
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#F50963"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#008080"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#AB6C56"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#3661FC"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#2CAE76"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#FF5A1B"></button>
					   </div>
					</div>
					<div class="col">
                        <div class="slc-theme-color-item slc-color-active">
                           <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#03041C"></button>
                        </div>
                     </div>
					<div class="col">
					   <div class="slc-theme-color-item slc-color-active">
						  <button class="slc-theme-color-btn slc-color-settings-btn" type="button" data-color="#ED212C"></button>
					   </div>
					</div>
				 </div>
			  </div>
			  <div class="slc-theme-color-input">
				 <h6>Choose Custom Color</h6>
				 <input type="color" id="slc-color-setings-input" value="#F50963">
				 <label id="slc-theme-color-label" for="slc-color-setings-input"></label>
			  </div>
		   </div>
		</div>
	 </div>`;
	 settings.append(settings_html);
	}




	// color settings
	function slc_color_settings() {

		// set color scheme
		function slc_set_color(slc_color_scheme) {
			localStorage.setItem('slc_color_scheme', slc_color_scheme);
			document.querySelector(':root').style.setProperty('--slc-theme-1', slc_color_scheme);
			document.getElementById("slc-color-setings-input").value = slc_color_scheme;
			document.getElementById("slc-theme-color-label").style.backgroundColor = slc_color_scheme;
		}

		// set color
		function slc_set_input() {
			var color = localStorage.getItem('slc_color_scheme');
			document.getElementById("slc-color-setings-input").value = color;
			document.getElementById("slc-theme-color-label").style.backgroundColor = color;


		}
		slc_set_input();

		function slc_init_color() {
			var defaultColor = $(".slc-color-settings-btn").attr('data-color-default');
			var setColor = localStorage.getItem('slc_color_scheme');

			if (setColor != null) {

			} else {
				setColor = defaultColor;
			}

			if (defaultColor !== setColor) {
				document.querySelector(':root').style.setProperty('--slc-theme-1', setColor);
				document.getElementById("slc-color-setings-input").value = setColor;
				document.getElementById("slc-theme-color-label").style.backgroundColor = setColor;
				slc_set_color(setColor);
			} else {
				document.querySelector(':root').style.setProperty('--slc-theme-1', defaultColor);
				document.getElementById("slc-color-setings-input").value = defaultColor;
				document.getElementById("slc-theme-color-label").style.backgroundColor = defaultColor;
				slc_set_color(defaultColor);
			}
		}
		slc_init_color();


		let themeButtons = document.querySelectorAll('.slc-color-settings-btn');

		themeButtons.forEach(color => {
			color.addEventListener('click', () => {
				let datacolor = color.getAttribute('data-color');
				document.querySelector(':root').style.setProperty('--slc-theme-1', datacolor);
				document.getElementById("slc-theme-color-label").style.backgroundColor = datacolor;
				slc_set_color(datacolor);
			});
		});



		const colorInput = document.querySelector('#slc-color-setings-input');
		const colorVariable = '--slc-theme-1';


		colorInput.addEventListener('change', function (e) {
			var clr = e.target.value;
			document.documentElement.style.setProperty(colorVariable, clr);
			slc_set_color(clr);
			slc_set_check(clr);
		});


		function slc_set_check(clr){
			const arr = Array.from(document.querySelectorAll('[data-color]'));
	
			var a = localStorage.getItem('slc_color_scheme');

			let test =  arr.map(color =>{
				let datacolor = color.getAttribute('data-color');
				
				return datacolor;
			}).filter(color => color == a);
			
			var arrLength = test.length;

			if(arrLength == 0){
				$('.slc-color-active').removeClass('active');
			}else{
				$('.slc-color-active').addClass('active');
			}
		}

		function slc_check_color(){
			var a = localStorage.getItem('slc_color_scheme');

			var list = $(`[data-color="${a}"]`);

			list.parent().addClass('active').parent().siblings().find('.slc-color-active').removeClass('active')		
		}
		slc_check_color();

		$('.slc-color-active').on('click', function () {
			$(this).addClass('active').parent().siblings().find('.slc-color-active').removeClass('active');
		});

	}
	if (($(".slc-color-settings-btn").length > 0) && ($("#slc-color-setings-input").length > 0) && ($("#slc-theme-color-label").length > 0)) {
		slc_color_settings();
	}

	//  Smooth Scroll Js
	function smoothSctoll() {
		$('.smooth a').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 120
				}, 1500);
			}
		});
	}
	smoothSctoll();

	function back_to_top() {
		var btn = $('#back_to_top');
		var btn_wrapper = $('.backTop-wrapper');

		windowOn.scroll(function () {
			if (windowOn.scrollTop() > 300) {
				btn_wrapper.addClass('back-to-top-btn-show');
			} else {
				btn_wrapper.removeClass('back-to-top-btn-show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
	}
	back_to_top();

	var slc_rtl = localStorage.getItem('slc_dir');
	let rtl_setting = slc_rtl == 'rtl' ? true : false;

	

	// Sliders js
	//active slider
	var slider = new Swiper('.slider-active', {
		slidesPerView: 1,
		dots: 'true',
		loop: true,
		effect: 'cube',
		speed: 500,
		autoplay: false,
		// autoplay: {
		// 	delay: 4500,
		// },
		// Navigation arrows
		cubeEffect: {
        shadow: false,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
		navigation: {
			nextEl: ".slider-btn-next",
			prevEl: ".slider-btn-prev",
		},
		pagination: {
			el: ".swiper-pagination",
		  },
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});


	// Testimonial Slider 
	var slider = new Swiper('.testimonial-active', {
		slidesPerView: 1,
		spaceBetween: 30,
		centeredSlides: true,
		loop: true,
		autoplay: {
			delay: 4000,
		},
		rtl: rtl_setting,
		// Navigation arrows
		pagination: {
			el: ".blog-main-slider-dot",
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
				centeredSlides: false,
			},
			'576': {
				slidesPerView: 1,
				centeredSlides: false,
			},
			'0': {
				slidesPerView: 1,
				centeredSlides: false,
			},
		},
	});

	//  Wow Js
	new WOW().init();

	//  Counter Js
	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});


	//  InHover Active Js
	$('.hover__active').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.hover__active').removeClass('active');
	});


	$('').on("click", function () {
		// $('#features-item-thumb').removeClass().addClass($(this).attr('rel'));
		$(this).addClass('active').siblings().removeClass('active');
	});

	//  Line Animation Js
	if ($('#marker').length > 0) {
		function slc_tab_line(){
			var marker = document.querySelector('#marker');
			var item = document.querySelectorAll('.menu-style-3  > nav > ul > li');
			var itemActive = document.querySelector('.menu-style-3  > nav > ul > li.active');

			function indicator(e){
				marker.style.left = e.offsetLeft+"px";
				marker.style.width = e.offsetWidth+"px";
			}
				
		
			item.forEach(link => {
				link.addEventListener('mouseenter', (e)=>{
					indicator(e.target);
				});
				
			});

			
			var activeNav = $('.menu-style-3 > nav > ul > li.active');
			var activewidth = $(activeNav).width();
			var activePadLeft = parseFloat($(activeNav).css('padding-left'));
			var activePadRight = parseFloat($(activeNav).css('padding-right'));
			var totalWidth = activewidth + activePadLeft + activePadRight;
			
			var precedingAnchorWidth = anchorWidthCounter();
		
		
			$(marker).css('display','block');
			
			$(marker).css('width', totalWidth);
		
			function anchorWidthCounter() {
				var anchorWidths = 0;
				var a;
				var aWidth;
				var aPadLeft;
				var aPadRight;
				var aTotalWidth;
				$('.menu-style-3 > nav > ul > li').each(function(index, elem) {
					var activeTest = $(elem).hasClass('active');
					marker.style.left = elem.offsetLeft+"px";
					if(activeTest) {
					// Break out of the each function.
					return false;
					}
			
					a = $(elem).find('li');
					aWidth = a.width();
					aPadLeft = parseFloat(a.css('padding-left'));
					aPadRight = parseFloat(a.css('padding-right'));
					aTotalWidth = aWidth + aPadLeft + aPadRight;
			
					anchorWidths = anchorWidths + aTotalWidth;
	
				});
		
				return anchorWidths;
			}
		}
		slc_tab_line();
	}


	//  Password Toggle Js
	if($('.password-show-toggle').length > 0){

		var showBtn = $('.password-show-toggle');

		showBtn.each(function (e) {
			$(this).on('click', function(x){
				let inputField = $(this).parent().find('input');
				if(inputField.attr('type') === "password"){
					inputField.attr('type', 'text')
					$(this).children('.open-eye-icon').css({
						'display' : 'block'
					})
					$(this).children('.close-eye-icon').css({
						'display' : 'none'
					})
				}else{
					inputField.attr('type', 'password')
					$(this).children('.open-eye-icon').css({
						'display' : 'none'
					})
					$(this).children('.close-eye-icon').css({
						'display' : 'block'
					})
				}
			})
		})
	}

	if ($('.header-height').length > 0) {
		var headerHeight = document.querySelector(".header-height");      
		var setHeaderHeight = headerHeight.offsetHeight;	
		
		$(".header-height").each(function () {
			$(this).css({
				'height' : setHeaderHeight + 'px'
			});
		});
	  }


	$('.chevIcon').click(function() {
		$(this).parents(".dashboadHero").toggleClass('dashboadHero_');
	});
})(jQuery);