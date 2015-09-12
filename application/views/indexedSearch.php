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
  print("$letter \n");
}
;?>
                </div>
            </div>
        </div>

</div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Foodie 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>

</body>

</html>


