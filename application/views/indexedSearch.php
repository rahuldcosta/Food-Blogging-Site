<!DOCTYPE html>
<html lang="en">
    <script>

<body>
   </script>
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
				<?php      $azRange = range('A', 'Z');
                    foreach ($azRange as $letter)
                    {
                      echo"<a>$letter </a>";
                    }
                 ;?>
                  
					<div>
					<table border="1" >
					  <tr><th>Sr. No.</th>
						<th>Recipe</th>
						<th>Author</th>
					 </tr>
					  <tr>
						<td>1</td>
						<td><a href="#"> Spicy Tomato Semolina (Tomato Rava Upma)</a></td>		
						<td>Scheweta</td>
					  </tr>
					  <tr>
						<td>2</td>
						<td> <a href="#"> Savory Bread (Bread Upma)  </a></td>		
						<td>Rahul</td>
					  </tr>
					  <tr>
						<td>3</td>
						<td><a href="#"> Cream of Wheat Savory Cakes (Rava Idli) </a></td>		
						<td>Siddhesh</td>
					  </tr>
					</table>
					</div>
					<div>
						<br/>
						<input type="button" value="Prev" />
						<a href="#" style="padding:3px"> 1 </a>
						<a href="#" style="padding:3px"> 2 </a>
						<a href="#" style="padding:3px"> 3 </a>
						<a href="#" style="padding:3px"> 4 </a>
						<input type="button" value="Next"/>
						
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


