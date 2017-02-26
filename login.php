<!DOCTYPE html>
<html>
<head>
	<title>
		Log In
	</title>

	<link rel="icon"  href="img/images.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta name="description" content="Log In to unlock Interesting Articles">
	<meta name="author" content="Anita and Radhika Team">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
  <style type="text/css">
  
    #title{
      font-size: 50px;
      font-family: forte;
      text-align: centre;
    }  
  </style>


</head>
<body>
  <centre>
    <span id="title"><strong>Welcome to The Zodiac website.</strong></span>
  </centre>
  <br>
  <br>

	<div class="container">

      <form action="process.php" class="form-signin" method="POST">

              <h2 class="form-signin-heading">Please Log in</h2>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" name="inputPassword"  class="form-control" placeholder="Password" required>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>

      </form>

      <br>
      <br>

      <form action="SignIn.php" class="form-signin" method="POST">

              <h2 class="form-signin-heading">Please Sign in</h2>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="getEmail" name="getEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="getPassword" name="getPassword"  class="form-control" placeholder="Password" required>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      </form>


    <div class="grey-background" style="margin-top:316px">
      <div class="container" style="margin-bottom:0">
        <footer id="footer">
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017 Zodiac &middot; Made with <span id="heart"> &hearts; </span>by Anita MC and Radhika Jain</p>
        </footer>
      </div>
    </div>
    
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>