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
				    	<li><a href="">Your Web Host Admin</a></li>
				    	<li><a href="">Your Favourite Cheat Sheet</a></li>
				    	<li><a href="">Your GitHub Page</a></li>
			    	</ul>
			    </nav>
			    
		    </header>

		    <content class="cf">
		    <?php foreach ($dir as $d) { 
		    $dirsplit = explode('/', $d);
		    $dirname = $dirsplit[count($dirsplit)-2];		    
		    ?>
					
		        <ul class="sites <?php echo $dirname ?>">
		
		        <?php foreach(glob($d) as $file)  {  ?>
		            
		            <li><?php
		            $siteroot = "http://".basename($file).'.'.$dirname.'.local';
		            
		            		            
		            if (file_exists($file.$iconname1)) {
		                echo '<img src="'.$siteroot.'/apple-touch-icon.png">';
		            } elseif (file_exists($file.$iconname2)) {
		                echo '<img src="'.$siteroot.'/favicon.ico">';
		            } else {
		            	echo '<span class="no-img"></span>';
		            }
		            ?> 
		            
		            <a class="site" href="<?php echo $siteroot ?>"><?php echo basename($file) ?></a>
		                
		                <?php 
		
		                $wp_dir = $file . '/www/wp-content';
		                if (is_dir($wp_dir)) {
		                    echo ' <a class="wp icon" href="http://' . basename($file) . '.sites.local/wp-admin" title="WordPress Admin Page">wp</a>'; 
		                } ?>
		
		            </li>
				
				<?php } ?>

		        </ul>
		        		
		   	<?php } ?>
			</content>
		    
		    <footer class="cf">
		    <p>footer</p>
		    </footer>
		    
	    </div>
    </body>
</html>