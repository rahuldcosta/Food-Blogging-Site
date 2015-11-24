<!DOCTYPE html>
<html lang="en">
 <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo base_url(); ?>/resources/cookbooklist/jquerysctipttop.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/cookbooklist/bootstrap.min.css">
		
        <style type="text/css">

/*.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}*/

/*.paging-nav,
#tableData {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}*/
</style>
       
		</head>


 
   
   <body>
   
<div  class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr/>
                    <h2 class="intro-text text-center">
                         <?php if($type=="vfil") {?>
                        <strong>Filtered Search recipes</strong>
                         <?php }else {?>
                       
                        <strong>Alphabetical order recipes</strong>
                         <?php }?>
                    </h2>
                    <hr/>
                </div>
          
             
                <div>
                    <center>
                    <?php if($type!="vfil") {?>
                    <a href="<?php echo site_url("search/switchtoalphabetic?alpha=all");?>">All</a>
				<?php      $azRange = range('A', 'Z');
                    foreach ($azRange as $letter)
                    {
                      ?>
                       <a href="<?php echo site_url("search/switchtoalphabetic?alpha=$letter");?>"><?php echo $letter ?></a>
                      <?php
                    }
                    
                    }
                 ;?>
                  </center>
                    
                    <?php if (sizeof($reciepesset['results'])>0) { ?>
                       <div >
					<table  class="table table-bordered table-striped" >
                                            <thead><th>Sr. No.</th>
						<th>Recipe</th>
                                                <th>Author</th>
						
					 </thead>
                                         <?php $count=0?>
                                         <?php   foreach($reciepesset['results'] as $row){ $rid=$row['recipe_id'];?>
					  <tr>
						<td><?php $count++;echo $count ?></td>
                                                <td><a href="<?php echo site_url("recipe/viewrecipe?r_id=$rid");?>"><?php echo $row['rname'] ?> </a></td>		
						<td><?php echo $row['author'] ?></td>
					  </tr>
                                         <?php } ?>
					</table>
					</div>
                    <?php } else {?>
                    <div style="margin-top: 1em">
                        <div style="text-align: center">
                                <img style="border-radius: 25px;" width="30%" height="30%" src="<?php echo base_url(); ?>/resources/img/sorry.jpg" alt="">
                            </div>
                        <p class="text-center" style="color:red">
                           <?php if($alpa!="all"){?>
                            
                            
                            <strong>
                                Sorry No recipe with the selected Alphabet <?php echo $alpa;?>
                            </strong>
                           <?php }else{?>
                            <strong>
                                Sorry No recipe in Database
                            </strong>
                            <?php } ?>
                        </p>
                    </div>
                    
                    <?php } ?>
					
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
    
    <script type="text/javascript" src="<?php echo base_url(); ?>/resources/cookbooklist/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>/resources/cookbooklist/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/resources/cookbooklist/paging.js"></script> 
<div class="text-center">
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
</body>

</html>


