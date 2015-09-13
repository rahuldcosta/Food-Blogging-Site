<!DOCTYPE html>
<html lang="en">
    <head>
     	<style>
	.topOp{
         border-right:2px dotted grey;
        border-bottom:2px dotted grey;
        padding: 1em;
}
.topBox{
	margin-top:1em;
       
}
</style>

    </head>


<body>
   
<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                     <div class="col-lg-9">
                    <hr>
                    <h2 class="intro-text text-center">Welcome!!
                      
                  
                <!--    <img class="img-responsive img-border-right"  style="height:5em;float:right;margin-top: -2em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">-->
                   </h2> <hr>
                   
                   
                   <!-----------whats on your mind---------------------------------->
                   
                     	<div style="background-color:white ;height:8em">

		<div class="topBox" style="height:2em ">
			<span ><a class="topOp" href="##" value="recipeTitle">recipe title</a></span>
			<span><a class="topOp" href="##" value="recipe">Add recipe file</a></span>
			<span><a class="topOp" href="##" value="img">Add image</a></span>
			<span><a class="topOp" href="##" value="video">Add video</a></span>
		</div>

		<div class="topBox " contentEditable="true" style="height:2em">
			What is cooking up for today?
		</div>

		<div style="border:2px dotted blue;height:2em">
			<button  style=" float:right" type="submit" form="#" value="Submit">Post</button>
		</div>
	
                        </div>
                   
                   <!--------------------------------------------------------->
                   <br> <strong>Pins:</strong>  
                    <div style="margin-top:10em;margin-left:5em;margin-right:5em; text-align: center">
                    You have not pinned any lists yet.Go to interests!!
                </div>
                     </div>
                    <div class="col-lg-3" style="border-left:2px dotted red;">
                        <div>Chef: Miracle Dsouza</div>
                        <img class="img-responsive img-border-right"  style="height:9em;float:right;width:12em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">
                        <div style="border-bottom:2px dotted red;"> 
                            <br>  <br><a   style="cursor:pointer ;margin-left:3%" title="edit profile">Edit Profile</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="change password">Change Password</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="help">Help</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="logout">Logout</a>
                    </div>
                           <div style="border-bottom:2px dotted red;">
                                <a   style="cursor:pointer ;margin-left:3%" title="Notifications">Notifications(2)</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="edit profile">Favorites(0)</a>
              
                    </div>
                        <div style="border-bottom:2px dotted red;width:14em ;float:left; ;float:left;margin-left:0em">
                            <div class=" panel-default">
      <div>
        <h4> <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Manage Recipes</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse" >
        <div class="panel-body" style="margin-left:-1em"><ul class="list-group">
          <li class="list-group-item"><a href="edit">Edit recipe</a></li>
          <li class="list-group-item"><a href="delete">Delete recipe</a></li>
        </ul>
         </div>
    </div>
      </div>
                        </div>
                    </div>
                </div>
              
            <div >
              
                
               
	<div></div>
</div>
                <div class="clearfix"></div>
            </div>
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

