
				
<!DOCTYPE html>
<html lang="en">

<body>
   
 
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
					<table border="1" >
					  <tr><th>Sr. No.</th>
						<th>Recipe</th>
						
					 </tr>
                                         <?php $count=0?>
                                         <?php   foreach($listofrecipes['results'] as $row){?>
					  <tr>
						<td><?php $count++;echo $count ?></td>
                                                <td><a href="#"><?php echo $row['rname'] ?> </a></td>		
						
					  </tr>
                                         <?php } ?>
					</table>
					</div>
                          
                          
					<div>
						<br/>
                                               <?php  
                                                $sno=-1;
						if($listofrecipes['pgno']!=0){
                    ?>
                <a id='link' onclick="location.href='<?php echo site_url("user/getnextpage?pgno=1&alpha=$alpa&dtype=$type");?>'"> First</a>                    
              <?php  }
              
                                            for($wwc=0;$wwc<ceil($listofrecipes['max']/$listofrecipes['limit']);$wwc++)
                {
                                                    $sno=$wwc+1;
                           if($sno==$listofrecipes['pgno']+1)    {                     
                       ?>
                            <a id='link' style="color:red" value="$sno" onclick="location.href='<?php echo site_url("user/getnextpage?pgno=$sno&alpha=$alpa&dtype=$type");?>'"> <?php echo ($wwc+1)?></a>                    
                     
                   
                           <?php  }else
                           {   ?>


 <a id='link' value="$sno" onclick="location.href='<?php echo site_url("user/getnextpage?pgno=$sno&alpha=$alpa&dtype=$type");?>'"> <?php echo ($wwc+1)?></a>                    


 <?php
                           
                           
                           }  }
                           
                           if($sno!=$listofrecipes['pgno']+1) {
                                            
                                          
                                            ?>
                                                
              <a id='link' style='margin-left:10px' onclick="location.href='<?php echo site_url("user/getnextpage?pgno=$sno&alpha=$alpa&dtype=$type");?>'">Last</a>         
                                      <?php          
                                        }  ?>
                  
                    
                 
                
                
						
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

</body>

</html>
