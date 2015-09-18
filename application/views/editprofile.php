<!DOCTYPE html>
<html lang="en">


<body>
<div id="sidebar" class="col-lg-6">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                                                            <div class="col-lg-9">
                                                            <h2 class="intro-text text-center">Edit Profile</h2>
                                                            <form id="editprofile" action="./adminPage" method="post" role="form" >
									<div class="form-group">
										Name <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Name" value="">
									</div>
									<div class="form-group">
										Email <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										Password <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										Re-enter password <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Re-enter Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="update" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Update">
											</div>
										</div>
									</div>
								</form>
                                                            </div>
                                                                 <div class="col-lg-3" style="border-left:2px dotted red;">
                       
                    </div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>/resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
   
</body>
</html>