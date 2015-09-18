<!DOCTYPE html>
<html lang="en">


<body>

 <div  id="sidebar" class="col-lg-3" >
<div class ="col-lg-12 box">
    <div> Ms XYZ</div>
        
                        <img class="img-responsive"  style="height:9em;float:right;width:12em" src="<?php echo base_url(); ?>/resources/img/me.jpg" alt="">
                        <div > 
                           <br> <br><a href="<?php echo site_url('foodieHome/userPage');?>"  style="cursor:pointer ;margin-left:3%" title="my profile">My Profile</a>
                              <br><a  href="<?php echo site_url('foodieHome/editprofile');?>"  style="cursor:pointer ;margin-left:3%" title="edit profile">Edit Profile</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="change password">Change Password</a>
                            <br>  <a   href="<?php echo site_url('foodieHome/helpPage');?>" style="cursor:pointer ;margin-left:3%" title="help">Help</a>
                            <br>  <a   style="cursor:pointer ;margin-left:3%" title="logout">Logout</a>
                        </div>
                        <div >
                            <a  href="<?php echo site_url('foodieHome/notifications');?>" style="cursor:pointer ;margin-left:3%" title="Notifications">Notifications(2)</a>
                            <br> 
                            <a   style="cursor:pointer ;margin-left:3%" title="interests">Interests(0)</a>
                            <br> <a  href="<?php echo site_url('foodieHome/CookBook');?>" style="cursor:pointer ;margin-left:3%" title="cookbook">View CookBook(0)</a>
                            <br> <a   style="cursor:pointer ;margin-left:3%" title="manage recipe">Manage Recipe</a>
                         </div>
   
      
</div>
</div>
</body>
</html>


