$(function() {
	if($('#maps').length){
		$(window).resize(function() {
			if(this.resizeTO) clearTimeout(this.resizeTO);
			this.resizeTO = setTimeout(function() {
				$(this).trigger('resizeEnd');
			}, 500);
		});
		
		$(window).bind('resizeEnd', function() {
			$('#map1').attr('src','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.118654024492!2d-103.37192962232187!3d20.66475116105026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae07c4a049e3%3A0xbb8ecd99b3e1202e!2sAgust%C3%ADn+Y%C3%A1%C3%B1ez%2C+Arcos+Sur%2C+Arcos%2C+44130+Guadalajara%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1461860535513');

			$('#map2').attr('src','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.032984910109!2d-103.42669878555115!3d20.66823700536485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae99a81412ff%3A0x47468a9f8aa05ce0!2sAv.+Patria+440%2C+La+Estancia%2C+45030+Zapopan%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1461860627613');
		});
	}
});