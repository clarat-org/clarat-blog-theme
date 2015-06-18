(function (){

	var claratBlog = {

		mainMenu : $(".nav-main__select"),

		initTabs : function(viewPortWidth) {

			if (viewPortWidth >= 600) {
				$('#tab-container').easytabs({
					animate: true,
					animationSpeed: 1
				});
			}
		},

		mainMenuToggle :  function() {

			this.mainMenu
				.removeClass('nav-main__select--expanded')
				.on('click', function(){
				$(this).toggleClass('nav-main__select--expanded');
			});

		}
	};

	$(document).ready(function () {

		var viewPortWidth = $(window).width();

		claratBlog.initTabs(viewPortWidth);
		claratBlog.mainMenuToggle();
	});


	$(window).resize(function () {

		var viewPortWidth = $(window).width();

		claratBlog.initTabs(viewPortWidth);
	});

})();
