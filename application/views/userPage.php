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
   
<div id="sidebar1" class="col-lg-6 ">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                    <hr>
                    <h2 class="intro-text text-center">Welcome User Your can Add a New Recipe Use Post Button!!
                      
                  
                <!--    <img class="img-responsive img-border-right"  style="height:5em;float:right;margin-top: -2em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">-->
                   </h2> <hr>
                   
                   
                   <!-----------whats on your mind---------------------------------->
                   
            <div class="controls">
                <button id="bb1" style="margin-left: 50%" id="postRecipe" name="postRecipe" class="btn btn-primary" onclick="expand('bb1','PostArea')">Post</button>
  </div>
                   <div id="PostArea" style="border:1px solid black;">
                     <div class="form-area">  
                           
                         <form action="<?php echo site_url('recipe/addrecipe');?>" method="post" enctype="multipart/form-data">
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
  <label class="control-label" for="UploadRecipe"> Ingredients</label>
  <div class="controls">
      <textarea class="form-control" rows="5" id="ingredients" name ="ingredients" placeholder="eg.Type out ingredients here"></textarea>
  </div>
</div>
<div class="form-group">
  <label class="control-label" for="UploadRecipe"> Instructions</label>
  <div class="controls">
      <textarea class="form-control" rows="5" id="steps" name="steps" placeholder="eg.Type out your Recipe steps here"></textarea>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Vegetarian</label>
<label class="radio-inline">
      <input type="radio" name="vegoption" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="vegoption" value="no">No
    </label>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Choose Type</label>
<label class="radio-inline">
      <input type="radio" name="foodtype" value="Snack">Snack
    </label>
    <label class="radio-inline">
      <input type="radio" name="foodtype" value="Meal">Meal
    </label>
    <label class="radio-inline">
      <input type="radio" name="foodtype" value="Dessert">Dessert
    </label>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Choose Region</label>
<label class="radio-inline">
      <input type="radio" name="regiontype" value="Indian">Indian
    </label>
    <label class="radio-inline">
      <input type="radio" name="regiontype" value="Chinese">Chinese
    </label>
    <label class="radio-inline">
      <input type="radio" name="regiontype" value="Italian">Italian
    </label>
     <label class="radio-inline">
      <input type="radio" name="regiontype" value="Thai">Thai
    </label>
     <label class="radio-inline">
      <input type="radio" name="regiontype" value="Continental">Continental
    </label>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="control-label" for="dishImg">Upload dish image</label>
  <div class="controls">
    <input id="dishImg" name="userfile" class="input-file" type="file" size="20" accept="image/*">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="VidLinnk">Video Link</label>
  <div class="controls">
    <input id="VidLinnk" name="VidLinnk" type="text"  accept="video/*" placeholder="www.youtube.com//dwhg/" class="input-medium">
    
  </div>
</div>


<button style="margin-left: 50%" id="uploadRecipe"  class="btn btn-primary">Upload</button>
        </form>
 </div>
</div>


                              
                   <!--------------------------------------------------------->
                   
                     </div>
                    <div class="col-lg-3" style="">
                       
                        <div style="width:14em ;float:left; ;float:left;margin-left:0em">
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

