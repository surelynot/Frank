<article itemscope itemtype="http://schema.org/BlogPosting" class="post">
	<header class="post-header">
		<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<section class="post-content">
		<?php the_post_thumbnail( 'featured-image' ); ?>
		<p><?php echo get_the_excerpt(); ?> <span class='more-link'><a href="<?php the_permalink(); ?>">Read On&hellip;</a></span></p>
	</section>
	<footer class="post-info">
		<ul class='metadata horizontal clearfix'>
			<li class='date'><time itemprop="datePublished" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time></li>
			<li class='author'>By <?php the_author_link(); ?></li>	
			<li>Filed Under <?php the_category(', '); ?></li>											
			<li class='comments'><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
		</ul>
	</footer>
</article>