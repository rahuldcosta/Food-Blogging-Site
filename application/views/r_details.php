<!DOCTYPE html>
<html lang="en">

    <head>
        <link href="<?php echo base_url(); ?>/resources/css/social-sharing.css" rel="stylesheet">
        <script>
        function mark(el) {
    el.style.border = "1px solid blue";
    }
    function expand(id1,id2){
        document.getElementById(id1).style.display="none";
        document.getElementById(id2).style.display="block";
    }
    
    
    function addingtocookbook(r_id,rname)
    {
       jQuery.ajax({
type: "POST",

url: "<?php echo site_url("user/addtocookbook") ?>",
dataType: 'json',
data: {r_id: r_id,rname:rname},
success: function(res) {
if (res.stat)
{
    //cookBookid
    
    alert("Added To Your Cook Book Successfully");
    document.getElementById('cookBookid').innerHTML="+"+"Added To CookBook";
     document.getElementById('cookBookid').style.color="red";
   document.getElementById('cookBookid').disabled=true;
}



}

});

    }
    
    function sendrating(r_id,score)
    {
       jQuery.ajax({
type: "POST",

url: "<?php echo site_url("recipe/sendrating") ?>",
dataType: 'json',
data: {r_id: r_id,score:score},
success: function(res) {

 if(res.stat)
 {
     alert("Thank You For Rating");
}




}});
    
   
    }
    
    function addcomment(r_id,comment,username)
    {
       if(comment=="")
       {
           alert("type in comment to post");
           return;
       }
jQuery.ajax({
type: "POST",

url: "<?php echo site_url("recipe/addcomment") ?>",
dataType: 'json',
data: {r_id: r_id,comment:comment},
success: function(res) {
if (res.stat)
{
    var oldcm= document.getElementById('oldcomments').innerHTML;
        var newItem = '<div style="margin-bottom:1em">'+
'                    '+
'                <span style="margin-right: 3em">'+comment+'</span>'+
'                <span style="margin-right:3em;font-size: smaller">commented by <a href="myprofileR" >'+username+'</a></span>'+
'                </div>';

        document.getElementById('oldcomments').innerHTML=newItem;
        document.getElementById('oldcomments').innerHTML+=oldcm;
}
 
}




});
        
    }
</script>
        
 
    </head>

<body>
<div id="sidebar1" class="col-lg-6 ">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong><?php echo $rname?></strong>

                    </h2>
                    <hr>
                    <h5>

                        <span style="float:left"> 
                        Author:&nbsp;&nbsp;&nbsp;<?php echo $author?><br>
                        Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dateadded?><br>
                        Category:&nbsp;<?php echo $recipetype?><br>
                        Regional:&nbsp;&nbsp;&nbsp;<?php echo $regiontype?> <br>
                        Veg:&nbsp;&nbsp;&nbsp;<?php 
                        if ($vegselected==1)
                            echo 'Yes';
                            else 
                        {echo 'No';
                            
                        }?>
                        <br>
                        </span>
                        <span style="float:right">
                            <div>
                              Your Rating: 
                             
                              <div class="acidjs-rating-stars">
    
                                  
                                  <input type="radio" name="group-1" id="group-1-0" value="5" onclick="sendrating('<?php echo $r_id;?>',this.value)" /><label for="group-1-0"></label>
        <input type="radio" name="group-1" id="group-1-1" value="4" onclick="sendrating('<?php echo $r_id;?>',this.value)"/><label for="group-1-1"></label>
        <input type="radio" name="group-1" id="group-1-2" value="3" onclick="sendrating('<?php echo $r_id;?>',this.value)" /><label for="group-1-2"></label>
        <input type="radio" name="group-1" id="group-1-3" value="2" onclick="sendrating('<?php echo $r_id;?>',this.value)" /><label for="group-1-3"></label>
        <input type="radio" name="group-1" id="group-1-4"  value="1" onclick="sendrating('<?php echo $r_id;?>',this.value)" /><label for="group-1-4"></label>
    
                  <!--display            <div class="acidjs-rating-stars acidjs-rating-disabled">
 
        <input disabled="disabled" type="radio" name="group-3" id="group-3-0" value="5" /><label for="group-3-0"></label><!--
        <input disabled="disabled" type="radio" checked="checked" name="group-3" id="group-3-1" value="4" /><label for="group-3-1"></label><!--
        <input disabled="disabled" type="radio" name="group-3" id="group-3-2" value="3" /><label for="group-3-2"></label><!--
        <input disabled="disabled" type="radio" name="group-3" id="group-3-3" value="2" /><label for="group-3-3"></label><!--
        <input disabled="disabled" type="radio" name="group-3" id="group-3-4"  value="1" /><label for="group-3-4"></label>
    
