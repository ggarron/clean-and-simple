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
                <h2><?php the_title(); ?></h2>
 
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?>

            <?php endwhile; else: ?>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
 
            <?php
                if ( get_next_posts_link() ) {
                    next_posts_link();
                }
            ?>
            <?php
                if ( get_previous_posts_link() ) {
                    previous_posts_link();
                }
            ?>
 
            <?php else: ?>
 
                <p>No posts found. :(</p>
 
            <?php endif; ?>
		</div>
	</div>
    
<?php get_footer(); ?>