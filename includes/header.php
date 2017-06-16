<!-- HEADER -->
<div id="header">
	<div class="content">
    
    <!-- Logo -->
    <div id="logo"><h1><a href="<?php echo $nav_home; ?>" title="<?php echo $website_title; ?>"><span><?php echo $website_name; ?></span></a></h1></div>
    <!-- /Logo -->
    
    <!-- Menu Navigation -->
    <div id="top_menu">
    	<ul>
        <li><span class="navLink"><a href="<?php echo $nav_home; ?>" <?php if ($current_page == 'Home' || $current_page == '') {echo 'class="current"';} ?>>Home</a></span></li>
        <li><span class="navLink dropper"><a href="#" <?php if ($current_page == 'About') {echo 'class="current"';} ?>>About Us</a></span>
			<ul class="sub_menu">
            	<li class="start"><a href="<?php echo $nav_about; ?>">This is a nice</a></li>
            	<li><a href="<?php echo $nav_about; ?>">Dropdown menu</a></li>
            	<li><a href="<?php echo $nav_about; ?>">build in CSS</a></li>
            	<li><a href="<?php echo $nav_about; ?>">JQuery code</a></li>
            	<li><a href="<?php echo $nav_about; ?>">Is here to display</a></li>
            	<li><a href="<?php echo $nav_about; ?>">your sub menu</a></li>
            	<li><a href="<?php echo $nav_about; ?>">Quickly and</a></li>
            	<li class="end"><a href="<?php echo $nav_about; ?>">With a nice design !</a></li>
            </ul></li>
        <li><span class="navLink"><a href="<?php echo $nav_blog; ?>" <?php if ($current_page == 'Blog') {echo 'class="current"';} ?>>Blog</a></span></li>
        <li><span class="navLink dropper"><a href="#" <?php if ($current_page == 'Portfolio') {echo 'class="current"';} ?>>Portfolio</a></span>
			<ul class="sub_menu">
            	<li class="start"><a href="<?php echo $nav_portfolio; ?>">This is a nice</a></li>
            	<li><a href="<?php echo $nav_portfolio; ?>">Dropdown menu</a></li>
            	<li><a href="<?php echo $nav_portfolio; ?>">build in CSS</a></li>
            	<li><a href="<?php echo $nav_portfolio; ?>">JQuery code</a></li>
            	<li><a href="<?php echo $nav_portfolio; ?>">Is here to display</a></li>
            	<li><a href="<?php echo $nav_portfolio; ?>">your sub menu</a></li>
            	<li><a href="<?php echo $nav_portfolio; ?>">Quickly and</a></li>
            	<li class="end"><a href="<?php echo $nav_portfolio; ?>">With a nice design !</a></li>
            </ul>
        </li>
        <li><span class="navLink"><a href="<?php echo $nav_contact; ?>" <?php if ($current_page == 'Contact') {echo 'class="current"';} ?>>Contact</a></span></li>
        </ul>
    </div>
    <!-- /Menu Navigation -->
    
    <br class="clear" />
    </div>
</div>
<!-- /HEADER -->