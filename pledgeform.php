<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST)) {
	var_dump($_POST);
}	

?>

<html>


	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="Viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

		

		<link rel="stylesheet" type="text/css" href="css/sk_grid.css">


		<style>

		/* 

		Color Palette 
		http://www.colourlovers.com/palette/2462496/Wireframed

		*/
			/* remove this use something else */
			.pledge-form {
				width: 600px;
				padding: 50px;
				border: 1px solid black;
			}

			.pledge-form .row {
				margin: 10px 0px;
			}

			.pledge-form label {
				display: inline-block;
				width: 190px;
			}

			.pledge-form input {
				border: 0px;
				border-bottom: 1px solid black;
			}

			#pledge-form-employee {
				display: hidden;
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

			.pledge-form-paypal button {
				width: 200px;
				height: 50px;
				background-color: #A0A4AA;
				border: 1px solid #F0F0F0;
				border: 0px;
				display: block;
				font-size: 1.2rem;
				color: white;
				margin: 0px auto;
			}

			.pledge-tab-container {
				position: relative;
				top: 1px;
				display: block;
				width: 500px;
			}

			.tab {
				display: inline-block;
				width: 150px;
				border: 1px solid black;
			}

			.tab-selected {
				border-bottom: 0px;
				background-color: #F0F0F0;
			}

			.tab:hover {
				cursor: pointer;
				background-color: #F0F0F0;
			}


			.pledge-company-checkbox .row {
				margin-bottom: 5px;
			}

			.pledge-submit {
				display: block;
				width: 100%;
				height: 50px;
				margin: 50px auto 0px auto;
				
			}

			.pledge-submit button {
				color: white;
				display: block;
				background-color: #A0A4AA;
				border: 1px solid #F0F0F0;
				width: 200px;
				height: 50px;
				margin: 0px auto;
				font-size: 1.2rem;
			}

			.pledge-submit button:hover {
				cursor: pointer;
				background-color: #B0B4BA; 
			}
		</style>
	</head>

	<body>
		<h1>REO Pledge Form Wireframe </h1>

		<div class="sk-container">

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
			-->

			<!-- Employee Form -->


			<!-- ========================================== -->
			<!-- ================ FORM 1 ================== -->
			<!-- ========================================== -->

			<form action="#" method="post" class="pledge-form" id="pledge-form-employee">

				<input type="hidden" name="pledge_type"value="employee" />


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

					<h3> Company </h3>
 					

 					<div class="pledge-company-checkbox">

	 					<div class="row">

	 						<div class="twelve columns">
								<label for="check-reo-family" > REO/MB/JJ/CR </label>
								<input type="radio" id="check-reo-family" name="company" value="REO-Family" />

								<label for="check-office-number"> Office # </label>
								<input type="text" id="" name="office_number" value="" maxlength="5"/>
							</div>

						</div>

						<div class="row">

							<div class="six columns">
								<label for="check-capital-title"> Capital Title </label>
								<input type="radio" id="check-capital-title" name="company" value="capital-title" />
							</div>

							<div class="six columns">
								<label for="check-jamco-front-aamc"> JAMCO/Front St/AAMC </label>
								<input type="radio" id="check-jamco-front-aamc" name="company" value="jamco-font-aamc" />
							</div>

						</div>
						

						<div class="row">


							<div class="six columns">
								<label for="check-insurance-one"> Insurance One </label>
								<input type="radio" id="check-insurance-one" name="company" value="insurance-one" />
							</div>

							<div class="six columns">
								<label for="check-relo"> Relocation America </label>
								<input type="radio" id="check-relo" name="company" value="insurance-one" />
							</div>

						</div>

					</div>

					<div class="row">

						<div class="twelve columns">
							<label for="employee-amount"> Amount Donated (minimum $5) </label>
							<input type="text" name="pledge_amount"> </input>
						</div>

					</div>


					<h3> Number of comission check(s) to donate from: </h3>

					<div class="row">

						<div class="six columns">
							<input type="radio" id="check-all" name="number_of_checks" value="all" />
							<label for="comission-check-frequency"> Every Paycheck </label>
						</div>

						<div class="six columns">
							<input type="radio" id="check-amount" name="number_of_checks" value="0" />
							<label for="check-amount"> Number of Paycheck(s) </label>
							<input type="text" maxlength="3" id="check-amount-text" />
						</div>

					</div>


					<!-- This is where the signature would usually be but we aren't going to add that her  -->

					<div class="pledge-submit"> 
						<button> Donate </button>
					</div>

			</form>




			<!-- ========================================== -->
			<!-- ================ FORM 2 ================== -->
			<!-- ========================================== -->

			<!-- This form should post to a database -->
			<form action="#" method="post" class="pledge-form" id="pledge-form-sales-assoc">

				<input type="hidden" name="pledge_type"value="sales_assoc" />

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

					<h3> Company </h3>
 				

 					<div class="pledge-company-checkbox">

	 					<div class="row">

	 						<div class="twelve columns">
								<label for="check-reo-family" > REO/MB/JJ/CR </label>
								<input type="radio" id="check-reo-family" name="company" value="REO-Family" />

								<label for="check-office-number"> Office # </label>
								<input type="text" id="" name="office_number" value="" maxlength="5"/>
							</div>

						</div>

						<div class="row">

							<div class="six columns">
								<label for="check-capital-title"> Capital Title </label>
								<input type="radio" id="check-capital-title" name="company" value="capital-title" />
							</div>

							<div class="six columns">
								<label for="check-jamco-front-aamc"> JAMCO/Front St/AAMC </label>
								<input type="radio" id="check-jamco-front-aamc" name="company" value="jamco-font-aamc" />
							</div>

						</div>
						

						<div class="row">

							<div class="six columns">
								<label for="check-insurance-one"> Insurance One </label>
								<input type="radio" id="check-insurance-one" name="company" value="insurance-one" />
							</div>

							<div class="six columns">
								<label for="check-relo"> Relocation America </label>
								<input type="radio" id="check-relo" name="company" value="insurance-one" />
							</div>

						</div>

					</div>


					<div class="row">

						<div class="twelve columns">
							<label for="employee-amount"> Amount Donated (minimum $5) </label>
							<input type="text" name="pledge_amount"> </input>
						</div>
						
					</div>

					<h3> Number of comission check(s) to donate from: </h3>

					<div class="row">

						<div class="six columns">
							<input type="radio" id="check-all" name="number_of_checks" value="all" />
							<label for="comission-check-frequency"> Every Comission Check </label>
						</div>

						<div class="six columns">
							<input type="radio" id="check-amount" name="number_of_checks" value="0" />
							<label for="check-amount"> # of Comission Check(s) </label>
							<input type="text" maxlength="3" id="check-amount-text" />
						</div>

					</div>


					<div class="row">

						<div class="twelve columns">
							<label for="paynumber"> Pay Number</label>
							<input type="text" name="paynumber" id="paycheck" maxlength="6">
						</div>

					</div>

					<!-- This is where the signature would usually be but we aren't going to add that her  -->

					<div class="pledge-submit"> 
						<button> Donate </button>
					</div>

			</form>

			<div class="pledge-form pledge-form-paypal">
				<button> PayPal </button>
			</div>


		</div>

	</body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</html>



