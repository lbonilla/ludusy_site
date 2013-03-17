<!DOCTYPE html>	
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ludusy Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ludusy Group Site">
    <meta name="author" content="Ludusy">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">        
    <link href="/css/ludusy.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">
  </head>
  <body>
  
 <?php>
 // Create connection
  		 $con=mysqli_connect("184.168.155.106","ludusy","Cocoro@123","ludusy");
		
		 // Check connection
		  if (mysqli_connect_errno($con))
		  {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }	
		 
 ?>
  
     <div class="navbar navbar-fixed-to ludusy-navbar" >
      <div class="navbar-inner">
        <div class="container ">
          <button type="button" class="btn btn-navbar " data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>	
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Ludusy </a>
          <div class="nav-collapse collapse " style="padding-top: 17px;">	
            <ul class="nav">
              <li><a href="#">Home</a></li>
              <li><a href="#about">What we are</a></li>
              <li><a href="#POS">Posts</a></li>
              <li><a href="#contact">Contact</a></li>              
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class ="ludusy-section-header">
	    <div class="container">	
		      <div class="row">
			      	<div class="span1">
			      	</div>
			      	<div class="span10">
				      	<!--Description header-->
				        <img src="img/HeaderSlider/header1.jpg" alt="header1" width="1024" height="600">
			      	</div>
			      	<div class="span1">
			      	</div>
		      </div>
	    </div>
    </div>
	<div class="ludusy-section-post">    
	<div class="ludusy-header-line">
		<h1 style='	margin-left: 10%;'>Blog Post</h1>		
	</div>
	    <div class="container">
		    
	      <!--Posts Section-->
	      <div class ="row">
		      <?php		        
		      $result = mysqli_query($con,"SELECT Id, Tittle,Description, DATE_FORMAT(PublishDate, '%M %D, %Y') AS PubDate FROM Post ORDER BY PublishDate DESC LIMIT 6 ;");
				while($row = mysqli_fetch_array($result))
				  {				  
					  echo "<div class='span4'>";	
						  echo "<div class='ludusy-post-preview'>";
							  echo "<div class='ludusy-post-preview-wrapper'>";						  							  
								  echo "<div class='ludusy-post-preview-content'>";						  	
									  echo "<h4 class='date'>" . $row['PubDate'] ."</h4>";
									  echo "<h3>" . $row['Tittle'] . "</h2>";					  
									  echo "<p>" .  $row['Description'] . "</p> ";
								  echo "</div>";	  
								  echo "<div class='ludusy-post-readMore'>";
									  echo "<div class='space'></div>";								  	
									  echo "<p><a  href='http://ludusy.com/Posts.php?id=" . $row['Id']."'> Read More &raquo; </a></p>";
								  echo "</div>";
						       echo "</div>";
						  echo "</div>";				  
					  echo "</div>";
				  
				  }
			
		      ?>
	      </div>
	</div>      

    </div> <!-- /container -->
    <hr>
    <footer>
          <p>&copy; Company 2013</p>
    </footer>
	 <?php
	$con=mysqli_connect("184.168.155.106","ludusy","Cocoro@123","ludusy");
	
	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	
	mysqli_close($con);
	?> 

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap-transition.js"></script>
    <script src="/assets/js/bootstrap-alert.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
    <script src="/assets/js/bootstrap-dropdown.js"></script>
    <script src="/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/js/bootstrap-tab.js"></script>
    <script src="/assets/js/bootstrap-tooltip.js"></script>
    <script src="/assets/js/bootstrap-popover.js"></script>
    <script src="/assets/js/bootstrap-button.js"></script>
    <script src="/assets/js/bootstrap-collapse.js"></script>
    <script src="/assets/js/bootstrap-carousel.js"></script>
    <script src="/assets/js/bootstrap-typeahead.js"></script>
  </body>
</html>
