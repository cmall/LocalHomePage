<?php

/**
*  
*  This is just a simple config file to store your web root and a few other items
*  
*  Change "/www/sites/*" to the directory where you keep your sites. 
*  Add multiple directories like this:
*  
*  $dir = array("/www/sites1/*","/www/sites2/*");
*  
*  The "iconnames" variables are just a couple of common icon filesnames that the page will look for in your web root. If either is present, they will be shown next to the sitename. You can change these if you like, but both types should be in your web root for favicons to work.
*  
*/


/** directory name(s) */
$dir = array("/www/sites/*");
					
/** Your local top level domain */
$tld = 'dev';

/** Your first and second priority icon files names */
$iconname1 = '/www/apple-touch-icon.png';
$iconname2 = '/www/favicon.ico';

?>