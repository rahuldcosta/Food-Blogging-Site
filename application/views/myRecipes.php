

<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo base_url(); ?>/resources/cookbooklist/jquerysctipttop.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/cookbooklist/bootstrap.min.css">
		
        <style type="text/css">

.paging-nav {
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
}

</style>
        <style type="text/css">
		</style>
		</head>


   
 
<div id="sidebar1" class="col-lg-6">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>My Contributions</strong>
                    </h2>
                    <hr>
                
               
                <div class="col-md-12">
				<p>You can edit or delete only your own recipes..just click on it  </p>
                                <br>
                                
                      <div>
                   
                  
					<div>
					<table id="tableData" class="table table-bordered table-striped" >
                                            <thead><th>Sr. No.</th>
						<th>Recipe</th>
						
					 </thead>
                                         <?php $count=0?>
                                         <?php   foreach($listofrecipes['results'] as $row){ $rid=$row['recipe_id'];?>
					  <tr>
						<td><?php $count++;echo $count ?></td>
                                                <td><a href="<?php echo site_url("recipe/viewrecipe?r_id=$rid");?>"><?php echo $row['rname'] ?> </a></td>		
						
					  </tr>
                                         <?php } ?>
					</table>
					</div>
                          
                          
					
                </div>          
                                
                                
                                
				<!--<a href="<?php echo site_url('foodieHome/more');?>"  style="cursor:pointer ;margin-left:3%" title="my profile">dessert 1</a>-->
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

    
    <script type="text/javascript" src="<?php echo base_url(); ?>/resources/cookbooklist/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>/resources/cookbooklist/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/resources/cookbooklist/paging.js"></script> 
<div class="text-center">
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
    </div>
    
    