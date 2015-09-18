<!DOCTYPE html>
<html lang="en">


<body>
<div id="sidebar1" class="col-lg-6">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                                                            <div class="col-lg-9">
                                                            <h2 class="intro-text text-center">Change Password</h2>
                                                            <form id="editprofile" action="./adminPage" method="post" role="form" >
									<div class="form-group">
										Old Password <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										New Password <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										Re-enter password <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Re-enter Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="update" id="change-submit" tabindex="4" class="form-control btn btn-register" value="Change Password">
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
	<!-- jQuery -->
    <script src="<?php echo base_url(); ?>/resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>
   
</body>
</html>