<?php theme_include('article-header'); ?>

		<div class="col-sm-12 panel">
			<div class="header row">
				<div class="panel-thumbnail"><img class="img-responsive" src="<?php echo article_custom_field('image'); ?>"></div>
				<div class="col-md-10 text-left">					
					<div class="panel-heading">
						<h2><?php echo article_title(); ?></h2>
						<h5><span><i class="fa fa-clock-o"></i> <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span> | By <span><?php echo article_author('real_name'); ?></span></h5>
						<span class="label label-info"><a href="<?php echo article_category_url(); ?>">#<?php echo article_category(); ?></a></span>
					</div>
				</div>
			</div>
			<div class="article-intro">
				<div class="panel-body">
                			<p><?php echo article_markdown(); ?></p>
				</div>
			</div>
			<div class="meta">
				<a class="btn btn-default" href="http://twitter.com/share?url=<?php echo full_url(); ?><?php echo current_url();?>&text=<?php echo article_title(); ?><?php if(site_meta('twitter')): ?>&via=<?php echo site_meta('twitter'); ?><?php endif; ?>" target="_blank"><span class="icon-stat"><i class="fa fa-twitter"></i></span>
				Tweet This</a>
			</div>
		</div>
			<?php if(has_pagination()): ?>
                <nav class="pagination">
                        <div class="wrap">
                                <?php echo posts_prev(); ?>
                                <?php echo posts_next(); ?>
                        </div>
                </nav>
        <?php endif; ?>

<?php theme_include('footer'); ?>
