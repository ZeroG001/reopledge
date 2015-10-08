$(function($){


	// Defined Functions

	function close_modal() {
		$('body').css("overflow", "scroll");
		$('.pledge-modal-box').removeClass('modal-slidein');
		$('.pledge-modal').removeClass('modal-fadein');
	}

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
	$('.pledge-submit').click(function(e) {
		e.preventDefault();

		$my_form = $(this).closest("form");



		$('body').css("overflow", "hidden");
		$('.pledge-modal').addClass('modal-fadein');
		$('.pledge-modal-box').addClass('modal-slidein');
		$('.pledge-modal').css("overflow", "scroll");

		$('.pledge-modal-submit').click(function(e) {

			if($('#terms-checkbox').prop("checked")) {
				close_modal();
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
		close_modal();
	});


// === Parsley Code ===



$pledgeForm = $('#pledge-form-employee').parsley();

$pledgeAmountField = $('#pledge-amount-10').parsley();
$paycheckAmountField = $('#check-all').parsley();
$companyField = $('#check-reo-family').parsley();





  $("form label").append("<i class='fa'></i>");

  window.Parsley.on('field:error', function() {

    $('.form-alert-message').show();
    $('.form-alert-message').removeClass('form-alert-valid');
    $('.form-alert-message').addClass('form-alert-invalid');
    $('.form-alert-message').html('<strong>Uh oh! Form is Invalid</strong>. Please correct the fields highlighted in red ');


    this.$element.css({"border" : "1px solid red"});
    // this.$element.prev("label").find('i').removeClass('fa-check-circle');
    // this.$element.prev("label").find('i').addClass('fa-exclamation-circle');
    
    console.log(this.isValid());

    if(!$pledgeAmountField.isValid()) {
    	$('.pledge-amount-wrapper').css('border', '1px solid red');
    }


    if(!$paycheckAmountField.isValid()) {
    	$('.check-amount-wrapper').css('border', '1px solid red');
    }

    if(!$companyField.isValid()) {
    	$('.pledge-company-wrapper').css('border', '1px solid red');
    }


    

    this.on('field:success', function() {

        if($pledgeAmountField.isValid()) {
    		$('.pledge-amount-wrapper').css('border', '1px solid green');
   		 }

	    if($paycheckAmountField.isValid()) {
	    	$('.check-amount-wrapper').css('border', '1px solid green');
	    }

	    if($companyField.isValid()) {
	    	$('.pledge-company-wrapper').css('border', '1px solid green');
	    }



      if( $pledgeForm.isValid() ) {

        console.log("The form is valid"); 
	

        $('.form-alert-message').html('<strong>Great! This Form is valid</strong>');
        $('.form-alert-message').removeClass('form-alert-invalid');
        $('.form-alert-message').addClass('form-alert-valid');
      }

      this.$element.css({"border" : "1px solid green"});
      // this.$element.prev("label").find('i').removeClass('fa-exclamation-circle');
      // this.$element.prev("label").find('i').addClass('fa-check-circle');

      return false;
    });


    return false;

  });

})(Jquery);

