<?php
include('includes/config.php');
// Current page name
$current_page = "Contact";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $titlePage_contact; ?></title>

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
    <script type="text/javascript" src="js/jquery.bgpos.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/jquery.googlemaps1.01.js"></script>
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
    
     <!-- Google Map Key -->
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAA6kQ5d_ZZG2I52I3jLyR1nhR_DA4ZoS5qXClwLkrddyY-0-BhUhRbKH99HEdt3TdKQr8vhkXbEhD9rA" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() { 
        $('#map_canvas').googleMaps({
                  latitude: 	45.545491,
                  longitude: -73.621926,
              markers: {
                  latitude: 	45.545491,
                  longitude: -73.621926
              }
          }); 
      }); 
    </script>
    <!-- /Google Map -->
    
    <!-- Form Validator -->
    <script type="text/javascript">
    // VALIDATION CONTACT FORM //
    $(document).ready(function() {
        $("#reply-form").validate();
    });
    </script>
    <!-- /Form Validator -->
    
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
                        
                        	<h3>Contact us!</h3>
                            <p class="biglines">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
<form action="sendmail.php" method="post" id="reply-form">
                            <p>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="" class="field required" />
                          </p>
                            <p>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" value="" class="field email required" />
                            </p>
                            <p>
                            <label for="website"> Website:</label>
                            <input type="text" name="website" id="website" value="" class="field" />
                            </p>
                            <p class="messager">
                            <label for="comment">Message:</label>
                            <textarea name="comment" id="comment" class="textarea required" rows="10" cols="10"></textarea>
                            </p>
                            <?php
							//VERIF CAPTCHA DEVILCANTBURN
							if($_GET['doh'] == "error") 
								$error = '<label class="error">Oops... Retry !</label>';
								
									// Captcha
									$n1 = rand(1, 10);
									$n2 = rand(1, 10);
									
									echo '<p><label for="check">' .$n1. ' + '.$n2.' = ?</label>
										  <input type="text" name="check" id="check" size="2" maxlength="2" class="field required number" />';
									
									echo '<input type="hidden" name="1" value="'.$n1.'" />';
									echo '<input type="hidden" name="2" value="'.$n2.'" /><br/>';
									
									echo $error.'</p>';
									?>
                            
                          <p>
                            <input type="submit" class="submitter" id="submit" value="Post!" />
                          </p>
          </form>
                        
                        <div id="google_map">
                        	<h3 class="gomashow"><span>Find us on google map!</span></h3>
                        	<div class="view"><div id="map_canvas"></div></div>
                        </div>
            
        </div>
        <!-- /left part -->
        
        
            
        <!-- sidebar -->
        <div class="sidebar">
        	<div class="illustration"><img src="tmp/testimonial.png" width="256" height="256" alt=" " class="paint" /></div>
            
            <h4>Search</h4>
            <form action="#" method="post" id="search_form">
            	<p>
                <input type="text" name="search" value="" class="field"  />
                <input type="submit" name="submit" value=">" class="submit" />
                <p>
            </form>
            
            <!-- Personnal Informations -->
            <div id="personnal_infos" class="text">
                <h4>96Display</h4>
                <p>PO Box 4000<br />
                Little Lonsdale St, Melbourne<br />
                Victoria 8011 Australia</p>
                <p>+61 (0) 3 8075 0074</p>
                <p><a href="#">support.96Display.com</a></p>
                <br />
            </div>
            <!-- /Personnal Informations -->
            
            <!-- Downloads -->
            <div id="personnal_infos" class="text">
                <h4>Downloads</h4>
                <ul>
            	<li><a href="#">Press releases</a></li>
            	<li><a href="#">96Displas logos</a></li>
            	<li><a href="#">Photographies</a></li>
            	</ul>
            </div>
            <!-- /Downloads -->
            
            
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
