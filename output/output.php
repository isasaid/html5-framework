<?php include '../config/config.php' //config ?>

 <?php include '../framework/doctype.html' //website utility ?>
	
	<title><?php include $app_title //title ?></title>
	
		<?php include '../framework/metatag.php' //property ?>
		
		<?php include '../framework/link-rel.php' //property ?>

		<?php include $theme_style //content -- html5 style ?>
	
	</head>
		
<body>
        
		<?php include '../framework/javascript.html' //content -- html5 javascript ?>
		
		<?php include $theme_menu //menu ?>
		
		<?php include $app_content //content ?>
		
		<?php include '../framework/sidebar.php' //sidebar ?>
		
		<?php include $theme_footer //footer ?>
			
		<!--?php include 'google.html' //plugin ?>-->
		
		<!--?php include 'ads.html' //plugin ?>-->
		
		<!--?php include 'plus.html' //plugin ?>-->
	</body>	
	</html>