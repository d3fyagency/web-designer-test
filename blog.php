<?php
include('includes/config.php');
// Current page name
$current_page = "Blog";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $titlePage_blog; ?></title>

	<!-- METAS -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
	<!-- /METAS -->

	<!-- CSS -->
    <link href="css/styles.css" rel="stylesheet" media="all" />
    <link href="css/theme.css" rel="stylesheet" media="all" />
	<!-- /CSS -->
    
	<!-- JQuery and Plugins -->
    <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.flow.1.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
    <script type="text/javascript" src="js/jquery.bgpos.js"></script>
	<script type="text/javascript" src="js/clearbox.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
	<!-- /JQuery and Plugins -->
    
    <!-- Cufon -->
		<script src="js/cufon-yui.js" type="text/javascript"></script>
    	<script type="text/javascript" src="js/bebas_400.font.js"></script>
		<script type="text/javascript">
			Cufon.replace('h2, h3, h4, h5, h6',{ hover: true });
			Cufon.replace('.navLink',{ hover: true });
			Cufon.replace('.central_slogan');
			Cufon.replace('#coffee',{ hover: true });
			Cufon.replace('.blog_date',{ hover: true });
			Cufon.replace('#bottom_menu',{ hover: true });
		</script>
    <!-- /Cufon -->
    
    <!--[if IE]>
   	<link href="css/IE.css" rel="stylesheet" media="all" />
	<![endif]-->
    
    <!--[if IE 6]>
    <script src="js/DD_belatedPNG.js"></script>
    <script>
      /* EXAMPLE */
      DD_belatedPNG.fix('*');
    </script>
     <![endif]-->
    
	
    
</head>

<body>
<?php include('includes/header.php'); ?>

<!-- MAIN -->
<div id="main">
	<div class="content">
    
    <!-- slogan -->
    <div class="central_slogan">we build  creative &amp; magic websites.</div>
    <!-- /slogan -->
    
    
    <!-- Wrap Block Style -->
    <div class="wrap_top"></div>
    <div class="wrap_block">
    <!-- Wrap Block Content -->
    
        <!-- left part -->
        <div class="left_part">
        
      	<!-- Blog Display -->
		<div class="design blog">
                
                <div class="blog_date">January, 29th, 2010 at 3:26 PM</div>

    			<h2>Interview With “The Man”: Jeffrey Way<span>by Devilcantburn</span></h2>
                
                <p><img src="tmp/blog_image1.jpg" width="610" height="160" alt=" " class="preview" /></p>
                
                <p class="biglines">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="continue"><a href="<?php echo $nav_blogview; ?>">Continue...</a></p>
                
                

          </div>
            <!-- /Blog Display -->
        
      	<!-- Blog Display -->
		<div class="design blog">
                
          <div class="blog_date">January, 29th, 2010 at 3:26 PM</div>

    			<h2>Now Selling Resume/CV Themes!<span>by Devilcantburn</span></h2>
                
                <p><img src="tmp/blog_image2.jpg" width="610" height="160" alt=" " class="preview" /></p>
                
                <p class="biglines">We're pleased to announce that we now have a wide range of resume/CV templates, optimized for the web, available for purchased..</p>
                <p class="continue"><a href="<?php echo $nav_blogview; ?>">Continue...</a></p>
                
                

          </div>
            <!-- /Blog Display -->
        
      	<!-- Blog Display -->
		<div class="design blog">
                
          <div class="blog_date">January, 29th, 2010 at 3:26 PM</div>

    			<h2>Create a Quick One Page Portfolio in InDesign<span>by Devilcantburn</span></h2>
                
          <p><img src="tmp/blog_image3.jpg" width="610" height="160" alt=" " class="preview" /></p>
                
                <p class="biglines">In this tutorial, we'll explain how to create a quick portfolio page by using the Step and Repeat, Paragraph Styles and object elements. We will also use Adobe Bridge.</p>
                <p class="continue"><a href="<?php echo $nav_blogview; ?>">Continue...</a></p>
                
                

          </div>
            <!-- /Blog Display -->
            
            <!-- Paginate -->
            <ul id="pagination">
            <li class="previous"><a href="#"><span>«Previous</span></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="active">4</li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li class="next"><a href="#"><span>Next »</span></a></li>
            </ul>
            <!-- /Paginate -->
            
        </div>
        <!-- /left part -->
        
        
            
        <!-- sidebar -->
        <div class="sidebar">
        	<div class="illustration"><img src="tmp/Blog_Artdesigner.lv.png" width="273" height="228" alt=" " class="paint" /></div>
            
            
            <h4>Search</h4>
            <form action="#" method="post" id="search_form">
            	<p>
                <input type="text" name="search" value="" class="field"  />
                <input type="submit" name="submit" value=">" class="submit" />
                <p>
            </form>
            
            <h4>Categories</h4>
            <ul>
            	<li><a href="#">Ajax &amp; Javascript</a></li>
            	<li><a href="#">HTML developpment</a></li>
            	<li><a href="#">Photographies</a></li>
            	<li><a href="#">PHP / MySQL</a></li>
            	<li><a href="#">JQuery Plugins</a></li>
            	<li><a href="#">Miscellaneous</a></li>
            </ul>
            
            <h4>Archives</h4>
            <ul>
            	<li><a href="#">January 2010 (20)</a></li>
            	<li><a href="#">December 2009 (10)</a></li>
            	<li><a href="#">November 2009 (53)</a></li>
            	<li><a href="#">October 2009 (16)</a></li>
            	<li><a href="#">September 2009 (89)</a></li>
            </ul>
            
            <div>
            <a href="#" class="ads"><img src="tmp/ad_180x100_v1.gif" alt="" width="180" height="100" /></a>
            <a href="#" class="ads"><img src="tmp/cc_180x100_v2.gif" alt="" width="180" height="100" /></a>
            <a href="#" class="ads"><img src="tmp/gr_180x100_v3.gif" alt="" width="180" height="100" /></a>
            <a href="#" class="ads"><img src="tmp/tf_180x100_v1.gif" alt="" width="180" height="100" /></a>
            <a href="#" class="ads">Want to b display here?</a>
            </div>
            
            
            <h4>Blogroll</h4>
            <ul>
            	<li><a href="#">Envato</a></li>
            	<li><a href="#">ThemeForest</a></li>
            	<li><a href="#">Devilcantburn</a></li>
            	<li><a href="#">Google</a></li>
            	<li><a href="#">GraphicRiver</a></li>
            </ul>
            
            
            <h4>Network</h4>
            <ul>
            	<li><a href="<?php echo $flickr ;?>"><?php echo $flickr_account ;?></a></li>
            	<li><a href="<?php echo $twitter ;?>"><?php echo $twitter_account ;?></a></li>
            	<li><a href="<?php echo $linkedin ;?>"><?php echo $linkedin_account ;?></a></li>
            	<li><a href="<?php echo $vimeo ;?>"><?php echo $vimeo_account ;?></a></li>
            	<li><a href="<?php echo $facebook ;?>"><?php echo $facebook_account ;?></a></li>
            </ul>
      </div>
        <!-- /sidebar -->
        <br class="clear" />
    
    <!-- /Wrap Block Content -->
    </div>
    <div class="wrap_bottom"></div>
    <!-- /Wrap Block Style -->
    
    </div>
</div>
<!-- /MAIN -->

 
<?php include('includes/footer.php'); ?>
</body>
</html>
