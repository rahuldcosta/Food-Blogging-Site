<!DOCTYPE html>
<html lang="en">

<body>
   
 
<div id="sidebar1" class="col-lg-6">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Notifications</strong>
                    </h2>
                    <hr>
                
                <div class="col-md-12">
                    <p>Your Approvals</p> 
                    <p>******************************</p>
                <!--code for recipe approval-->	
                   </div>
                <div class="col-md-12">
                    <p>Notifications for your Recipes</p> 
                    <p>******************************</p>
                    <?php
                    foreach($notis as $row)
                    {
                       $drecipeid= $row['recipe_id'];
                    ?>
                    <p> you have <?php echo $row['comments_count'] ; echo " comments on your recipe "; ?><a href="<?php echo site_url("recipe/viewrecipe?r_id=$drecipeid");?>"><?php echo $row['rname']; ?></a> </p>
                      <?php  
                    }?>
				
				
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
