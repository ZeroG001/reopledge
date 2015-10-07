$(function($){



	function radio_input($radio_object, $input_object) {
		$input_object.on('keyup', function(){
			$radio_object.val( $input_object.val() ) ;
		});
	}

	radio_input($('#check-amount'), $('#check-amount-text'));
	radio_input($('#pledge-amount-other'), $('#pledge-amount-other-text'));


	// The tab that you click depends on the tab thats
	// Show tab based on whats clicked

	$('#pledge-form-tab1').click(function(){
		$('.pledge-form').hide();
		$('#pledge-form-employee').show();
		$('.tab').removeClass("tab-selected");
		$(this).addClass("tab-selected");
	});

	$('#pledge-form-tab2').click(function(){
		$('.pledge-form').hide();
		$('#pledge-form-sales-assoc').show();
		$('.tab').removeClass("tab-selected");
		$(this).addClass("tab-selected");
	});

	$('#pledge-form-tab3').click(function(){
		$('.pledge-form').hide();
		$('.pledge-form-paypal').show();
		$('.tab').removeClass("tab-selected");
		$(this).addClass("tab-selected");
	});



	// ==== Open Modal ====
	$('.pledge-submit').click(function(e){

		e.preventDefault();

		$my_form = $(this).closest("form");



		$('body').css("overflow", "hidden");
		$('.pledge-modal').addClass('modal-fadein');
		$('.pledge-modal-box').addClass('modal-slidein');
		$('.pledge-modal').css("overflow", "scroll");

		$('.pledge-modal-submit').click(function(e) {

			if($('#terms-checkbox').prop("checked")) {
				$my_form.submit();
			} else {
				$('.terms-checkbox-container').css({
					"color":"red",
					"font-weight":"bold"
				})
			};

		});

	});

	// ==== Close Modal ====
	$('.pledge-modal-close').click(function(){
		$('body').css("overflow", "scroll");
		$('.pledge-modal-box').removeClass('modal-slidein');
		$('.pledge-modal').removeClass('modal-fadein');


	});

})(Jquery);

