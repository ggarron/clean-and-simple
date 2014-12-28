<?php get_header(); ?>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1 class="text-center">
                <?php bloginfo( 'name' ); ?>
            </h1>
            <h2 class="text-center">
                <?php bloginfo( 'description' ); ?>
			</h2>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h4><center><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></center></h4>
            <hr>
            <small><p>Categories: <?php the_category( ' &bull; ' ); ?></p></small>
            <hr>
            <small>Tags: <?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></small>
            <hr>
            <p><?php the_content('Read more ...'); ?></p>
            <?php endwhile; else: ?>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
		</div>
	</div>
    
<?php get_footer(); ?>