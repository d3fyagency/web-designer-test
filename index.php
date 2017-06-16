<?php
include('includes/config.php');
// Current page name
$current_page = "Home";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $titlePage_home; ?></title>

	<!-- METAS -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
	<!-- /METAS -->

	<!-- CSS -->
    <link href="css/styles.css" rel="stylesheet" media="all" />
    <link href="css/theme.css?v=2" rel="stylesheet" media="all" />
	<!-- /CSS -->
    
	<!-- JQuery and Plugins -->
    <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.flow.1.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/clearbox.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
	<!-- /JQuery and Plugins -->
    
    <!-- Cufon -->
		<script src="js/cufon-yui.js" type="text/javascript"></script>
    	<script type="text/javascript" src="js/bebas_400.font.js"></script>
		<script type="text/javascript">
			Cufon.replace('h4',{ hover: true });
			Cufon.replace('.navLink',{ hover: true });
			Cufon.replace('.central_slogan');
			Cufon.replace('#coffee',{ hover: true });
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


<!-- HOME SLIDER -->
<div id="home_slider">
	<div class="content">
    
    <!-- slogan -->
    <div class="central_slogan">we build  creative &amp; magic websites.</div>
    <!-- /slogan -->
    
    <!-- slider -->
    <div id="the_slidefader">
    	<div class="shadow_glow"></div>
        <div id="slideshow">
            <img src="tmp/home_fade_1.jpg" alt="Slideshow Image 1" class="active" />
            <img src="tmp/home_fade_2.jpg" alt="Slideshow Image 2" />
            <img src="tmp/home_fade_3.jpg" alt="Slideshow Image 3" />
            <img src="tmp/home_fade_4.jpg" alt="Slideshow Image 4" />
        </div>
    </div>
    <!-- /slider -->
    
    </div>
</div>
<!-- /HOME SLIDER -->


<!-- MAIN -->
<div id="main">
	<div class="content">
    
    <!-- Wrap Block Style -->
    <div class="wrap_top"></div>
    <div class="wrap_block">
    <!-- Wrap Block Content -->
    
        <!-- 3 cols -->
        <div class="cols_by_3">
            <!-- column -->
            <div class="cols_by_3_col">
                <h4>This is a H4 Tag style</h4>
                <p><img src="tmp/icon_designertools.png" alt="" width="60" height="60" class="img_left" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<a href="#" class="readmore">Read more...</a></p>
            </div>
            <!-- column -->
            
            <!-- column -->
            <div class="cols_by_3_col">
                <h4>This is a H4 Tag style</h4>
                <p><img src="tmp/icon_tablet.png" alt="" width="60" height="60" class="img_left" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<a href="#" class="readmore">Read more...</a></p>
            </div>
            <!-- column -->
            
            <!-- column -->
            <div class="cols_by_3_col">
                <h4>This is a H4 Tag style</h4>
                <p><img src="tmp/icon_search.png" alt="" width="60" height="60" class="img_left" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<a href="#" class="readmore">Read more...</a></p>
            </div>
            <!-- column -->
            
        <br class="clear" />
        </div>
        <!-- /3cols -->
    
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
