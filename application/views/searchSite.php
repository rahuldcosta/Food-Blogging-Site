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
                    <form action="#" style="margin-left:5%">
                        <span style="margin-right:  5em"> Dish Name:</span>
  <input type="text" name="dishName" value="Butter Chicken" >
  <br><br>
  <span style="margin-right:  4em">Dish Category:</span>
  <select>
  <option value="Snack" >Snack</option>
  <option value="Dessert">Dessert</option>
  <option value="Meal">Meal</option>
</select>
  <br><br>
  <span style="margin-right:  5em"> Cusine Type:</span>
  <select>
  <option value="Thai">Thai</option>
  <option value="Indian">Indian</option>
  <option value="Italian">Italian</option>
   <option value="Chinese">Chinese</option>
  <option value="Continental">Continental</option>
</select>
  <br><br>
   <span style="margin-right:  2em">Chef Name(author):</span>
  <input type="text" name="chefName" value="Chef M K" >
  <br><br>
  <span style="margin-right:  5em">Date of post:</span>
  <input type="date" name="ddate" value="12/12/14">
  <br><br>
  <br>
  
  <input type="submit" value="Search" style="margin-left:  7em">
  <br>
  <a href="<?php echo site_url('foodieHome/indexedSearch');?>">Unable to find?View complete list!!</a>
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