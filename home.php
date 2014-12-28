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
            <ul>
                <li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></li>
            </ul>
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
		</div>
	</div>
    
<?php get_footer(); ?>