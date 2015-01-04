<?php get_header(); ?>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1 class="text-center">
                <?php if ( is_front_page() ): ?>
                    <?php bloginfo( 'name' ); ?>
                <?php else: ?>
                    <a href="<?php echo site_url('/'); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php endif ?>
            </h1>
            <h2 class="text-center">
                <?php bloginfo( 'description' ); ?>
			</h2>
		</div>
	</div>
	<div class="row clearfix">
        <div class="col-md-2 column"></div>
	<div class="col-md-8 column">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( is_singular() ): ?> 
                    <h3><center><?php the_title(); ?></center></h3>
            <?php else: ?>
                    <h3><center><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></center></h3>
            <?php endif ?>
            <small><p><?php _e('Categories:', 'clean-and-simple'); ?><?php the_category( ', ' ); ?></p></small>
            <small><p><?php the_tags(); ?></p></small>
            <hr>
            <p><?php the_content('Read more ...'); ?></p>
            <p><?php wp_link_pages(); ?></p>
	        <p><a class="btn btn-info btn-xs" href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter"> <?php _e('Tweet it', 'clean-and-simple'); ?></i></a> | <a class="btn btn-info btn-xs" href="http://facebook.com/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"> <?php _e('Share it', 'clean-and-simple'); ?></i></a></p>
            <?php endwhile; else: ?>
            <?php _e('Sorry, no posts matched your criteria.', 'clean-and-simple'); ?>
            <?php endif; ?>
		</div>
        <div class="col-md-2 column"></div>
	</div>
    
<?php get_footer(); ?>
