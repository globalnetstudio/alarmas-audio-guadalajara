$(function() {
	if($('#maps').length){
		$(window).resize(function() {
			if(this.resizeTO) clearTimeout(this.resizeTO);
			this.resizeTO = setTimeout(function() {
				$(this).trigger('resizeEnd');
			}, 500);
		});
		
		$(window).bind('resizeEnd', function() {
			$('#map1').attr('src','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466.6341174333861!2d-103.37438530417224!3d20.666611339304254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae09a6bdb1bf%3A0x67cf219efcce854f!2sALARMAS+VIPER-CLIFFORD!5e0!3m2!1ses-419!2smx!4v1461864473325');

			$('#map2').attr('src','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1109.8332956156764!2d-103.42540391680933!3d20.668791376585375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae99a81412ff%3A0x47468a9f8aa05ce0!2sAv.+Patria+440%2C+La+Estancia%2C+45030+Zapopan%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1461866025001');
		});
	}
});