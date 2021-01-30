<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
  <link id="theme-style" rel="stylesheet" href="assets/css/style.css">
  <link id="theme-style" rel="stylesheet" href="assets/css/bootstrap.css">
  
  <title>Dashboard</title>
</head>
<body style="background-image: url('assets/images/blue_sky.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2><span class="text-danger">Ans</span><span class="text-success">Web</span><span class="text-primary">App <small class="text-dark"><span class="text-muted">by</span> anselmolupague</small></h2>
          <p><strong>Welcome to the Anselmo Web Application!</strong></p>
		
		<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
          <div class="rounded" style="background-color: black; margin-bottom: 5px; padding: 2px; padding-left: 10px;">
            <h5 class="text-center" style="color: white;">Dashboard</h5>
            </div>
          <div class="card-group">
            <div class="card border border-light">
              <img class="rounded card-img-top border border-dark" src="assets/images/hbd_bg.png" alt="Card image cap">
                <div class="card-body" style="padding: 5px;">
                    <h5 class="card-title" style="margin-bottom: 1px;"><a class="text-dark" href="indexbd.php">Famous Birthday</a></h5>
                    <small>The website list of famous birthdays and also you can save yours too. </small>
                </div>
            </div>
            <br>
            <div class="card border border-light">
              <img class="rounded card-img-top border border-dark" src="assets/images/cat_bg.png" alt="Card image cap">
                <div class="card-body" style="padding: 5px;">
                    <h5 class="card-title" style="margin-bottom: 1px;"><a class="text-dark" href="https://­anselmolupague.github­.io/mimoland_meowbsite/">Mimoland Meowbsite</a></h5>
                    <small>It is a SIMPLE, CUTE, and ANIMAL FRIENDLY website for my meow pets.</small>
                </div>
            </div>
            <br>
            <div class="card border border-light">
              <img class="rounded card-img-top border border-dark" src="assets/images/me_bg.png" alt="Card image cap">
                <div class="card-body" style="padding: 5px;">
                    <h5 class="card-title" style="margin-bottom: 1px;"><a class="text-dark" href="https://­anselmolupague.neocit­ies.org/">My Personal Blog</a></h5>
                    <small>"You can Hate Me or You can Love Me but in the End only GOD can Judge Me."</small>
                </div>
            </div>
		</div>
		<div class="col-sm-12 border border-bottom-dark mt-3">
			
		</div>
		</div>
		<h5 class="col-sm-1"><a href="logout.php" class="mt-3 btn btn-danger">Logout</a></h5>
		</div>  
      </div>
    </div>
  </div>
  
  <script src="./js/jquery-3.5.1.slim.min.js" ></script>
  <script src="./js/bootstrap.bundle.min.js" ></script>
	
</body>
</html>