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
		<link rel="stylesheet" type="text/css" href="css/sk_grid.css">


		<style>

		/* 

		Color Palette 
		http://www.colourlovers.com/palette/2462496/Wireframed

		*/


		/* Modal Styles
		====================== */

			.pledge-modal {
				box-sizing: border-box;
				background-color: rgba(70,70,70,0.5);
				width: 100%;
				height: 100%;
				top:0;
				left:0;
				position: fixed;
				z-index: 40;
				opacity: 0;
				display: none;				
			}

			.modal-fadein {
				display: block;

				-moz-animation: modal-fadein 0.5s ease;
				-webkit-animation: modal-fadein 0.5s ease;
				-o-animation: modal-fadein 0.5s ease;
				animation: modal-fadein 0.5s ease;

				-webkit-animation-fill-mode: forwards;
				-o-animation-fill-mode: forwards;
				-moz-animation-fill-mode: forwards;
				animation-fill-mode: forwards;
			}


			.modal-slidein {
				display: block;

				-moz-animation: modal-slidein 0.5s ease;
				-webkit-animation: modal-slidein 0.5s ease;
				-o-animation: modal-slidein 0.5s ease;
				animation: modal-slidein 0.5s ease;

				-webkit-animation-fill-mode: forwards;
				-o-animation-fill-mode: forwards;
				-moz-animation-fill-mode: forwards;
				animation-fill-mode: forwards;
			}



			.pledge-modal-box {
				box-sizing: border-box;
				position: relative;
				background-color: #E8F3F8;
				display: block;
				height: 420px;
				min-width: 300px;
				max-width: 500px ;
				width: 100%;
				margin: 10% auto;
				padding: 10px;
				border-radius: 3px;
				top: 0;
			}

			.modal-button-footer {
				position: absolute;
				box-sizing: border-box;
				width: 100%;
				padding: 10px;
				bottom: 0;
				left: 0;

			}

			.modal-terms-container {
				background-color: #DBE6EC;
				padding: 10px;
			}

			.modal-terms-container p {
				font-size: 0.9rem;
				font-weight: normal;
			}



			/* Modal Animations */

			@-moz-keyframes modal-fadein {
				from {
					opacity: 0;
				}
				to {
					opacity: 1;
				}
			}

			@-webkit-keyframes modal-fadein {
				from {
					opacity: 0;
				}
				to {
					opacity: 1;
				}
			}


			@-o-keyframes modal-fadein {
				from {
					opacity: 0;
				}
				to {
					opacity: 1;
				}
			}


			@keyframes modal-fadein {
				from {
					opacity: 0;
				}
				to {
					opacity: 1;
				}
			}





			@-moz-keyframes modal-slidein {
				from {

					top: 50px;
				}
				to {
					top: 0px;
				}
			}

			@-webkit-keyframes modal-slidein {
				from {

					top: 50px;
				}
				to {
					top: 0px;
				}
			}

			@-o-keyframes modal-slidein {
				from {

					top: 50px;
				}
				to {
					top: 0px;
				}
			}

			@keyframes modal-slidein {
				from {

					top: 50px;
				}
				to {
					top: 0px;
				}
			}

			/* modal animations end */

		/* modal styles end */ 


		body {
			font-family: 'Open Sans', sans-serif;
		}


			.pledge-form {
				width: 600px;
				padding: 20px;
				background-color: #E8F3F8;
				
			}

			.pledge-form input[type="radio"] {
			    display:none;
			}
			.pledge-form input[type="radio"] + label {
			    color: #292321;
			}
			.pledge-form input[type="radio"] + label span {
			    display:inline-block;
			    width:19px;
			    height:19px;
			    margin:-1px 4px 0 0;
			    vertical-align:middle;
			    cursor:pointer;
			    -moz-border-radius:  50%;
			    border-radius:  50%;
			}

			.pledge-form input[type="radio"] + label span {
			     background-color:#292321;
			}

			.pledge-form input[type="radio"]:checked + label span{
			     background-color:red;
			}

			.pledge-form input[type="radio"] + label span,
			.pledge-form input[type="radio"]:checked + label span {
			  -webkit-transition:background-color 0.2s linear;
			  -o-transition:background-color 0.2s linear;
			  -moz-transition:background-color 0.2s linear;
			  transition:background-color 0.2s linear;
			}

			.pledge-form .row {
				margin: 10px 0px;
			}

			.pledge-form label:hover {
				cursor: pointer;
			}

			.pledge-form input[type="text"] {
				text-indent: 2px;
				border: 0px;
				border-radius: 2px;

			}

			#pledge-form-employee {
				display: hidden;
			
			}

			#pledge-form-sales-assoc {
				display: none;
				
			}

			.pledge-form-paypal {
				display: none;
				
			}


			.tab {
				display: inline-block;
				width: 150px;
				font-weight: bold;
				padding: 10px;
				text-align: center;
				box-sizing: border-box;
				background-color: #DBE6EC;
			}

			.tab-selected {
				border-bottom: 0px;
				background-color: #E8F3F8;
			}

			.tab:hover {
				cursor: pointer;
				
			}



			/* Pledge Form Custom Input Styles */
			.pledge-company-checkbox label {
				display: inline-block;
				width: 200px;
			}

			/* This is that small text box near the checkboxes */
			.pledge-company-checkbox input[type='text'] {
				width: 50px;
			}

			.input-office-number-container label {
				width: auto;
			}

			.input-office-number-container label,
			.input-office-number-container input {
				position: relative;
				left: 26px;
			}




			#check-amount-text {
				width: 60px;
			}


			/* custom styles end */

			/* Form Sections */
			.pledge-donar-info, 
			.pledge-company-checkbox,
			.pledge-check-info {
				box-sizing: border-box;
				/*border: 1px solid black;*/
				padding: 10px;
				background-color: #DBE6EC;
				margin-bottom: 10px;


			}

			/* form sections end */

			.pledge-form-paypal .paypal-button-submit {
				display: block;
				margin: 0px auto;
				font-family: inherit;
				font-size: 14px;
				font-weight: bold;
				color: #fff;
				text-align: center;
				padding: 10px 14px;
				width: 150px;
				height: 55px;
				background: #81A8B8;
				border: 0;
				cursor: pointer;
				outline: none;
			}

