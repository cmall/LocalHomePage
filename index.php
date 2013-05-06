<!DOCTYPE html>

<?php include('config.php'); ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Local</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">
    </head>
    
    <body>

	    <div class="canvas">
	    
		    <header>
		    
			    <h1>My Local Sites</h1>
			        
			    <nav>
			    	<ul>
				    	<li><a href="<?php echo $webhostadmin_url ?>">Your Web Host Admin</a></li>
				    	<li><a href="<?php echo $github_url; ?>">GitHub</a></li>
			    	</ul>
			    </nav>
			    
			    <nav>
			        <ul>
			            <?php foreach ( $devtools as $tool ) { ?>
			            	<li><a href="<?php echo $tool['url']; ?>"><?php echo $tool['name']; ?></a></li>
			            <?php } ?>
			        </ul>
			    </nav>
			    
		    </header>

		    <content class="cf">
		    <?php foreach ($dir as $d) { 
		    $dirsplit = explode('/', $d);
		    $dirname = $dirsplit[count($dirsplit)-2];
		    $project = basename($file);		    
		    ?>
					
		        <ul class="sites <?php echo $dirname ?>">
		
		        <?php foreach(glob($d) as $file)  {  ?>
		        
		        	<?php if ( in_array( basename($file), $hiddensites ) ) continue; ?>
		            
		            <li><?php
		            $siteroot = "http://".basename($file).'.'.$dirname.'.'.$tld;
		            
		            		            
		            if (file_exists($file.$iconname1)) {
		                echo '<img src="'.$siteroot.'/apple-touch-icon.png">';
		            } elseif (file_exists($file.$iconname2)) {
		                echo '<img src="'.$siteroot.'/favicon.ico">';
		            } else {
		            	echo '<span class="no-img"></span>';
		            }
		            ?> 
		            <?php if ( array_key_exists( basename($file), $displaynames ) ) { ?>
		            <a class="site" href="<?php echo $siteroot; ?>"><?php echo $displaynames[basename($file)]; ?></a>
		            <?php } else { ?>
		            <a class="site" href="<?php echo $siteroot ?>"><?php echo basename($file) ?></a>
		            <?php } ?>
		                <?php 
		
		                $wp_dir = $file . '/wp-content';
		                if (is_dir($wp_dir)) {
		                    echo ' <a class="wp icon" href="http://'.basename($file).'.'.$dirname.'.'.$tld.'/wp-admin" title="WordPress Admin Page">wp</a>'; 
		                } ?>
		
		            </li>
				
				<?php } ?>

		        </ul>
		        		
		   	<?php } ?>
			</content>
		    
		    <footer class="cf">
		    <p></p>
		    </footer>
		    
	    </div>
    </body>
</html>