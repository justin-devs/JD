
			<?php include './mailer/antispam.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Justin Devs</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body data-aos="fade-right">
<nav   class="navbar navbar-inverse navbar-brand-top bootsnav">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand"><img src="img/logoJD.png" class="logo img-responsive" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="portfolio.php?">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#resume">Resume</a></li>                    
               
            </ul>
        </div><!-- /.navbar-collapse -->  
</nav>

<section id="home" class="wrappee">
	<div class="container center" >
			<div class="col-xs-12 center-block text-center">
					<h1>Full Stack Web Developer</h1>
					<h2>Justin Joseph</h2>		
				<div><img src="./img/me.png" alt="Me" class="center-block img-responsive"></div>
			</div>
	</div>
</section>

<section data-aos="fade-up" id="about">
	<div class="container">
		<div class="row" >
			<h2 class="text-center">About<br><img src="img/sliders.png" class="center-block img-responsive" alt=""></h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="text-left"><h2 class="turqoise">What I do:</h2></div>
						<p>Up until now I was a full time Bsc Computer Science student spending 70% of my free time on perfecting my development skills. After fiddling the first time with css in my preteens, web development rapidly grew as an interest and I never looked back.</p>
						<p>I design and create functional web applications tailored to customers strictest specifications. Modern and minimilastic is the main approaches in my design process. I also believe in neat, effective programming principles.</p>
			</div>
			<div data-aos="zoom-out" data-aos-duration="2000" class="col-md-4 text-center">
				<img src="./img/selfie.jpg" alt="me" class="img-responsive center-block img-circle">
				<a href="https://www.facebook.com/Jj6225" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
				<a href="" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="https://www.instagram.com/justn420" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="www.linkedin.com/in/justin-devs" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
				<a href="https://github.com/justin-devs" target="_blank"><i class="fa fa-github fa-2x"></i></a>
			</div>
			<div class="col-md-4">
				<div class="text-left"><h2 class="turqoise">Personal Info:</h2></div>
						<div class="table-responsive">
							<table class="table table-hover">
								<tr><td>Name: </td><td>Justin Joseph</td></tr>
								<tr><td>DOB: </td><td>1997/07/12</td></tr>
								<tr><td>Location: </td><td>Moreleta Park</td></tr>
								<tr><td>Nationality: </td><td>South African</td></tr>
								<tr><td>Phone: </td><td> (+27)81 563 7681</td></tr>
								<tr><td>Email:</td><td>justin@justindevs.co.za</td></tr>
							</table>
						</div>
			</div>
		</div>
	</div>
	<br>
</section>
<section id="portfolio">
	<div class="container pt text-center">
		<div data-aos="fade-right"><a href="./portfolio.php" ><button class="btn btn-default btn-custom btn-round-lg "><div class="text">View my Portfolio</div></button></a></div>
	</div>
</section>
<section data-aos="zoom-in-down" id="contact">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Contact Me<br><img src="img/sliders.png" class="center-block img-responsive" alt=""></h2>
		</div>
		<div class="row">
			<form role="form" method="post" action="./index.php?#contact" class="go-right center-block">
		        <p>Do you have an enquiry or a project for me to work on? I love working!</p>
				<div class="form-group">
					<input id="name" name="name" type="text" class="form-control" required>
					<label for="name">Your Name</label>
				</div>
				<div class="form-group">
					<input id="email" name="email" type="email" class="form-control" required>
					<label for="email">Email</label>
				</div>
				<div class="form-group">
					<textarea id="message" name="message" class="form-control" required></textarea>
					<label for="message">Message</label>
				</div>
				<button type="submit" class="btn btn-inverted btn-round center-block">Submit Message</button>
				
			</form>
			<p class="bg-success"><?php echo $response; ?></p>
		</div>
	</div>
</section>
<section id="resume">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Resume<br><img src="img/sliders.png" class="center-block img-responsive" alt=""></h2>
		</div>
		<div class="row">
			<p>Do you believe I'd be an asset to your company, like I do? Check out my resume: </p>
			<form action="index.php?#resume" method="POST">
				<p  style="color: Green;"><?php echo $cv; ?></p>
				<div class="col-md-offset-2 col-xs-8 col-md-6 resume"><input id="cv" name="cv" type="email" placeholder="Enter your email" class="form-control white" required></div>
				<div class="col-xs-4 col-sm-4 col-md-4 resume"><button type="submit" class="btn btn-block btn-mine">Email CV</button></div>
			</form>
		</div>
		<div class="row">
				<a class href="./Justin_Resume.pdf" download><button class="btn center-block btn-round space btn-mine">Download Resume (PDF)</button></a>
		</div>
	</div>
</section>


<div class="footer">
	<div class="text-center">Copyright 2017 Justin Devs&copy;</div>
</div>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>

  <script>
    AOS.init();
  </script>
	
</body>
</html>