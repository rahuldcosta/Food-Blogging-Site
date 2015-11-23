<!DOCTYPE html>
<html lang="en">


<body>
<div id="sidebar1" class="col-lg-6">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                                                            <div class="col-lg-9">
                                                            <h2 class="intro-text text-center">Edit Profile</h2>
                                                            <form id="editprofile" action="<?php echo site_url('user/updateProfile');?>" method="post" role="form" >
									<div class="form-group">
										Name <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Name" value="">
									</div>
                                                                        <div class="form-group">
                                                                            Gender: 
                                                                            <label class="radio-inline"><input id="gender" name="gender" type="radio" value="Male">Male</label>
                                                                            <label class="radio-inline"><input id="gender" name="gender" type="radio" value="Female">Female</label>          
                                                                        </div>
                                                                <div class="form-group">
                                                                     <label class="control-label" for="profilepic">Upload Profile Picture</label>
                                                                        <div class="controls">
                                                                     <input id="profilepic" name="userfile" class="input-file" type="file" size="20" accept="image/*">
                                                                   </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    About Yourself 
                                                                    <textarea name="abouturself" id="abouturself" rows="5" cold="40"></textarea>
                                                                </div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit"  id="register-submit" tabindex="4" class="form-control btn btn-register" value="Update">
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