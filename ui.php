<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="stylesheet" type="text/css" href="css/dist/bootstrap/css/bootstrap.min.css">
	</head>

	<body>

		<style>

		/* 

		color palette 
		
		#E8F3F8
		#DBE6EC
		#C2CBCE
		#A4BCC2
		#81A8B8


		*/

			.form-main-content {
				border: 1px solid black;
				left: 30rem;
				position: absolute;
				right: 0;
			}

			.form-menu {
				position: fixed;
				list-style: none;
				margin: 0;
				padding: 0;
				top: 0;
				left: 0;
				display: inline-block;
				width: 30rem;
				height: 100%;
				background-color: #A4BCC2;
				z-index: 50;
			}

			.form-menu li {
				margin: 0;
				display: block;
				font-size: 1.7rem;
				width: 100%;
				padding:3rem 2rem;
				background-color: #A4BCC2;

			}

			.form-menu li:hover {
				background-color: #C2CBCE;
				cursor: pointer;
			}

			
			.form-list-container {
				position: relative;
				display: block;
				border: 1px solid black;
			
			}


		</style>

		
			

			<ul class="form-menu">
				<li> My To-Do </li>
				<li> Show All </li>
				<li> Show Incomplete </li>
			</ul>

		<div class="form-main-content">
			<div class="container-fluid form-list-container">


					<div class="form-header">
						<div class="col-sm-2 col-md-2 col-lg-2 offset"> 
							Name
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2"> 
							Address
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2"> 
							Paynumber
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2"> 
							date Submitted
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2"> 
							Status
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2"> 
							Action
						</div>
						<!-- Name -->
						<!-- Address -->
						<!-- Paynumber -->
						<!-- Date Submitted -->
						<!-- Status -->
						<!-- Action [complete, void, unvoid, incomplete, more] -->
					</div>
		</div>

			</div>
	</body>
</html>