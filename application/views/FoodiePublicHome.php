<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<script type="text/javascript">
	window.onload = function(){ 
	//Get submit button
	var submitbutton = document.getElementById("tfq");
	//Add listener to submit button
	if(submitbutton.addEventListener){
		submitbutton.addEventListener("click", function() {
			if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
				submitbutton.value = '';
			}
		});
	}
}
</script>

    <title>FOODIE </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/resources/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="
http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,
700,800" rel="stylesheet" type="text/css">
    <link href="
http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic
,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Foodie</div>
    <div class="address-bar">A convinient hub for the food lovers!!
		<div class="text-right" style="margin-right:1em;margin-top:-2em;margin-bottom:-2em">
		
		        <input type="text" id="tfq" class="tftextinput2" name="q" size="41" maxlength="720" value="Search 
our website" style="width:20%"><input type="submit" value=">" class="tfbutton2">
		
		<div class="tfclear"></div>
	</div>
	</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=
"#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">FOODIE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url('foodieHome/index');?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('foodieHome/indian');?>">Indian</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('foodieHome/italian');?>">Italian</a>
                    </li>
					  <li>
                        <a href="<?php echo site_url('foodieHome/chinese');?>">Chinese</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('foodieHome/continental');?>">Continental</a>
                    </li>
					 <li>
                        <a href="<?php echo site_url('foodieHome/thai');?>">Thai</a>
                    </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
<div  class="col-lg-3">

     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a href="<?php echo site_url('foodieHome/login');?>"> User Login</a>
        </h4>
      </div>
  </div>
<strong><h1 class="sideText">Categories</h1></strong>  
       <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Recent</a>
        </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">  <ul class="list-group">
          <li class="list-group-item"><a href="Spring Rolls">Spring Rolls</a></li>
          <li class="list-group-item"><a href="Butter">Butter Chicken</a></li>
          <li class="list-group-item"><a href="Sizl">Chicken Sizzlers</a></li>
        </ul>
        <div class="panel-footer"><a href="recent">More..</a></div></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Popular</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item"><a href="Spring Rolls">Pizza</a></li>
          <li class="list-group-item"><a href="Butter">Chocolava</a></li>
          <li class="list-group-item"><a href="Sizl">Paneer Tikka</a></li>
        </ul>
         <div class="panel-footer"><a href="recent">More..</a></div></div>
    </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Most Viewed Recipe</a>
        </h4>
      </div>
  </div>
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Chef of the Month</a>
        </h4>
      </div>
  </div>  
</div>


<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                     <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
							
							
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-2.jpg" alt="">
                            </div>
							
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-3.jpg" alt="">
                            </div>
							<div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-1.jpg" alt="">
                            </div>
							<div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-5.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Based on star ratings</small>
                    </h2>
                    <h1 class="brand-name">RECIPES OF THE MONTH</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Viewers and Contributors</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Dessert </strong>of the month
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url(); ?>/resources/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p><strong>Raspberry-Filled Molten Chocolate Cupcakes.</strong></p>
                    <p>Preheat oven to 400 degrees. Line 12 cup standard muffin tin cups with paper liners. In a large bowl with a mixer, beat butter and sugar on medium high until light and fluffy, about 2 minutes. Add eggs, one at a time, beating well after each addition. With mixer on low, beat in flour and salt. Beat in chocolate until just combined.
</p>
                    <p><a href="more" class="floating-link">more </a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Snack </strong>of the month
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url(); ?>/resources/img/spring.jpg" alt="">
                    <hr class="visible-xs">
                    <p><strong>Mini Vegetable Spring Rolls</strong></p>
                    <p>No urging needed to finish these veggies. When you cook  Mini Vegetable Spring Rolls as a quick and easy Asian-style snack for your family, they’ll discover fresh-cut vegetables inside a delicate, crispy wrapper. The sweet chili dipping sauce only adds to the Asian-inspired experience. It’s a taste discovery that takes mere minutes to prepare at either snack time or dinnertime.</p>
                    <p><a href="more" class="floating-link">more </a></p>
                </div>
            </div>
        </div>

            <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Meal </strong>of the month
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url(); ?>/resources/img/prawn.jpg" alt="">
                    <hr class="visible-xs">
                    <p><strong>Prawn Sweet And Sour</strong></p>
                    <p>Sweet and sour prawns are a traditional Chinese recipe. Forget the local takeaway, these are so quick and easy to make at home.</p>
                    <p><a href="more" class="floating-link">more </a></p>
                </div>
            </div>
        </div>

</div>
       

    </div>
    <!-- /.container -->

    <footer>
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Foodie 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
