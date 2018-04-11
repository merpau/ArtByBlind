<!DOCTYPE html>
<html lang="en">
<head>
  <title>Art By Blind</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="site.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class=" skew navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand skew hidden-sm hidden-xs" href="#myPage">ART BY BLIND</a>
    </div>
    <img class="logo" src="logo.png">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		  <li><a class="nav-link" href="#art">ART</a></li>
        <li><a class="nav-link" href="#about">ABOUT</a></li>
        <li><a class="nav-link" href="#donate">DONATE</a></li>
        <li><a class="nav-link" href="#contact">CONTACT</a></li>
        <li><a href="login.php">LOGIN<span class="glyphicon glyphicon-user"></span></p></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="jumbotron b-tron" style="margin-top:7em;">
	 <div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

        <div class="item active">
      <img src="caro3.png" alt="...">
    </div>
        <div class="item">
      <img src="caro2.png" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	  </div>
	</div>
</div>

<div class="container-fluid">
<div class="jumbotron b-tron">
<div class="container">
	<div class="info">
<h3 >Role based Login System in PHP</h3>
<div class="col-md-6 col-md-offset-3">
<h4>Log in with your credentials</h4><br/>
<div class="block-margin-top">
 <?php
	//Associate array to display 2 types of error message.
	$errors = array( 1=>"Invalid user name or password, Try again",
				     2=>"Please login to access this area" );
	//Get the error_id from URL
	$error_id="0";
	$error_id = $_GET['err'];
	if  ($error_id == 1)
	{
		echo '<p class="text-danger">'.$errors[$error_id].'</p>';
	}
	elseif ($error_id == 2)
	{
		echo '<p class="text-danger">'.$errors[$error_id].'</p>';
	}?>

<form action="authenticate.php" method="POST" 
class="form-signin col-md-8 col-md-offset-2" role="form">  
   <input type="text" name="username" class="form-control" 
   				placeholder="Username" required autofocus><br/>
   <input type="password" name="password" class="form-control" 
   				placeholder="Password" required><br/>
   <button class="btn btn-lg btn-primary btn-block" 
   					type="submit">Sign in</button>
</form>
                           </div>
            </div>

      </div>
	</div>
</div>
</div>
<div class="container-fluid">
	<div class="jumbotron b-tron-alt">
		<div class="container">
	 		
	</div>
	  </div>
	</div>
</div>
<div class="container-fluid">
	<div class="jumbotron b-tron">
	 <div class="container">
	</div>
</div>

	<div class="b-modal hide">
	 <div class="b-modal-content">
	 <span class="close">&times;</span>
		 <div class="row">
		  <img class="img-thumbnail" src="resumepng.png" style="font-size:200px;">
	</div>
  	 <div class="row">
	  <a class="btn btn-lg btn-custom " href="resume.pdf" role="button">DOWNLOAD</a>
	  </div>
	  </div>
	</div>
	</div>
	
	
	
	<!--add login here-->
<div class="footer">
	<div class="container center">
	<div class="col-xs-12">
			<div class="col-lg-4"><h4>andrewblesener@gmail.com</h4></div>
			<div class="col-lg-4"><h4>Andrew Blesener 2018</h4></div>
			<div class="col-lg-4"><h4>651-492-7164</h4></div>
		</div>
		</div>
	</div>
<script> 
	//expanding skills table
$(document).ready(function(){
	
    $(".trExpand1").click(function(){
        $(".trHide1").slideToggle(function(){
			if ($(this).is(':visible')) {
             $(".btnExpand1").text("--");                
        } else {
             $(".btnExpand1").text('+');                
        }   
		});
    });
	    $(".trExpand2").click(function(){
        $(".trHide2").slideToggle(function(){
			if ($(this).is(':visible')) {
             $(".btnExpand2").text("--");                
        } else {
             $(".btnExpand2").text('+');                
        }   
		});
    });
	    $(".trExpand3").click(function(){
        $(".trHide3").slideToggle(function(){
			if ($(this).is(':visible')) {
             $(".btnExpand3").text("--");                
        } else {
             $(".btnExpand3").text('+');                
        }   
		});
    });
});
</script>
<script>
	//resume modal
$(document).ready(function(){
	$(".modalBtn").click(function(){
		$(".b-modal").addClass("appear").removeClass("hide");
	});
	$(".close").click(function(){
		$(".b-modal").addClass("hide").removeClass("appear");
	});
});
</script>
<script>
	//navigation scrolling
	$('.nav-link').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});</script>
	</body>
</html>
