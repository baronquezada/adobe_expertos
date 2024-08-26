<!DOCTYPE html>
<html lang="es">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-touch-fullscreen" content="yes" />

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="shortcut icon" href="<?= get_template_directory_uri();?>/favicon.png" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= get_template_directory_uri();?>/style.css" />

  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
			
		<div id="wrapper">
            
            <header>
				<nav class="navbar navbar-expand-md navbar-fixed-top" id="navigation">
					<div class="container">
				    	<a class="navbar-brand" href="javascript:void(0)">
				    		<img src="<?= get_template_directory_uri();?>/imagenes/logofinal.png" id="milogo" />
				    	</a>

					    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
					      	<span class="navbar-toggler-icon"></span>
					    </button>

				    	<?php wp_nav_menu(array('container_class' => 'collapse navbar-collapse', 'container_id' => 'mynavbar', 'menu_class' => 'navbar-nav me-auto')); ?>
				  	</div>
			    </nav>
			</header>

			<div class="clear mb20"></div>