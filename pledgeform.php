<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST)) {
	var_dump($_POST);
}	

?>

<html>


	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="Viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/sk_grid.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">


	</head>

	<body>



		<h3> REO Pledge Form </h3>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


		<div class="sk-container">

			<div class="form-alert-message"> </div>

		<!-- Pledge form modal -->
			<div class="pledge-modal">

				<div class="pledge-modal-box">

					<div class="pledge-modal-close">
						<img src="img/cancel-circle.png" /> 
					</div>

					<h4> Thank You, A little goes a long way. </h4>
					

					<div class="modal-terms-container">
						<h4> Terms and Conditions </h4>
						
						<p> 
							By selecting the "I Accept" button, you are signing this charitable contribution pledge card electronically. 
							You agree your electronic signature is the equivalent of your manual signature on this pledge card. 
							By selecting "I Accept" you consent to submitting your charitable contribution commitment via electronic media.
						</p>
					
						<div class="terms-checkbox-container">
							<label for="terms-checkbox"> I Agree </label>
							<input type="checkbox" id="terms-checkbox" />
						</div>

					</div>


					<div class="modal-button-footer">
						<button class="pledge-modal-submit"> Submit Pledge </button>
					</div>
				</div>	


			</div>
		<!-- Pledge form modal end-->

			<div class="pledge-tab-container">

				<div class="tab tab-selected" id="pledge-form-tab1">
					Employee
				</div>

				<div class="tab" id="pledge-form-tab3">
					One Time Gift
				</div>

			</div>

			<!-- 
				=== Fields ===
			name
			address
			company
			pledge_type [Employee, Sales Assoc, OneTime]
			number_of_checks
			paynumber

			This form is going to be emailed
			-->

			<!-- Employee Form -->


			<!-- ========================================== -->
			<!-- ================ FORM 1 ================== -->
			<!-- ========================================== -->

			<form action="#" method="post" class="pledge-form form-show" id="pledge-form-employee" data-parsley-errors-messages-disabled >

				<input type="hidden" name="pledge_type"value="reo_staff" />

					<div class="pledge-donar-info">

						<div class="row">

							<div class="six columns">
								<label for="pledge-name"> Name </label>
								<input type="text" id="pledge-name" name="name" data-parsley-required />
							</div>

							<div class="six columns">
								<label for="pledge-address"> Address </label>
								<input type="text" id="pledge-address" name="address" data-parsley-required />
							</div>
							
						</div>

					</div>
				
					<!-- =============================== -->
					<!-- Form 1 Section 2 - Company Info -->
					<!-- =============================== -->
 					<div class="pledge-company-checkbox">

 						<div class="pledge-company-wrapper">

		 					<div class="row">

		 						<div class="four columns">
									<input type="radio" id="check-reo-family" name="company" value="REO-Family" data-parsley-required />
									<label for="check-reo-family" ><span></span> REO/MB/JJ/CR </label>

									<div class="input-office-number-container">
										<label for="check-office-number"><span></span> Office # </label>
										<input type="text" id="" name="office_number" value="" maxlength="4"/>
									</div>

								</div>

								<div class="four columns">
									<input type="radio" id="check-capital-title" name="company" value="capital-title"  />
									<label for="check-capital-title"><span></span> Capital Title </label>
								</div>

								<div class="four columns">
									<input type="radio" id="check-insurance-one" name="company" value="insurance-one" />
									<label for="check-insurance-one"><span></span> Insurance One </label>
								</div>
							



								</div>

							<div class="row">
								<div class="four columns">
									<input type="radio" id="check-relo" name="company" value="insurance-one" />
									<label for="check-relo"><span></span> Relocation America </label>
								</div>

								<div class="four columns">
									<input type="radio" id="check-jamco-front-aamc" name="company" value="jamco-font-aamc" />
									<label for="check-jamco-front-aamc"><span></span> JAMCO/Front St/AAMC </label>
								</div>
							</div>

						</div>
						

					</div>


					<!-- =============================== -->
					<!-- Form 1 Section 3 - Payment Info -->
					<!-- =============================== -->
					<div class="pledge-check-info">

						<div class="pledge-amount-wrapper">

							<div class="row">

								<div class="four columns">
									<input class="pledge-amount-radio" id="pledge-amount-10" type="radio" name="pledge_amount" value="10" data-parsley-required /> 
									<label for="pledge-amount-10"><span></span> $ 10 </label>
								</div>

								<div class="four columns">
									<input class="pledge-amount-radio" id="pledge-amount-25" type="radio" name="pledge_amount" value="25"  /> 
									<label for="pledge-amount-25" ><span></span> $ 25 </label>
								</div>

							
								<div class="four columns">
									<input class="pledge-amount-radio" id="pledge-amount-50" type="radio" name="pledge_amount" value="50"  /> 
									<label for="pledge-amount-50"><span></span> $ 50 </label>
								</div>
							</div>

							<div class="row">

								<div class="four columns">
									<input class="pledge-amount-radio" id="pledge-amount-100" type="radio" name="pledge_amount" value="100"  /> 
									<label for="pledge-amount-100"><span></span> $ 100 </label>
									
								</div>
														

								<div class="eight columns"> 
									<input class="pledge-amount-button-text" id="pledge-amount-other" type="radio" name="pledge_amount" value="other" /> 
									<label for="pledge-amount-other"><span></span> Other </label> 
									$<input type="text" maxlength="10" id="pledge-amount-other-text" />
								</div>

							</div> 

						</div>

					</div>


<!-- 							<div class="row">

							 
								<div class="twelve columns">
									<label for="employee-amount"> Amount Donated (minimum $5) </label>
									<input type="text" id="employee-amount" name="pledge_amount"> </input>
								</div> 
							

						</div> -->
					<div class="check-amount-info">

					
						<div class="check-amount-wrapper">
							<div class="row">

								<div class="six columns">
									<input type="radio" id="check-all" name="number_of_checks" value="all" data-parsley-required />
									<label for="check-all"><span></span> Every <strong>Paycheck</strong> </label>
								</div>

								<div class="six columns">
									<input type="radio" id="check-amount" name="number_of_checks" value="0" />
									<label for="check-amount"><span></span>  Number of <strong>Paycheck(s)</strong> </label>
									<input type="text" maxlength="3" id="check-amount-text" />
								</div>

							</div>

						</div>

						<div class="row"> 	
							<label for="pledge-comments" id="pledge-comments-label"> Comments </label> 
							<textarea name="comments" id="pledge-comments"> </textarea>
						</div>

					</div>




					<!-- This is where the signature would usually be but we aren't going to add that her  -->

					<div class="form-button-control"> 
						<input class="pledge-submit" type="submit" value="Donate"/>
					</div>

			</form>


			<div class="pledge-form pledge-form-paypal">

		        <form target="_paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick" />
					<input type="hidden" name="hosted_button_id" value="TNF2W5BDUKCWA" />
					<input type="submit" value="Donate" name="submit" title="PayPal - The safer, easier way to pay online!" class="paypal-button-submit">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				</form>

			</div>


		</div>

	</body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/parsley.min.js"> </script>
	<script type="text/javascript" src="js/app.js"></script>
</html>



