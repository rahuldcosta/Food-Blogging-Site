
<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=
"#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">FOODIE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url('foodieHome/index');?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('foodieHome/indian');?>">Indian</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('foodieHome/italian');?>">Italian</a>
                    </li>
					  <li>
                        <a href="<?php echo site_url('foodieHome/chinese');?>">Chinese</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('foodieHome/continental');?>">Continental</a>
                    </li>
					 <li>
                        <a href="<?php echo site_url('foodieHome/thai');?>">Thai</a>
                    </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>