
<!DOCTYPE html>
<html>
<head>
	<title>Hanthana Register</title>  
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />

	<style type="text/css"> 

  html {
      background: url(dream2.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  body {
    background: transparent;
  }


	.wrapper {    
	   margin-top: 80px;
	   margin-bottom: 20px;
	   }

  .form-signin {
    max-width: 420px;
    padding: 30px 38px 66px;
    margin: 0 auto;
    background-color: rgba(255, 125, 50, 0.4);;
    border: 3px dotted rgba(0,0,0,0.1);  
    }

  .form-signin-heading {
    text-align:center;
    margin-bottom: 30px;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
  }

  input[type="text"] {
    margin-bottom: 0px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }





	</style>
</head>
<body>
<div class = "container">
	<div class="wrapper">
		<form action= "connect.php" method="POST" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  
			  
			  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
        <input type="text" class="form-control" name="email" placeholder="email" required=""/>  
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="signup" type="Submit">SignUp</button>  			
		</form>			
	</div>
</div>
</body>
</html>