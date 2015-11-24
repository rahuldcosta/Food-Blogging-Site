<!DOCTYPE html>
<html lang="en">



<body>
   
<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Searching made easy...</strong>Enter any detail you know about it...
                    </h2>
                    <hr>
                    <form class="form-horizontal" action="<?php echo site_url('search/filsearch');?>" method="post" style="margin-left:5%">
<!--                        <span style="margin-right:  5em"> Dish Name:</span>
  <input type="text" name="dishName"  >
  <br><br>
  <span style="margin-right:  4em">Dish Category:</span>
  <select name="cat">
  <option  value="Snack" >Snack</option>
  <option  value="Dessert">Dessert</option>
  <option  value="Meal">Meal</option>
</select>
  <br><br>
  <span style="margin-right:  5em"> Cusine Type:</span>
  <select name="cusine">
  <option  value="Thai">Thai</option>
  <option  value="Indian">Indian</option>
  <option  value="Italian">Italian</option>
   <option   value="Chinese">Chinese</option>
  <option  value="Continental">Continental</option>
</select>
  <br><br>
   <span style="margin-right:  2em">Chef Name(author):</span>
  <input type="text" name="chefName" value="" >
  <br><br>-->
                        
    <fieldset>

<!-- Form Name -->


<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dishName">Dish Name</label>
  <div class="col-md-4">
    <input id="dishName" name="dishName" type="text" placeholder="eg.Sprill Rolls" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cat">Dish Category</label>
  <div class="col-md-4">
    <select id="cat" name="cat" class="form-control">
        <option value="Any">Any</option>
      <option value="Snack">Snack</option>
      <option value="Dessert">Dessert</option>
      <option value="Meal">Meal</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cusine">Cusine Type</label>
  <div class="col-md-4">
    <select id="cusine" name="cusine" class="form-control">
        <option value="Any">Any</option>
      <option value="Thai">Thai</option>
      <option value="Indian">Indian</option>
      <option value="Italian">Italian</option>
      <option value="Chinese">Chinese</option>
      <option value="Continental">Continental</option>
    </select>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="chefName">Chef Name(author)</label>
  <div class="col-md-4">
    <input id="chefName" name="chefName" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dateofpost">Date of post:</label>
  <div class="col-md-4">
     <input class="form-control input-md" type="date" name="ddate" value="12/12/14">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="searchbt" name="" class="btn btn-primary">Search </button>
  </div>
</div>

</fieldset>                    
                        
                        
                        
                        
<!--  <span style="margin-right:  5em">Date of post:</span>
  <input type="date" name="ddate" value="12/12/14">
  <br><br>
  <br>
  
  <input type="submit"  style="margin-left:  7em">
  <br>
  <br>-->
                        
                        <div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
   <a href="<?php echo site_url('search/indexedSearch');?>">Unable to find?View complete list!!</a>
  </div>
</div>
  
  
  
  
</form> 
                </div>
                <div>
                    
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