 
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo base_url(); ?>/resources/cookbooklist/jquerysctipttop.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/cookbooklist/bootstrap.min.css">
        <!--		hah ah-->
<div style="display:none"></div>
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
                        <strong>My CookBook</strong>
                    </h2>
                    <hr>
                
               
                <div class="col-md-9">
                    <table id="tableData" class="table table-bordered table-striped" >
					   <thead><th>Sr. No.</th>
						<th>Recipe</th>
						
					 </thead>
                                         <?php $count=0?>
                                         <?php   foreach($cookbook as $row) { $rid=$row['r_id'];?>
					  <tr>
						<td><?php $count++;echo $count ?></td>
                                                <td> <a href="<?php echo site_url("recipe/viewrecipe?r_id=$rid");?>"><?php echo $row['r_name'] ?> </a></td>		
						
					  </tr>
                                         <?php } ?>
					</table>
                    
                    
                    <?php // $count=0;foreach($cookbook as $row) {  $rid=$row['r_id'] ?>
                     <!--<p> <a href="//<?php echo site_url("recipe/viewrecipe?r_id=$rid");?>"><?php $count++;echo $count.". "; echo " ".$row['rname'] ?> </a></p>-->
                    
                    <?php// }?>
                   
				
                   </div>
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
    
    
    