.paypal-button-submit:hover {
				background: #7198A8;
			}

			


			.pledge-tab-container {
				position: relative;
				top: 1px;
				display: block;
				width: 500px;
			}


			.pledge-company-checkbox .row {
				margin-bottom: 30px;
			}

			.pledge-check-info .row {
				margin-bottom: 30px;
			}

			.pledge-submit {
				display: block;
				width: 100%;
				height: 50px;
				margin: 50px auto 0px auto;
				background-color: #81A8B8;
				border: 0px solid black;
				color: white;
				border-radius: 5px;
			}

			.pledge-submit:hover {
				cursor: pointer;
				background-color: #7198A8; 
			}

			.terms-checkbox-container {
				width: 200px;
				text-align: center;
				margin: 0px auto;
			}

			.terms-checkbox-container label:hover {
				cursor: pointer;
			}

			.pledge-modal-close {
				border-radius: 50%;
				background-color: white;
				position: absolute;
				right: -15;
				top: -15;
			}

			.pledge-modal-close:hover {

				background-color: #DEDEDE;
				cursor: pointer;

			}

			.pledge-modal-submit {
				box-sizing: border-box;
				display: block;
				width: 100%;
				height: 50px;
				background-color: #81A8B8;
				border: 0px solid black;
				color: white;
				border-radius: 5px;
			}

			.pledge-modal-submit:hover {
				background-color: #7198A8;
			}

		</style>

	</head>

	<body>
		<h3> REO Pledge Form </h3>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


		<div class="sk-container">

		<!-- Pledge form modal -->
			<div class="pledge-modal">

				<div class="pledge-modal-box">

					<div class="pledge-modal-close">
						<img src="img/cancel-circle.png" /> 
					</div>

					<h4> Thank You, A little goes a long way. </h4>
					

					<div class="modal-terms-container">
						<h4> Terms and Conditions </h4>
						
						<p> By clikcing "I Agree" you are accepting the terms and contions. Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
							minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur 
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

				<div class="tab" id="pledge-form-tab2">
					Sales Assoc
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

			<form action="#" method="post" class="pledge-form" id="pledge-form-employee">

				<input type="hidden" name="pledge_type"value="employee" />

					<div class="pledge-donar-info">

						<div class="row">

							<div class="six columns">
								<label for="pledge-name"> Name </label>
								<input type="text" id="pledge-name" name="name" />
							</div>

							<div class="six columns">
								<label for="pledge-address"> Address </label>
								<input type="text" id="pledge-address" name="address" />
							</div>
							
						</div>

					</div>
				

 					<div class="pledge-company-checkbox">

	 					<div class="row">

	 						<div class="six columns">
								<input type="radio" id="check-reo-family" name="company" value="REO-Family" />
								<label for="check-reo-family" ><span></span> REO/MB/JJ/CR </label>

								<div class="input-office-number-container">
									<label for="check-office-number"><span></span> Office # </label>
									<input type="text" id="" name="office_number" value="" maxlength="4"/>
								</div>

							</div>

							<div class="six columns">
								<input type="radio" id="check-capital-title" name="company" value="capital-title" />
								<label for="check-capital-title"><span></span> Capital Title </label>
							</div>

						</div>

						<div class="row">



							<div class="six columns">
								<input type="radio" id="check-jamco-front-aamc" name="company" value="jamco-font-aamc" />
								<label for="check-jamco-front-aamc"><span></span> JAMCO/Front St/AAMC </label>
							</div>

							<div class="six columns">
								<input type="radio" id="check-insurance-one" name="company" value="insurance-one" />
								<label for="check-insurance-one"><span></span> Insurance One </label>
							</div>

						</div>
						

						<div class="row">

							<div class="six columns">
								<input type="radio" id="check-relo" name="company" value="insurance-one" />
								<label for="check-relo"><span></span> Relocation America </label>
							</div>

						</div>

					</div>

					<div class="pledge-check-info">

						<div class="row">

							<div class="twelve columns">
								<label for="employee-amount"> Amount Donated (minimum $5) </label>
								<input type="text" id="employee-amount" name="pledge_amount"> </input>
							</div>

						</div>


						<div class="row">

							<div class="six columns">
								<input type="radio" id="check-all" name="number_of_checks" value="all" />
								<label for="check-all"><span></span> Every <strong>Paycheck</strong> </label>
							</div>

							<div class="six columns">
								<input type="radio" id="check-amount" name="number_of_checks" value="0" />
								<label for="check-amount"><span></span>  Number of <strong>Paycheck(s)</strong> </label>
								<input type="text" maxlength="3" id="check-amount-text" />
							</div>

						</div>

					</div>


					<!-- This is where the signature would usually be but we aren't going to add that her  -->

					<div class="form-button-control"> 
						<input class="pledge-submit" type="submit" value="Donate"/>
					</div>

			</form>




			<!-- ========================================== -->
			<!-- ================ FORM 2 ================== -->
			<!-- ========================================== -->

			<!-- This form should post to a database -->
			<form action="#" method="post" class="pledge-form" id="pledge-form-sales-assoc">

				<input type="hidden" name="pledge_type" value="sales_assoc" />

					<div class="pledge-donar-info">
						<div class="row">

							<div class="six columns">
								<label for="assoc-pledge-name"> Name </label>
								<input type="text" id="assoc-pledge-name" name="name" />
							</div>

							<div class="six columns">
								<label for="assoc-pledge-address"> Address </label>
								<input type="text" id="assoc-pledge-address" name="address" />
							</div>

						</div>
					</div>

				<div class="pledge-company-checkbox">

	 					<div class="row">

	 						<div class="six columns">
								<input type="radio" id="assoc-check-reo-family" name="company" value="REO-Family" />
								<label for="assoc-check-reo-family" ><span></span> REO/MB/JJ/CR </label>

								<div class="input-office-number-container">
									<label for="check-office-number"> Office # </label>
									<input type="text" id="" name="office_number" value="" maxlength="4"/>
								</div>

							</div>

							<div class="six columns">
								<input type="radio" id="assoc-check-capital-title" name="company" value="capital-title" />
								<label for="assoc-check-capital-title"><span></span> Capital Title </label>
							</div>

						</div>

						<div class="row">



							<div class="six columns">
								<input type="radio" id="assoc-check-jamco-front-aamc" name="company" value="jamco-font-aamc" />
								<label for="assoc-check-jamco-front-aamc"><span></span> JAMCO/Front St/AAMC </label>
							</div>

							<div class="six columns">
								<input type="radio" id="assoc-check-insurance-one" name="company" value="insurance-one" />
								<label for="assoc-check-insurance-one"><span></span> Insurance One </label>
							</div>

						</div>
						

						<div class="row">

							<div class="six columns">
								<input type="radio" id="assoc-check-relo" name="company" value="insurance-one" />
								<label for="assoc-check-relo"><span></span> Relocation America </label>
							</div>

						</div>

					</div>


					<div class="pledge-check-info">

						<div class="row">

							<div class="twelve columns">
								<label for="assoc-employee-amount"> Amount Donated (minimum $5) </label>
								<input type="text" name="assoc-pledge_amount"> </input>
							</div>
							
						</div>

						<div class="row">

							<div class="six columns">
								<input type="radio" id="assoc-check-all" name="number_of_checks" value="all" />
								<label for="assoc-check-all"><span></span> Every <strong>Comission Check</strong> </label>
							</div>

							<div class="six columns">
								<input type="radio" id="assoc-check-amount" name="number_of_checks" value="0" />
								<label for="assoc-check-amount"><span></span> # of Comission Check(s) </label>
								<input type="text" maxlength="3" id="check-amount-text" />
							</div>

						</div>


						<div class="row">

							<div class="twelve columns">
								<label for="assoc-paynumber"> Pay Number</label>
								<input type="text" name="assoc-paynumber" id="paycheck" maxlength="6">
							</div>

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
	<script type="text/javascript" src="js/app.js"></script>
</html>



