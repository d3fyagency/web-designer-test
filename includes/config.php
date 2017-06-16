<?php
// THIS FILE CONTENT THE VARIABLES OF THE TEMPLATE
// You just have to edit variables...

// SITE INFOS
$website_name = 	"96Display";
$website_title = 	"A Great Template On ThemeForest.net";
$destin =			"oblivion@devilcantburn.com";
$domain_name =		"www.devilcantburn.com/96Display";

// SOCIAL NETWORK URL
$flickr = 			"http://www.flickr.com/photos/hiweb/";
$flickr_account =	"My Flickr";
$twitter = 			"http://twitter.com/devilcantburn";
$twitter_account =	"Follow me on Twitter !";
$linkedin = 		"http://www.linkedin.com/pub/hiweb-web/13/959/6b";
$linkedin_account =	"HiWeb on Linked In";
$vimeo = 			"http://www.vimeo.com/";
$vimeo_account =	"Vimeo";
$facebook = 		"http://www.facebook.com/profile.php?id=100000561242186";
$facebook_account =	"Facebook";

// LINKS PAGES
$nav_home = 		"index.php";
$nav_about = 		"about.php";
$nav_blog = 		"blog.php";
$nav_blogview = 	"blogview.php";
$nav_portfolio = 	"portfolio.php";
$nav_portfolio_detail = 	"portfolio_detail.php";
$nav_contact = 		"contact.php";
$nav_thanks = 		"thanks.php";

// PAGES TITLES
$titlePage_home = 		"96Display : A Great Template On ThemeForest.net";
$titlePage_about = 		"96Display : About";
$titlePage_blog = 		"96Display : Blog";
$titlePage_blogview = 	"96Display : Blog Article";
$titlePage_portfolio = 	"96Display : Portfolio";
$titlePage_portfolio = 	"96Display : Portfolio Detail";
$titlePage_contact = 	"96Display : Contact";
$titlePage_thanks = 	"96Display : Thanks for your message !";


// GRAVATAR
function gravatar($email, $size=80)
{
  // Variables
  $default = urlencode('http://$domain_name/tmp/gravatar_default.jpeg');
  $email = md5($email);
 
  // gravatar.com
  $url = 'http://www.gravatar.com/avatar.php';
  $url.= '?gravatar_id=%s';
  $url.= '&amp;size=%d';
  $url.= '&amp;default=%s';
 
  // Create URL
  $url = sprintf
  (
    $url,
    $email,
    intval($size),
    $default
  );
 
  // GENERATE HTML OUT
  $out = ''. $url .'';
  return $out;
}


?>