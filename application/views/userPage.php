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
#PostArea{
    display:none;
}
</style>
  
                <script>
    function expand(id1,id2){
        document.getElementById(id1).style.display="none";
        document.getElementById(id2).style.display="block";
    }
</script>

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
                   
            <div class="controls">
                <button id="bb1" style="margin-left: 50%" id="postRecipe" name="postRecipe" class="btn btn-primary" onclick="expand('bb1','PostArea')">Post</button>
  </div>
                   <div id="PostArea" style="border:1px solid black;">
                     <div class="form-area">  
                           
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Fill in the Recipe Specifications</h3>

<!-- Text input-->
<div class="form-group">
    
 <label  for="rname">Recipe Name</label>
  <div class="controls">
    <input id="rname" name="rname" class="form-control" type="text" placeholder="eg.Spring Rolls" class="input-large" required>

  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="control-label" for="UploadRecipe">Upload Recipe</label>
  <div class="controls">
    <input id="UploadRecipe" name="UploadRecipe" class="input-file" type="file">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Vegetarian</label>
<label class="radio-inline">
      <input type="radio" name="optradio">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">No
    </label>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Choose Type</label>
<label class="radio-inline">
      <input type="radio" name="optradio">Snack
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Meal
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Dessert
    </label>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Choose Region</label>
<label class="radio-inline">
      <input type="radio" name="optradio">Indian
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Chinese
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Italian
    </label>
     <label class="radio-inline">
      <input type="radio" name="optradio">Thai
    </label>
     <label class="radio-inline">
      <input type="radio" name="optradio">Continental
    </label>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="control-label" for="dishImg">Upload dish image</label>
  <div class="controls">
    <input id="dishImg" name="dishImg" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="VidLinnk">Video Link</label>
  <div class="controls">
    <input id="VidLinnk" name="VidLinnk" type="text" placeholder="www.youtube.com//dwhg/" class="input-medium">
    
  </div>
</div>


<button style="margin-left: 50%" id="uploadRecipe" name="postRecipe" class="btn btn-primary">Upload</button>
        </form>
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
                           <br> <br><a href="<?php echo site_url('foodieHome/userPage');?>"  style="cursor:pointer ;margin-left:3%" title="my home">My Home</a>
                              <br><a   style="cursor:pointer ;margin-left:3%" title="edit profile">Edit Profile</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="change password">Change Password</a>
                            <br>  <a   href="<?php echo site_url('foodieHome/helpPage');?>" style="cursor:pointer ;margin-left:3%" title="help">Help</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="logout">Logout</a>
                    </div>
                           <div style="border-bottom:2px dotted red;">
                                <a  href="<?php echo site_url('foodieHome/notifications');?>" style="cursor:pointer ;margin-left:3%" title="Notifications">Notifications(2)</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="interests">Interests(0)</a>
                                          <br> <a   style="cursor:pointer ;margin-left:3%" title="cookbook">View CookBook(0)</a>
                                          <br> <a   style="cursor:pointer ;margin-left:3%" title="manage recipe">Manage Recipe</a>

                    </div>
                        <div style="border-bottom:2px dotted red;width:14em ;float:left; ;float:left;margin-left:0em">
                            <div class=" panel-default">
     
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
                
   
                <div class="clearfix"></div>
            </div>
        </div>

</div>

    </div>
    <!-- /.container -->


    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>

</body>

</html>

