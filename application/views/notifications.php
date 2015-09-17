<!DOCTYPE html>
<html lang="en">

<body>
   
<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-9">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Notifications</strong>
                    </h2>
                    <hr>
                
               
                <div class="col-md-9">
				<p>Notification 1 </p>
				<p>Notification 2</p>
				<p>Notification 3 </p>
				<p>Notification 4</p>
                   </div>
                </div>
                            <div class="col-lg-3" style="border-left:2px dotted red;">
                        <div>Chef: Miracle Dsouza</div>
                        <img class="img-responsive img-border-right"  style="height:9em;float:right;width:12em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">
                        <div style="border-bottom:2px dotted red;"> 
                           <br> <br><a href="<?php echo site_url('foodieHome/userPage');?>"  style="cursor:pointer ;margin-left:3%" title="my home">My Home</a>
                              <br><a   style="cursor:pointer ;margin-left:3%" title="edit profile">Edit Profile</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="change password">Change Password</a>
                            <br>  <a   href="<?php echo site_url('foodieHome/helpPage');?>" style="cursor:pointer ;margin-left:3%" title="help">Help</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="logout">Logout</a>
                    </div>
                           <div style="border-bottom:2px dotted red;">
                                <a  href="<?php echo site_url('foodieHome/notifications');?>" style="cursor:pointer ;margin-left:3%" title="Notifications">Notifications(2)</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="interests">Interests(0)</a>
                                          <br> <a   style="cursor:pointer ;margin-left:3%" title="cookbook">View CookBook(0)</a>
                                          <br> <a   style="cursor:pointer ;margin-left:3%" title="manage recipe">Manage Recipe</a>

                    </div>
                        <div style="border-bottom:2px dotted red;width:14em ;float:left; ;float:left;margin-left:0em">
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
