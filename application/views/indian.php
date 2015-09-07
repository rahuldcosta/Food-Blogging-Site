<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Editied!>
    <title>Indian Recipies</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/resources/css/business-casual.css" rel="stylesheet">
<style type="text/css">
	.floating-link {
    float: right;
	text-decoration: underline;
	padding-right:200px;
	}
	
	#tfnewsearch{
		float:right;
		padding:50px;
	}
	.tftextinput2{
		margin: 10;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton2 {
		margin: 30;
		padding: 5px 7px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton2:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton2::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Indian
                        <strong>Food</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="<?php echo base_url(); ?>/resources/img/indian.jpg" alt="">
                </div>
                <div class="col-md-6">
				<p>This is a list of Indian dishes. </p>
				<p>Indian cuisine encompasses a wide variety of regional cuisines native to India.</p>
				<p>Given the range of diversity in soil type, climate and occupations, 
				these cuisines vary significantly from each other and use locally available spices, herbs, 
				vegetables and fruits. The dishes are then served according to taste in either mild, medium or hot. </p>
				<p>Indian food is also heavily influenced by religious and cultural choices and traditions.</p>
                   </div>
                <div class="clearfix"></div>
            </div>
        </div>

        

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Foodie 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>

</body>

</html>
