<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- <!DOCTYPE html>
<html> -->
<head>
	<title>Klassy cafe login</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="public/assets/css/login.css">
	

	<style>
		.social_icon  span {
			color:#fb5949;
		}
		.login_btn{
			background-color:#fb5949;
		}
		.input-group-prepend span{
			background-color: #fb5949;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="font-size: 25px;">Forgot Password</h3>
				<div class="d-flex justify-content-end social_icon" style="margin-top: 30px;" >
					<span><i class="fab fa-facebook-square" style="font-size: 40px;" ></i></span>
					<span><i class="fab fa-google-plus-square"style="font-size: 40px;" ></i></span>
					<span><i class="fab fa-twitter-square" style="font-size: 40px; " ></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action = "index.php?act=forgot"  method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username" >
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-regular fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="email" name="email" >
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="phone" name="phone">
					</div>

					<div class="form-group">
						<input type="submit" value="Submit" class="btn float-right login_btn" name="submit" >
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
