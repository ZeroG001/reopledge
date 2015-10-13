<!-- 
	php code

	// THer conrtoller determines what kind of content is shown on the screen.

	// Import controller here.

	//The controllher has different class functions. Each function represent the different type of post request passed to the view 
	// maybe I can use the same page for all 
	if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_POST['search'])) {
		// Run the search
	} else {
		// Run the normal get all function
	}

-->

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

			.form-main-content .container-fluid {
				min-width: 520px;
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
				background-color: #E6E8E3;
				z-index: 50;
				font-size: 1.8rem;
			}

		 .form-menu .menu-logo,
		 .form-menu .menu-search,
		 .form-menu li {
				margin: 0;
				display: block;
				padding: 2rem 2rem;
				width: 100%;
				background-color: #E6E8E3;
			}

			.form-menu li:hover {
				background-color: #4DBCE9;
				cursor: pointer;
			}

			.form-menu a {
				text-decoration: none;
				color: black;
			}

			.form-menu a:visited {
				color: inherit;
			}

			.form-search-input {
				width: 18rem;
				color: black;
				border: 0px solid black;
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
				background-color: #D7DACF;
				text-align: center;
				/*font-size: 1.7rem;*/
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

				<div class="menu-logo"> [ Form Manage logo ] </div>

				<div class="menu-search"> 
					<form method="GET" action="forms/search">
						<input type="text" class="form-search-input" name="search" />
						<input class="form-search-submit btn btn-default" type="submit" value="Search" />
					</form>
				</div>

				<a href="forms/todo.php">
					<li> 
						My Todo List
					</li>
				</a>

				<a href="forms/all.html"> 
					<li>
						Show All	
					</li> 
				</a>

				<a href="forms/incomplete.php">
					<li> 
						Show Incomplete
					</li>
				</a>

				<a href="logout.php"> 
					<li> Log out </li>
				</a>

			</ul>

		<div class="form-main-content">

			<div class="container-fluid fixed-top form-list-header">

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
						<a class="form-link" href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

						<a href="uishow.html?id=5">
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

		</div> <!-- form main content end

	</body>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"> </script>
	<script type="text/javascript" src="js/jquery.pjax.js"></script>
	<script type="text/javascript">

	// (function($){
	// 	$(document).pjax('a', '.form-main-content');

	// })(jQuery);

	</script>
</html>