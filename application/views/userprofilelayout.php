<!DOCTYPE html>
<html lang="en">


<body>

 <div  id="sidebar" class="col-lg-3 pull-right" >
<div class ="col-lg-12 box" >
  
    <div> Miss. XYZ</div>
      <br><div>
      <img class="img-responsive "  style="height:9em;width:12em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">
    </div>
                        <div > 
                           <br> <br><a href="<?php echo site_url('user/userPage');?>"  style="cursor:pointer ;margin-left:3%" title="User Home">User Home</a>
                              <br><a  href="<?php echo site_url('foodieHome/editprofile');?>"  style="cursor:pointer ;margin-left:3%" title="edit profile">Edit Profile</a>
                            <br> <a  href="<?php echo site_url('foodieHome/changepassword');?>" style="cursor:pointer ;margin-left:3%" title="change password">Change Password</a>
                            <br>  <a   href="<?php echo site_url('foodieHome/helpPage');?>" style="cursor:pointer ;margin-left:3%" title="help">Help</a>
                            <br>  <a   href="<?php echo site_url('foodieHome/login');?>" style="cursor:pointer ;margin-left:3%" title="logout">Logout</a>
                        </div>
                        <div >
                            <a  href="<?php echo site_url('user/notifications');?>" style="cursor:pointer ;margin-left:3%" title="Notifications">Notifications
                                
                                <?php
                                    if($ncount>0)
                                        echo "(".$ncount.")";
                                ?>
                                
                              </a>
                             
                           
                            <br> <a  href="<?php echo site_url('user/viewCookBook');?>" style="cursor:pointer ;margin-left:3%" title="cookbook">View CookBook(0)</a>
                            <br> <a  href="<?php echo site_url('user/myRecipes');?>"  style="cursor:pointer ;margin-left:3%" title="manage recipe">Manage Recipe</a>
                         </div>
   
      
</div>
</div>
</body>
</html>


