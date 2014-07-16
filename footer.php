	</div>
</div>

<div class="col-md-3 col-md-offset-1 sidebar">
	<div class="row">
		<div class="card hovercard">
			<img src="<?php echo site_meta('google-plus-header'); ?>" alt="Google Plus Header"/>
			<div class="avatar">
				<img src="<?php echo site_meta('google-plus-profile-image'); ?>" alt="Google Plus Profile Image" />
			</div>
			<div class="info">
				<div class="title">
					<a title="Google+ Profile" rel="author" href="<?php echo site_meta('google-plus-profile'); ?>" target="_blank"><?php echo site_meta('google-plus'); ?></a>
				</div>
				<div class="bottom">
					<!-- <button class="btn">Add</button>-->
				</div>
			</div>
		</div>
	</div>
	<div class="row">
        	<div class="card hovercard">
                	<div class="article">
                        	<h4>This site has been live for:</h4>
                        	<p><div id="counter"></div></p>
        		</div>
        </div>
        </div>
	<div class="row">
		<div class="card hovercard">
			<h3 class="text-center">Categories</h3>
			<div class="article">
				<?php while(categories()): ?>
					<h4>
						<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
							<?php echo category_title(); ?>
						</a>
						<span>(<?php echo category_count(); ?>)</span>
					</h4>
					<hr />
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>




		</div>
	</div>
</div>

<div class="footer navbar-fixed-bottom">
	<div class="container">
		<div class="col-md-6">
			<p class="text-muted text-center">
				<small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
			</p>
		</div>
		<div class="col-md-6">
			<p class="text-muted text-center">
				<a target="_blank" title="RSS Feed" class="label label-warning" href="<?php echo rss_url(); ?>">RSS</a>
				<?php if(twitter_account()): ?>
					<a target="_blank" title="Twitter Profile" class="label label-info" href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a>
				<?php endif; ?>
				<?php if(google_account()): ?>
					<a target="_blank" title="Google+ Profile" class="label label-danger" rel="publisher" href="<?php echo google_account();?>">Google +</a>
				<?php endif; ?>
			</p>
		</div>
	</div>
	<a href="#" title="Scroll to top"><span class="scroll-top"><i class="fa fa-arrow-up"></i></span></a>
</div>


<div id="search">
	<a href="#"><i id="search-close" class="fa fa-times fa-2x"></i></a>
	<form action="<?php echo search_url(); ?>" method="post">
		<input type="search" id="term" name="term" placeholder="Search ..." value="<?php echo search_term(); ?>" autocomplete="off"required/>
	</form>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo theme_url('js/jquery-1.11.0.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="<?php echo theme_url('js/main.js'); ?>"></script>
    <script src="<?php echo theme_url('js/nav.js'); ?>"></script>
    <script src="<?php echo theme_url('js/search.js'); ?>"></script>
    <script src="<?php echo theme_url('js/timer.js'); ?>"></script>
  </body>
</html>
