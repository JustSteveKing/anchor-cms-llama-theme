<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo site_name(); ?> | <?php echo page_title('Page can’t be found'); ?></title>


	<meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@JustSteveKing">
        <meta name="twitter:title" content="<?php echo site_name();?>">
        <meta name="twitter:description" content="<?php echo site_description(); ?>">
        <meta name="twitter:creator" content="@JustSteveKing">
        <meta name="twitter:image:src" content="<?php echo full_url(); ?><?php echo theme_url('img/logo.png');?>">
        <meta name="twitter:domain" content="<?php echo full_url(); ?>">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo e(current_url()); ?>">
	<meta property="og:image" content="<?php echo theme_url('img/logo.png'); ?>">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">

	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

    <!-- Bootstrap -->
    <link href="<?php echo theme_url('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo theme_url('css/style.css'); ?>" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo theme_url('img/apple-touch-icon-144-precomposed.png'); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo theme_url('img/apple-touch-icon-114-precomposed.png'); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo theme_url('img/apple-touch-icon-72-precomposed.png'); ?>">
	<link rel="apple-touch-icon-precomposed" href="<?php echo theme_url('img/apple-touch-icon-57-precomposed.png'); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php if(customised()): ?>
	<!-- Custom CSS -->
		<style><?php echo article_css(); ?></style>
	<!--  Custom Javascript -->
		<script><?php echo article_js(); ?></script>
	<?php endif; ?>    
    
  </head>
  <body class="home">
  
  
  
  
<nav>
	<ul class="list-unstyled main-menu">
		<li>
			<div class="main-nav-logo">
				<div class="pull-left">
					<a class="text-left" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
				</div>
				<div class="pull-right">
					<a class="text-right" href="" id="nav-close">X</a>
				</div>
			</div>
		</li>
		<li><a href="<?php echo base_url(); ?>">Home  <span class="icon"></span></a></li>
		<?php if(has_menu_items()): ?>
			<?php while(menu_items()): ?>
				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
						<?php echo menu_name(); ?> <span class="icon"></span>
					</a>
				</li>
			<?php endwhile; ?>
		<?php endif; ?>
	</ul>
	<div class="nav-footer text-center">
		&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>
	</div>
</nav>

<div class="col-lg-12 navbar-fixed-top top-nav">
	<div class="col-sm-3 pull-left left-menu">
		<div class="row">
		<div class="col-sm-1 pull-left nav-menu">
			<a id="nav-expander" class="navbar-menu nav-expander"><i class="fa fa-bars fa-lg white"></i></a>
		</div>
		<div class="col-sm-3 pull-left nav-logo">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
		</div>
		</div>
	</div>
	<div class="col-sm-2 pull-right right-menu">
		<div class="col-sm-2 pull-right">
			<a class="navbar-search" id="search-button" href="#"><i class="fa fa-search"></i></a>
		</div>
	</div>
</div>

<div id="content" class="col-md-12">
	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
