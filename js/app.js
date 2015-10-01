$(function($){

	function radio_input($radio_object, $input_object) {
		$input_object.on('keyup', function(){
			$radio_object.val( $input_object.val() ) ;
		});
	}

	radio_input($('#check-amount'), $('#check-amount-text'));



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

})(Jquery);

