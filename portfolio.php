<?php
include('includes/config.php');
// Current page name
$current_page = "Portfolio";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $titlePage_portfolio; ?></title>

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
        Cufon.replace('#coffee, .hover',{ hover: true });
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
    
        <!-- Portfolio -->
        <div id="portfolio">
        
          <!-- Item -->
          <div class="item">
            <h5>DCB WebSite</h5>
           	  <img src="tmp/folio_140_1.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>Hellicious</h5>
           	  <img src="tmp/folio_140_2.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>LiberTea</h5>
           	  <img src="tmp/folio_140_3.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>LoversCore</h5>
           	  <img src="tmp/folio_140_4.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>DCB WebSite</h5>
           	  <img src="tmp/folio_140_1.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>Hellicious</h5>
           	  <img src="tmp/folio_140_2.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>LiberTea</h5>
           	  <img src="tmp/folio_140_3.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>LoversCore</h5>
           	  <img src="tmp/folio_140_4.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>DCB WebSite</h5>
           	  <img src="tmp/folio_140_1.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>Hellicious</h5>
           	  <img src="tmp/folio_140_2.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>LiberTea</h5>
           	  <img src="tmp/folio_140_3.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
        
          <!-- Item -->
          <div class="item">
            <h5>LoversCore</h5>
           	  <img src="tmp/folio_140_4.jpg" width="140" height="140" alt=" " class="img140" />
              <p>This is a small description about this item.</p>
              <p class="choice"><a href="tmp/folio_preview640.jpg" rel="clearbox[gallery=My Gallery]" title="Title of the picture" class="zoom">Zoom</a><a href="<?php echo $nav_portfolio_detail; ?>" class="details">Infos</a></p>
          </div>
          <!-- /Item -->
                
    <br class="clear" />
        </div>
        <!-- /Portfolio -->
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
