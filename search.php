<?php theme_include('header'); ?>

<h1 class="wrap">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

<?php

if(total_search_results() == 1){
	echo '<h3>There is '. total_search_results() .' result</h3>';
}
if(total_search_results() >1){
	echo '<h3>There are '. total_search_results() .' results</h3>';
}
?>

<?php if(has_search_results()): ?>
	<?php $i = 0; while(search_results()): $i++; ?>
	
                <div class="col-sm-12 panel">
                        <div class="header row">
                                <div class="col-md-10 text-left">
                                        <div class="panel-heading">
                                                <h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
                                                <h5><span><i class="fa fa-clock-o"></i> <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span> | By <span><?php echo article_author('real_name'); ?></span></h5>
                                                <span class="label label-info"><a href="<?php echo article_category_url(); ?>">#<?php echo article_category(); ?></a></span>
                                        </div>
                                </div>
                        </div>
                        <div class="article-intro">
                                <div class="panel-body">
                                </div>
                        </div>
                        <div class="meta">
                                <a class="btn btn-default" href="<?php echo article_url(); ?>">Read More</a>
                        </div>
                </div>


		<?php endwhile; ?>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: ?>
	<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>

<?php theme_include('footer'); ?>
