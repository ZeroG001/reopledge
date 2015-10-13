<?php 

?>



<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="stylesheet" type="text/css" href="css/dist/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/pledge.css">

	</head>

	<body>

		<style>

		/* 
		Color Palette 
		
		#E8F3F8
		#DBE6EC
		#C2CBCE
		#A4BCC2
		#81A8B8

		*/

			.form-main-content {
				left: 30rem; /*same width as sidebar */
				position: absolute;
				right: 0;
			}

			.form-main-content .row {
				margin: 0px;
				padding: 15px 5px;
			}

			.form-menu {
				box-sizing: border-box;
				position: fixed;
				list-style: none;
				margin: 0;
				padding: 0;
				top: 0;
				left: 0;
				display: inline-block;
				width: 30rem;
				height: 100%;
				color: #FFF;
				background-color: #81A8B8;
				z-index: 50;
				font-size: 1.8rem;
			}

			.form-menu li, .form-menu .logo {
				margin: 0;
				display: block;
				width: 100%;
				padding: 3rem 2rem;
				background-color: #81A8B8;
			}

			.form-menu li:hover {
				background-color: #A4BCC2;
				cursor: pointer;
			}



			/* === Form Header Styles === */

			.form-list-container {
				top: 80px; /* Same height as form-list-header */
				position: relative;
				display: block;
			}

			.form-list-header {
				box-sizing: border-box;
				display: block;
				background-color: #A4BCC2;
				text-align: center;
				font-size: 1.7rem;
				font-weight: bold;
			}

			.form-list-header .row {
				padding: 25px 5px;
			}


			/* === Form Body Styles === */
			.form-list-body {
				text-align: center;

			}

			.form-list-body .row {

				-webkit-transition: 0.1s ease-in-out;
				-moz-transition: 0.1s ease-in-out;
				-o-transition: 0.1s ease-in-out;
				transition: 0.1s ease-in-out;
				
			}

			.form-list-body .row a {
				backgrou
				nd-color: black;
			}
			.form-list-body .row:hover {
				background-color: #DBE6EC;
				cursor: pointer;
				-webkit-transition: 0.1s ease-in-out;
				-moz-transition: 0.1s ease-in-out;
				-o-transition: 0.1s ease-in-out;
				transition: 0.1s ease-in-out;
			}

			/* Helper Styles */
			.fixed-top {
    			top: 0;
       			position: fixed;
   				right: 0;
    			left: 30rem;
    			z-index: 40;
			}

			.slide-out {
				@-webkit-animation: slide-out 0.4s ease;
			}

			@-webkit-keyframes slide-out {
				from {left: 0; opacity: 1}
				to {left: 20px; opacity: 0}
			}

			.show-form-container {
				position: relative;
				padding: 30px;

				-webkit-animation: slide-in 0.4s ease-out;
				
			}

			.slide-out {
				-webkit-animation: slide-in 0.4s ease-out;
			}

			.show-form-list {
				margin: 0px;
				padding: 1rem 0rem;
				list-style: none;
				font-size: 1.7rem;
				padding: 2.0rem 0rem;
			}

			.button-nav-container .btn, #pledge-update-form input[type="submit"] {
				width: 10rem;
				padding: 0.7rem;
			}

			#pledge-update-form select {
    			font-size: 1.7rem;
		    	height: 35px;

			}
	

			#form-list-name {
				font-size: 1.5em;
			}

			#list-pledge-amount {
				font-size: 2.0em;
				color: DarkGreen;
			}

			#list-pledge-recur {
				font-size: 1.4em;
			}

			#list-pledge-recur strong {
				color: DarkRed;
			}

			#update-form select {
			    height: 3.2rem;
			}


			@-webkit-keyframes slide-in {
				from { left: 20px; opacity: 0; }
				to { left: 0; opacity: 1}
			}

		</style>

			<ul class="form-menu">
				<div class="logo"> [ Insert Logo ] </div>
				<li> My To-Do </li>
				<li> Show All </li>
				<li> Show Incomplete </li>
				<li> Log out </li>

			</ul>

		<div class="form-main-content"> <!-- Main content begin -->

			<div class="show-form-container">

			<div class="button-nav-container"> 
				<a href="ui.html"> <div class="btn btn-default"> Back </div> </a>
			</div>


			<h2> Real Estate Agent Pledge Form</h2>

			<div > 
				<p> <strong> Submitted on 10/14/2015 </strong> </p>
			</div>
			


			<ul class="show-form-list">
				<li>
					<span id="form-list-name"> James Jamzon </span>
				</li>

				<li>
					<span> 2933 Katella </span>
				</li>

				<li>
					<span> REO/JJ/MB </span>
				</li>

				<li>
					<span> Office #</span> 29
				</li>
			</ul>

			<ul class="show-form-list">


				<li>
					<span id="list-pledge-amount"> $10 </span>
				</li>

				<li>
					<span id="list-pledge-recur"> For <strong> 1 </strong> Comission/Paychecks </span>
				</li>
			</ul>

				<form id="pledge-update-form"> 
	
					<h3> Update Status </h3>
					<select name="status">
						<option> Processed </option>
						<option> Incomplete </option>
						<option> Void </option>
					</select>

				</form>

			</div>

		</div> <!-- form main content end -->

	</body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"> </script>
	<script type="text/javascript" src="js/jquery.pjax.js"></script>

</html>