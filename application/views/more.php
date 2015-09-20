<!DOCTYPE html>
<html lang="en">

    <head>
        <link href="<?php echo base_url(); ?>/resources/css/social-sharing.css" rel="stylesheet">
        <script>
        function mark(el) {
    el.style.border = "1px solid blue";
    }
    function expand(id2){
        document.getElementById(id2).style.display="block";
    }
</script>
        
 
    </head>

<body>
   
<div id="sidebar" class="col-lg-9">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Raspberry-Filled Molten Chocolate Cupcakes</strong>

                    </h2>
                    <hr>
                    <h5>

                        <span style="float:left"> 
                        Author:&nbsp;&nbsp;&nbsp;MTD hgkhj<br>
                        Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12/12/12<br>
                        Category:&nbsp;Dessert<br>
                        Regional:&nbsp;&nbsp;&nbsp;Thai <br>
                        Veg:&nbsp;&nbsp;&nbsp;Yes
                        <br>
                        </span>
                        <span style="float:right">
                            <div>
                              Star Ratings: 
                             
                              <div class="acidjs-rating-stars">
    <form>
        <input type="radio" name="group-1" id="group-1-0" value="5" /><label for="group-1-0"></label>
        <input type="radio" name="group-1" id="group-1-1" value="4" /><label for="group-1-1"></label>
        <input type="radio" name="group-1" id="group-1-2" value="3" /><label for="group-1-2"></label>
        <input type="radio" name="group-1" id="group-1-3" value="2" /><label for="group-1-3"></label>
        <input type="radio" name="group-1" id="group-1-4"  value="1" /><label for="group-1-4"></label>
    </form>
                  <!--display            <div class="acidjs-rating-stars acidjs-rating-disabled">
    <form>
        <input disabled="disabled" type="radio" name="group-3" id="group-3-0" value="5" /><label for="group-3-0"></label><!--
        <input disabled="disabled" type="radio" checked="checked" name="group-3" id="group-3-1" value="4" /><label for="group-3-1"></label><!--
        <input disabled="disabled" type="radio" name="group-3" id="group-3-2" value="3" /><label for="group-3-2"></label><!--
        <input disabled="disabled" type="radio" name="group-3" id="group-3-3" value="2" /><label for="group-3-3"></label><!--
        <input disabled="disabled" type="radio" name="group-3" id="group-3-4"  value="1" /><label for="group-3-4"></label>
    </form>
--></div>
  
                        <div>Views: 24146</div>
                        </span>
                            

                    </h5>
                </div>
                <div class="col-md-5">
                                       <img class="img-responsive img-border-left" src="<?php echo base_url(); ?>/resources/img/rasberry.jpg" alt="">
                                       
                    </div>
                <div class="col-md-7">
                     <div class="row">
                                      
                    <p><strong>INGREDIENTS</strong></p>
                    <p>1/2 cup granulated sugar</p>
                    <p>6 tablespoons unsalted butter room temperature</p>
                    <p>4 large eggs</p>
                    <p>1/2 cup all-purpose flour (spooned and leveled)</p>
                    <p>Pinch of salt</p>
                    <p>11 ounces semisweet chocolate, melted (2 1/2 cups chopped)</p>
                    <p>18 raspberries (36 if they are small)</p>
                    <p>Confectioners' sugar, for serving</p>
                    <p>Vanilla ice cream (optional)</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <p><strong>DIRECTIONS</strong></p>
                    <p>Preheat oven to 400 degrees. Line 12 cup standard muffin tin cups with paper liners. 
                        In a large bowl with a mixer, beat butter and sugar on medium high until light and fluffy, 
                        about 2 minutes. Add eggs, one at a time, beating well after each addition. 
                        With mixer on low, beat in flour and salt. Beat in chocolate until just combined.</p>
                    <p>Divide half the batter among cups, add two raspberries to each, 
                        and top with remaining batter. 
                        Bake until tops are just set and no longer shiny, 
                        10 to 11 minutes, let cool in pan on a wire rack, 10 minutes. 
                        Remove from pans, dust with confectioners' sugar, and top with ice cream, 
                        if desired.</p>
                    </div>
                   </div>
                 <div>
                   
                     <span style="margin-right:3em"><button id="comment" name="comment" onclick="expand('CommentArea')" class="btn btn-default">Comments</button> </span>
                     <span style="margin-right:3em"><button id="share" onclick="expand('shareArea')" name="share" class="btn btn-default">Share</button> </span>
                     <span style="margin-right:3em"><button id="cookBook" class="btn btn-default" onclick="location.href='./login'">Add to Cookbook</button></span>
                 
                <span id="accessThruUserLogin" style="visibility: hidden">
                    <span style="margin-right:3em"><a>Edit</a></span>
                    <span style="margin-right:3em"><a>Delete</a></span>
                </span>
                     </div>
                                       <div id="shareArea" style="margin-top:1em;">
                    <h5> Share with</h5>
                 
<a href="http://twitter.com/home?status=" style="margin-right:3em" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>

<a href="https://www.facebook.com/sharer/sharer.php?u=" style="margin-right:3em" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>

<a href="https://plus.google.com/share?url=" style="margin-right:3em" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                </div>
                <div id="CommentArea" style="margin-top:1em;border:1px solid black;width:52em">
                <h5>Your feedback...</h5>
                <span>
                    <div class="controls">
                        <textarea  cols="88" id="comment" name="comment" placeholder="Post your comment here"></textarea>
                    </div>
                 </span>
                <span>
                <button id="commentInner" name="comment" style="float:right;margin-top: -3em">Comment</button>
                </span>
                <div style="margin-bottom:1em">
                    <span style="margin-right:3em"><a href="myprofileR" >Rohan Sharma</a></span>
                    <span>Comment 1</span>
                </div>
                <div style="margin-bottom:1em">
                    <span style="margin-right:3em"><a href="myprofileR" >Neesha Methla</a></span>
                    <span>Comment 2</span>
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
