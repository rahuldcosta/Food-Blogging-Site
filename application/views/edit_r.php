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
  
              

    </head>


<body>
   
<div id="sidebar1" class="col-lg-6 ">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                    <hr>
                    <h2 class="intro-text text-center">Edit your recipe
                      
                  
                <!--    <img class="img-responsive img-border-right"  style="height:5em;float:right;margin-top: -2em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">-->
                   </h2> <hr>
                   
                   
                   <!-----------whats on your mind---------------------------------->
                   
          
                   <div  style="border:1px solid black;">
                     <div class="form-area">  
                           
                         <form action="<?php echo site_url('recipe/updaterecipe');?>" method="post" enctype="multipart/form-data">
      
                    

<!-- Text input-->
<div class="form-group">
    
 <label  for="rname">Recipe Name</label>
  <div class="controls">
      <input id="rname" name="rname" class="form-control" contenteditable="true"  type="text" value="<?php echo $recipedetails['rname']?>" class="input-large" required>

  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="control-label" for="UploadRecipe"> Ingredients</label>
  <div class="controls">
      <textarea class="form-control" rows="5" id="ingredients" contenteditable="true" name ="ingredients" ><?php echo $recipedetails['ingredents']?></textarea>
  </div>
</div>
<div class="form-group">
  <label class="control-label" contenteditable="true" for="UploadRecipe"> Instructions</label>
  <div class="controls">
      <textarea class="form-control" rows="5" id="steps" name="steps" ><?php echo $recipedetails['steps']?></textarea>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios">Vegetarian</label>

    <?php if($recipedetails['vegselected']){?>
    <label class="radio-inline">
    <input type="radio" name="vegoption" checked="TRUE" value="yes">Yes
   
    </label>
    <label class="radio-inline">
      <input type="radio" name="vegoption"  value="no">No
        
    </label>
    
    <?php } else if(!$recipedetails['vegselected']) {?>
    <label class="radio-inline">
    <input type="radio" name="vegoption"  value="yes">Yes
   
    </label>
    <label class="radio-inline">
      <input type="radio" name="vegoption" checked="TRUE" value="no">No
        
    </label>
    
    <?php } ?>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios"> Type</label>

    
    
    <?php if($recipedetails['recipetype']=="Meal"){ ?>
    <label class="radio-inline">
      <input type="radio" name="foodtype" checked="TRUE" value="Snack">Snack
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="foodtype"  value="Meal">Meal
      
    </label>
    <label class="radio-inline">
         
      <input type="radio" name="foodtype" value="Dessert">Dessert
      
    </label>
    
     
    
     <?php } else if($recipedetails['recipetype']=="Snack"){ ?>
    <label class="radio-inline">
      <input type="radio" name="foodtype" checked="TRUE" value="Snack">Snack
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="foodtype"  value="Meal">Meal
      
    </label>
    <label class="radio-inline">
         
      <input type="radio" name="foodtype" value="Dessert">Dessert
      
    </label>
    
  
    
    <?php } else if($recipedetails['recipetype']=="Dessert"){ ?>
    <label class="radio-inline">
      <input type="radio" name="foodtype" value="Snack">Snack
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="foodtype"  value="Meal">Meal
      
    </label>
    <label class="radio-inline">
         
      <input type="radio" name="foodtype"  checked="TRUE" value="Dessert">Dessert
      
    </label>
    
     <?php }?>

</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="control-label" for="radios"> Region <?php echo $recipedetails['regiontype'];?></label>

      <?php if($recipedetails['regiontype']=="Indian"){ ?>
    <label class="radio-inline">
    <input type="radio" name="regiontype" checked="TRUE" value="Indian">Indian
    </label>
    <label class="radio-inline">
     <input type="radio" name="regiontype"  value="Chinese">Chinese 
     </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Italian">Italian
       
    </label>
    <label class="radio-inline">
       
      <input type="radio" name="regiontype"  value="Thai">Thai
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Continental">Continental
       
    </label>
    
      <?php }else if($recipedetails['regiontype']=="Chinese") { ?>
         <label class="radio-inline">
        <input type="radio" name="regiontype"  value="Indian">Indian
         </label>
         <label class="radio-inline">
        <input type="radio" name="regiontype" checked="TRUE" value="Chinese">Chinese
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Italian">Italian
       
    </label>
    <label class="radio-inline">
       
      <input type="radio" name="regiontype"  value="Thai">Thai
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Continental">Continental
       
    </label>
    
      
    
    <?php }else if($recipedetails['regiontype']=="Italian") { ?>
         <label class="radio-inline">
        <input type="radio" name="regiontype"  value="Indian">Indian
         </label>
         <label class="radio-inline">
        <input type="radio" name="regiontype"  value="Chinese">Chinese
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype" checked="TRUE" value="Italian">Italian
       
    </label>
    <label class="radio-inline">
       
      <input type="radio" name="regiontype"  value="Thai">Thai
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Continental">Continental
       
    </label>
    
     
    <?php }else if($recipedetails['regiontype']=="Thai") { ?>
         <label class="radio-inline">
        <input type="radio" name="regiontype"  value="Indian">Indian
         </label>
         <label class="radio-inline">
        <input type="radio" name="regiontype"  value="Chinese">Chinese
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Italian">Italian
       
    </label>
    <label class="radio-inline">
       
      <input type="radio" name="regiontype" checked="TRUE" value="Thai">Thai
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Continental">Continental
       
    </label>
    
      
    <?php }else if($recipedetails['regiontype']=="Continental") { ?>
         <label class="radio-inline">
        <input type="radio" name="regiontype"  value="Indian">Indian
         </label>
         <label class="radio-inline">
        <input type="radio" name="regiontype" value="Chinese">Chinese
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  value="Italian">Italian
       
    </label>
    <label class="radio-inline">
       
      <input type="radio" name="regiontype"  value="Thai">Thai
      
    </label>
    <label class="radio-inline">
        
      <input type="radio" name="regiontype"  checked="TRUE" value="Continental">Continental
       
    </label>
    
      <?php }?>
    
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="control-label" for="dishImg">To Change Picture Click Below</label>
  <div class="controls">
     
      <input id="dishImg" name="userfile" class="hidden" src="<?php echo $recipedetails['dishImgURL']?>" type="file" size="20" accept="image/*">
<label class="btn btn-default" for="dishImg">Change Dish Image</label>
<input type="hidden" name="dimg" value="<?php echo $recipedetails['dishImgURL']?>">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="VidLinnk">Video Link</label>
  <div class="controls">
    <input id="VidLinnk" name="VidLinnk" type="text"  accept="video/*" value="<?php echo $recipedetails['VidLinkURL']?>" class="input-medium">
    
  </div>
</div>
<input type="hidden" name="rid" value="<?php echo $recipedetails['recipe_id']?>">

<button style="margin-left: 50%" id="uploadRecipe"  class="btn btn-primary">Update</button>
        </form>
 </div>
</div>


                              
                   <!--------------------------------------------------------->
                   
                     </div>
                    
   
              
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

