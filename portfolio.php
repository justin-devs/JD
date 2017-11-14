<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/diamonds.css">
</head>
<body id="particles-js">
    <nav class="navbar navbar-inverse navbar-brand-top bootsnav">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand"><img src="img/logoJD.png" class="logo img-responsive" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="index.php?">Home</a></li>
                <li><a href="index.php?#about">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="index.php?#contact">Contact</a></li>
                <li><a href="index.php?#training">Resume</a></li>                    
               
            </ul>
        </div><!-- /.navbar-collapse -->
      
</nav>
<div class="container pnl">
        <ul class="nav nav-pills nav-justified">
          <li id="press" class="active"><a href="#main" data-toggle="pill">My Projects</a></li>
          <li id="presss"><a href="#virsys" data-toggle="pill">Virsys Projects</a></li>
          <li id="press"><a href="#side" data-toggle="pill">Side Projects</a></li>
        </ul>


<div class="tab-content">
    <div id="main" class="tab-pane fade in text-center active">
        <div class="row"><h3>My Projects</h3>
            <div id="main">
                <div class="demo">
                    <a href="#" class="item"><img src="img/yummychickens.jpeg" class="main img-responsive"><div class="textmid">YummyChickens</div><div class="overlay"><div class="text">View Project</div></div></a>
                     <a href="#" class="item"><img src="img/2.jpeg" class="main img-responsive"><div class="textmid">Cordova</div><div class="overlay"><div class="text">View Project</div></div></a>
                </div>
            </div>
        </div>
    </div>
    <div id="virsys" class="tab-pane text-center fade">
        <div id="virsys">
                <div class="demo">
                    <div class="item"><img src="img/main-image.jpg" class="main img-responsive"><div class="textmid">CSB BodyFusion</div><div class="overlay"><div class="text">View Project</div></div></div>
                     <a href="#" class="item"><img src="img/dietdr.jpg" class="main img-responsive"><div class="textmid">Diet Doctor</div><div class="overlay"><div class="text">View Project</div></div></a>
                     <a href="#" class="item"><img src="img/3.jpg" class="main img-responsive"><div class="textmid">Web Architect</div><div class="overlay"><div class="text">View Project</div></div></a>
                </div>
        </div>
    </div>
    <div id="side" class="tab-pane text-center fade">
        <div id="side">
                <div class="demo">
                    <a href="#" class="item"><img src="img/1.jpeg" class="main img-responsive"><div class="textmid">WA Mobile</div><div class="overlay"><div class="text">View Project</div></div></a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>  
<script type="text/javascript" src="js/jquery.diamonds.js"></script>
<script type="text/javascript" src="./js/particles.min.js"></script>
<script>

    particlesJS.load('particles-js', 'particlesjs-config.json')


    
        diamonds();


function diamonds(){
    const mq = window.matchMedia( "(max-width: 960px)" );

    if (mq.matches) {
       $("#main").diamonds({
            size : 130, // Size of diamonds in pixels. Both width and height. 
            gap : 3, // Pixels between each square.
            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".item" // the css selector to use to select diamonds-items.
        });
        $("#virsys").diamonds({
            size : 130, // Size of diamonds in pixels. Both width and height. 
            gap : 3 , // Pixels between each square.
            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".item" // the css selector to use to select diamonds-items.
        });
        $("#side").diamonds({
            size : 130, // Size of diamonds in pixels. Both width and height. 
            gap : 3 , // Pixels between each square.
            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".item" // the css selector to use to select diamonds-items.
        });
    } else {
        $("#main").diamonds({
            size : 250, // Size of diamonds in pixels. Both width and height. 
            gap : 3 , // Pixels between each square.
            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".item" // the css selector to use to select diamonds-items.
        });
     $("#virsys").diamonds({
            size : 250, // Size of diamonds in pixels. Both width and height. 
            gap : 3 , // Pixels between each square.
            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".item" // the css selector to use to select diamonds-items.
        });
     $("#side").diamonds({
            size : 250, // Size of diamonds in pixels. Both width and height. 
            gap : 3 , // Pixels between each square.
            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".item" // the css selector to use to select diamonds-items.
        });
    }
     }

</script>

</body>
</html>