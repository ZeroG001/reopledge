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
		</style>

			<ul class="form-menu">
				<div class="logo"> [ Insert Logo ] </div>
				<li class="loadit"> Load it </li>
				<li> My To-Do </li>
				<li> Show All </li>
				<li> Show Incomplete </li>
				<li> Log out </li>

			</ul>

		<div class="form-main-content">

			<div class="container-fluid fixed-top">

					<div class="form-list-header">

						<div class="row">
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 header-title"> 
								Name
							</div>


							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 header-title"> 
								 Amount
							</div>

							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 header-title"> 
								 Frequency
							</div>

							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 header-title"> 
								 Type
							</div>

							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 header-title"> 
								Status
							</div>

						</div>

					</div>

			</div>

			<div class="container-fluid form-list-container">

						<!-- Name -->
						<!-- Address -->
						<!-- Paynumber -->
						<!-- Date Submitted -->
						<!-- Status -->
						<!-- Action [complete, void, unvoid, incomplete, more] -->

					<div class="form-list-body">
						<!-- Under Notmal situation this would be a loop -->
						<a class="form-link" href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>

						<a href="uishow.php?id=5">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
									James Jamzon
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									Incomplete
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
									$200
								</div>
							</div>
						</a>




			</div> <!-- container fluid end -->

		</div>

	</body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"> </script>
	<script type="text/javascript" src="js/jquery.pjax.js"></script>
	<script type="text/javascript">

	(function($){
		$(document).pjax('a', '.form-main-content');

	})(jQuery);

	</script>
</html>