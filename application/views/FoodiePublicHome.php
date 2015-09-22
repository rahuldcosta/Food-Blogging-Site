<!DOCTYPE html>
<html lang="en">

<body>

<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                     <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
							
							
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-2.jpg" alt="">
                            </div>
							
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-3.jpg" alt="">
                            </div>
							<div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-1.jpg" alt="">
                            </div>
							<div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/resources/img/slide-5.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Based on star ratings</small>
                    </h2>
                    <h1 class="brand-name">RECIPES OF THE MONTH</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Viewers and Contributors</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Dessert </strong>of the month
                    </h2>
                    <hr>
                     <?php if($drecipeid!=""){?>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url(); ?>/uploads/imgfiles/<?php echo $durl?>" alt="">
                    <hr class="visible-xs">
                    <p><strong><?php echo $dname; ?></strong></p>
                    <p><?php echo $dsteps; ?>
                    <p><a href="<?php echo site_url("recipe/viewrecipe?r_id=$drecipeid");?>" class="floating-link">more </a></p>
                     <?php  }else { ?>
                     <p class="text-center" style="color:blueviolet"><strong>Sorry it yet to be decided</strong></p>
                    
                    <?php  } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Meal </strong>of the month
                    </h2>
                    <hr>
                    
                    <?php if($mrecipeid!=""){?>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url(); ?>/uploads/imgfiles/<?php echo $murl?>" alt="">
                    <hr class="visible-xs">
                    <p><strong><?php echo $mname; ?></strong></p>
                    <p><?php echo $msteps; ?>
                    <p><a href="<?php echo site_url("recipe/viewrecipe?r_id=$mrecipeid");?>" class="floating-link">more </a></p>
                    <?php  }else { ?>
                     <p class="text-center" style="color:blueviolet"><strong>Sorry it yet to be decided</strong></p>
                    
                    <?php  } ?>
                </div>
            </div>
        </div>

            <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Snack </strong>of the month
                    </h2>
                    <hr>
                     <?php if($srecipeid!=""){?>
                    <img class="img-responsive img-border img-left" src="<?php echo base_url(); ?>/uploads/imgfiles/<?php echo $surl?>" alt="">
                    <hr class="visible-xs">
                    <p><strong><?php echo $sname; ?></strong></p>
                    <p><?php echo $ssteps; ?>
                    <p><a href="<?php echo site_url("recipe/viewrecipe?r_id=$srecipeid");?>" class="floating-link">more </a></p>
                    <?php  }else { ?>
                     <p class="text-center" style="color:blueviolet"><strong>Sorry it yet to be decided</strong></p>
                    
                    <?php  } ?>
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
