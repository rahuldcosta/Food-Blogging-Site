<!DOCTYPE html>
<html lang="en">


<body>
<div class="container">
    	<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-login">
					<div class="panel-body">
						<div class="row">
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
                        <div>Chef: Miracle Dsouza</div>
                        <img class="img-responsive img-border-right"  style="height:9em;float:right;width:12em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">
                        <div style="border-bottom:2px dotted red;"> 
                            <br>  <br><a  href="<?php echo site_url('foodieHome/userPage');?>"  style="cursor:pointer ;margin-left:3%" title="edit profile">My Profile</a>
                            <br> <a  href="<?php echo site_url('foodieHome/editprofile');?>"  style="cursor:pointer ;margin-left:3%" title="edit profile">Edit Profile</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="change password">Change Password</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="help">Help</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="logout">Logout</a>
                    </div>
                           <div style="border-bottom:2px dotted red;">
                                <a   style="cursor:pointer ;margin-left:3%" title="Notifications">Notifications(2)</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="edit profile">Favorites(0)</a>
              
                    </div>
                        <div style="border-bottom:2px dotted red;width:14em ;float:left; ;float:left;margin-left:0em">
                            <div class=" panel-default">
      <div>
        <h4> <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Manage Recipes</a>
        </h4>
      </div>
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