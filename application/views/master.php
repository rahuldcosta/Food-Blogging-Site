<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	

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
    <div class="address-bar">A convenient hub for the food lovers!!
		<div class="text-right"  style="padding-right: 0.5em;background-color: whitesmoke;float:right;color: white;width: 150px;margin-top:1em;margin-bottom:-2em;margin-right: 2em">
		
		
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
                    <li>
                        <a href="<?php echo site_url('foodieHome/login');?>">Login</a>
		    
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
       Looking out for something else?
                <br/><input  type="submit" value="Search here!" class="tfbutton2">
      </div>
  </div>
    <div class ="sidebar">
<strong><h1 class="sideText">Categories</h1></strong>  
       <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Recent</a>
        </h4>
      </div>
        <script> 
            function seeMore() {
               document.getElementById("recent1").style.display="none";
               document.getElementById("recent2").style.display="block";
               document.getElementById("seeMore").style.display="none";
               document.getElementById("seeLess").style.display="block";
           }
           
           function seeLess() {
               document.getElementById("recent2").style.display="none";
               document.getElementById("recent1").style.display="block";
               document.getElementById("seeMore").style.display="block";
               document.getElementById("seeLess").style.display="none";
           }
           
        </script>
      <div id="collapse1" class="panel-collapse collapse in">
          <div id="recent1" class="panel-body" style="display:block">  
            <ul class="list-group">
                <?php
           $count=0;
          foreach($recentlyaddedlist as $row)
          { 
             
              $id=$row['recipe_id'];
               if($count < "3"){
                   $count++;
                  ?>
                 
                 <li class="list-group-item">
                 <a  href="<?php echo site_url("recipe/viewrecipe?r_id=$id");?>" ><?php echo $row['rname']?></a>
                 </li>
                  <br/>
                    
             <?php
             }
          }
                 ?>
         
        </ul>
           <input id="seeMore"  type="submit" value="See More" class="tfbutton2" onclick="seeMore()">
        </div>
          <div id="recent2" class="panel-body" style="display:none">  
            <ul class="list-group">
                <?php
           $count=0;
          foreach($recentlyaddedlist as $row)
          { 
             
              $id=$row['recipe_id'];
               if($count < "10"){
                   $count++;
                  ?>
                 
                 <li class="list-group-item">
                 <a  href="<?php echo site_url("recipe/viewrecipe?r_id=$id");?>" ><?php echo $row['rname']?></a>
                 </li>
                  <br/>
                    
             <?php
             }
          }
                 ?>
         
        </ul>
            <input id="seeLess" type="submit" style="display: none" value="See Less" class="tfbutton2" onclick="seeLess()">
     
        </div>
          
          </div>
        
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Popular</a>
        </h4>
          
          <?php
          
          foreach($popularlist as $row)
          { 
              $id=$row['recipe_id'];
              ?>
              <a  href="<?php echo site_url("recipe/viewrecipe?r_id=$id");?>" ><?php echo $row['rname']?></a>
              <br>
         <?php }
          
          
          ?>
          
         
      </div>
     
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Most Viewed Recipe</a>
        </h4>
          
          
          <?php
          
          foreach($mostviewlist as $row)
          { 
              $id=$row['recipe_id'];
              ?>
              <a  href="<?php echo site_url("recipe/viewrecipe?r_id=$id");?>" ><?php echo $row['rname']?></a>
          <br>
         <?php }
          
          
          ?>
      </div>
  </div>
      <div class="panel panel-default">
<!--      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Chef of the Month</a>
        </h4>
      </div>-->
  </div>  
</div>
</div>
        
        
    </body>
    </html>

