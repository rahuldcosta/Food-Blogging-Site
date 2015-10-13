<!DOCTYPE html>
<html lang="en">
    <script>


   </script>
   
   <body>
<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Index:
                        <strong>Alphabetical order sorted recipes</strong>

                    </h2>
                    <hr>
                </div>
          
                <div class="clearfix"></div>
                <div>
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
                  
					<div>
					<table border="1" >
					  <tr><th>Sr. No.</th>
						<th>Recipe</th>
						<th>Author</th>
					 </tr>
                                         <?php $count=0?>
                                         <?php   foreach($reciepesset['results'] as $row){?>
					  <tr>
						<td><?php $count++;echo $count ?></td>
                                                <td><a href="#"><?php echo $row['rname'] ?> </a></td>		
						<td><?php echo $row['author'] ?></td>
					  </tr>
                                         <?php } ?>
					</table>
					</div>
					<div>
						<br/>
                                               <?php  
                                                $sno=-1;
						if($reciepesset['pgno']!=0){
                    ?>
                <a id='link' onclick="location.href='<?php echo site_url("search/getnextpage?pgno=1&alpha=$alpa&dtype=$type");?>'"> First</a>                    
              <?php  }
              
                                            for($wwc=0;$wwc<ceil($reciepesset['max']/$reciepesset['limit']);$wwc++)
                {
                                                    $sno=$wwc+1;
                           if($sno==$reciepesset['pgno']+1)    {                     
                       ?>
                            <a id='link' style="color:red" value="$sno" onclick="location.href='<?php echo site_url("search/getnextpage?pgno=$sno&alpha=$alpa&dtype=$type");?>'"> <?php echo ($wwc+1)?></a>                    
                     
                   
                           <?php  }else
                           {   ?>


 <a id='link' value="$sno" onclick="location.href='<?php echo site_url("search/getnextpage?pgno=$sno&alpha=$alpa&dtype=$type");?>'"> <?php echo ($wwc+1)?></a>                    


 <?php
                           
                           
                           }  }
                           
                           if($sno!=$reciepesset['pgno']+1) {
                                            
                                          
                                            ?>
                                                
              <a id='link' style='margin-left:10px' onclick="location.href='<?php echo site_url("search/getnextpage?pgno=$sno&alpha=$alpa&dtype=$type");?>'">Last</a>         
                                      <?php          
                                        }  ?>
                  
                    
                 
                
                
						
					</div>
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