--></div>
  
                        <div>Avg Rating : <?php echo round($avgrate,2)?> /5</div>
                        <div>Views: <?php echo $views?></div>
                        </span>
                            

                    </h5>
                </div>
                <div class="col-md-5">
                                       <img class="img-responsive img-border-left" src="<?php echo base_url(); ?>/uploads/imgfiles/<?php echo $rurl?>" alt="">
                                       
                    </div>
                <div class="col-md-7">
                     <div class="row">
                                      
                    <p><strong>INGREDIENTS</strong></p>
                    <p><?php echo $ingredents?></p>
<!--                    <p>1/2 cup granulated sugar</p>
                    <p>6 tablespoons unsalted butter room temperature</p>
                    <p>4 large eggs</p>
                    <p>1/2 cup all-purpose flour (spooned and leveled)</p>
                    <p>Pinch of salt</p>
                    <p>11 ounces semisweet chocolate, melted (2 1/2 cups chopped)</p>
                    <p>18 raspberries (36 if they are small)</p>
                    <p>Confectioners' sugar, for serving</p>
                    <p>Vanilla ice cream (optional)</p>-->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <p><strong>DIRECTIONS</strong></p>
                    <p><?php echo $rsteps?></p>
<!--                    <p>Preheat oven to 400 degrees. Line 12 cup standard muffin tin cups with paper liners. 
                        In a large bowl with a mixer, beat butter and sugar on medium high until light and fluffy, 
                        about 2 minutes. Add eggs, one at a time, beating well after each addition. 
                        With mixer on low, beat in flour and salt. Beat in chocolate until just combined.</p>
                    <p>Divide half the batter among cups, add two raspberries to each, 
                        and top with remaining batter. 
                        Bake until tops are just set and no longer shiny, 
                        10 to 11 minutes, let cool in pan on a wire rack, 10 minutes. 
                        Remove from pans, dust with confectioners' sugar, and top with ice cream, 
                        if desired.</p>-->
                    </div>
                   </div>
                           <div>Video Link:- <a><?php echo $VidLinkURL;?></a></div>
                           <div>Video Link:- <a href="http://<?php echo $VidLinkURL;?>"><?php echo $VidLinkURL;?></a></div>
                 <div>
                   
                     <span style="margin-right:3em"><button id="comment" name="comment" onclick="expand('shareArea','CommentArea')" class="btn btn-default"> Show comments</button> </span>
                     <span style="margin-right:3em"><button id="share" onclick="expand('CommentArea','shareArea')" name="share" class="btn btn-default">Share</button> </span>
                     <span style="margin-right:3em">
                         <?php if ($count>0){
                          ?>
                         
                         <button id="cookBookid" disabled=""class="btn btn-default" style="color:red" >+Added To CookBook</button>                     
                             
                       <?php      
                         }else {
?>
                         <button id="cookBookid" class="btn btn-default" onclick="addingtocookbook('<?php echo $r_id;?>','<?php echo $rname;?>')">Add to Cookbook</button>
                         <?php }?>
                     
                     </span>
                 
                <span id="accessThruUserLogin" style="visibility: visible">
                    <span style="margin-right:3em"><a href="<?php echo site_url("recipe/editRecipe?r_id=$r_id");?>">Edit</a></span>
                    <span style="margin-right:3em"><a>Delete</a></span>
                </span>
                     </div>
                                       <div id="shareArea" style="margin-top:1em;">
                    <h5> Share with</h5>
                 
<span style="font-size:150%" class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_googleplus_hcount' displayText='Google +'></span>
                </div>
                           
                 <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-db125168-a6f5-d1aa-768-d85ef4da539f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>          
                           
                <div id="CommentArea" style="margin-top:1em;border:1px solid black;width:52em">
                <h5>Your feedback...</h5>
                <span>
                    <div class="controls">
                        <textarea  cols="88" id="commentarea"  placeholder="Post your comment here"></textarea>
                    </div>
                 </span>
                <span>
                    <button id="commentbtton" onclick="addcomment('<?php echo $r_id;?>',document.getElementById('commentarea').value,'<?php echo $uname;?>')" style="float:right;margin-top: -3em">Comment</button>
                </span>
                <div id="oldcomments">
                <?php
              //  print_r($comments);
                
                      
                foreach($comments as $row){
                ?>
                <div style="margin-bottom:1em">
                    
                <span style="margin-right: 3em"><?php echo $row['comment']?></span>
                <span style="margin-right:3em;font-size: smaller">commented by <a href="myprofileR" > <?php echo $row['uname']?></a></span>
                </div>
                
                <?php
                
                
                        }
                        
                        ?>
              
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
