<?php
include('includes/config.php');
// Current page name
$current_page = "Blog";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $titlePage_blogview; ?></title>

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
	<script type="text/javascript" src="js/jquery.validate.js"></script>
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
    
    <!-- Form Validator -->
    <script type="text/javascript">
    // VALIDATION REPLY FORM //
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
        
      	<!-- Blog Display -->
		<div class="design blog">
                
                <div class="blog_date">January, 29th, 2010 at 3:26 PM</div>

    			<h2>Interview With “The Man”: Jeffrey Way<span>by Devilcantburn</span></h2>
                
                <p><img src="tmp/blog_image1.jpg" width="610" height="160" alt=" " class="preview" /></p>
                
                <p class="biglines">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                
                <br />

                <h4>Heading &lt;h4&gt;</h4>
                
                <h5>Heading &lt;h5&gt;</h5>
                 
          		<h6>Heading &lt;h6&gt;</h6>
                
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<strong> Et harum quidem rerum facilis est et expedita distinctio.</strong> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</p>
                
                <h4>Styles</h4>
                
          <p>&lt;strong&gt; <strong>96Display Theme</strong> &lt;/strong&gt;<br />
                
            &lt;em&gt; <em>96Display Theme</em> &lt;/em&gt;<br />
            &lt;a&gt;<a href="#">This a link style  to visit my profil !</a>&lt;/a&gt; </p>
                
                <div class="note">Devilcantburn say : Hello World ! This is a note block !</div>
                
                <p><img src="tmp/jflow_1.png" alt="Liber Tea Picture 2" class="img_left" />Lorem ipsum dolor sit amet, consectetauer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec Aenean massa commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetauer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec <a href="#">Aenean massa commodo ligula eget dolor.</a></p>
                
                <p><img src="tmp/jflow_5big.png" alt="Liber Tea Picture 1" width="316" height="160" class="img_right" />Lorem ipsum dolor sit amet, consectetauer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec Aenean massa commodo ligula eget dolor.Lorem ipsum dolor sit amet, consectetauer adipiscing elit. Aenean commodo ligula eget dolor. <strong>Aenean massa</strong>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec Aenean massa commodo ligula eget dolor.</p>
                    
          <ul>
                    <li>An example of simple list element</li>
                    <li>An example of simple list element</li>
                    <li>An example of simple list element</li>
                </ul>
                
                <ol>
                    <li>
                      <p>An example of ordered list element</p>
                    </li>
                    <li>
                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </li>
                    <li>
                      <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    </li>
                    <li>
                      <p>An example of ordered list element</p>
                    </li>
                </ol>
                
                <div class="note">&ldquo;I did the quarterly deal, not to save money, but to not have to worry about it for 3 months.
                I wish there was an annual option. $9/month is a steal for the quality of content available here.&rdquo; &mdash; Adam Jackett on Psd Plus</div>


		
        
                          
                          
                          <!-- Comments -->
                          <div id="comments">
                          
                          	<h3><span>2</span> comments</h3>
                          	
                            <!-- Post -->
                          	<div class="comments_post">
                            
                            	<div class="avatar"><img src="<?php echo gravatar('oblivion@devilcantburn.com', 80); ?>" width="80" height="80" alt=" " /></div>
                                <div class="user_post"><span class="user_name">Devilcantburn</span> say :
                                <p>Lorem ipsum dolor sit amet, consectetauer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec <a href="#">Aenean massa commodo ligula eget dolor.</a></p>
                                </div>
                            
                            <br class="clear" />
                            </div>
                            <!-- /Post -->
                          	
                            <!-- Post -->
                          	<div class="comments_post">
                            
                            	<div class="avatar"><img src="<?php echo gravatar('oblivion@devilcantburn.com', 80); ?>" width="80" height="80" alt=" " /></div>
                                <div class="user_post"><span class="user_name">Devilcantburn</span> say :
                                <p>Lorem ipsum dolor sit amet, consectetauer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec Aenean massa commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetauer adipiscing elit.</p>
                                </div>
                            
                            <br class="clear" />
                            </div>
                            <!-- /Post -->
                          
                          </div>
                          <!-- /Comments -->
                          
                        <div>
                        <div class="pad10_20">
                        <h4>Reply</h4>
                        <p class="biglines">Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. </p></div>
                        <form action="" method="post" id="reply-form">
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
                      </div>


          </div>
            <!-- /Blog Display -->
            
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
