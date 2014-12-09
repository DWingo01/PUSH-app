<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','danielwingo.dw@gmail.com');
	define('MESSAGE_SUBJECT','Contact Form');
	define('REPLY_TO', 'danielwingo.dw@gmail.com');
	define('FROM_ADDRESS', 'danielwingo.dw@gmail.com');
	define('REDIRECT_URL', 'google.com');
	
	require_once('validation.php');

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php include('inc/header.inc.php'); ?>
     
    <div class="large-6 columns"><!--start of logo column-->
        <div class="row"><!--start of logo-->
 
          <div class="large-12 columns">
 
            <img src="img/PUSH-logo_03.png"><br>
 
          </div>
            
        </div><!--end of logo-->
 
        
        <div class="row"><!--start of subtitle of logo-->
            
            <div class="large-12 columns">
 
            <div class="clear-panels ">
            <p class="large-heading">The mobile-based, cross-platform, project-management solution.<p>
            </div>
 
          </div>
        </div><!--end of subtitle of logo-->
    </div><!--start of logo column-->    
    
    <div class="large-6 columns"><!--start of platform column-->
        <div class="row"><!--start of logo-->
 
          <div class="large-12 columns">
 
            <img src="img/phones.png"><br>
 
          </div>
            
        </div><!--end of logo-->
 
        
        <div class="row"><!--start of subtitle of logo-->
            
            <div class="large-12 columns">
 
            <div class="clear-panels ">
            <p>The mobile-based, cross-platform, project-management solution.<p>
            </div>
 
          </div>
        </div><!--end of subtitle of logo-->
    </div><!--start of platform column-->    
 
    </div>
  </div>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
