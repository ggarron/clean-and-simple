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
        <div class="col-md-3 column"></div>
		<div class="col-md-6 column">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3><center><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></center></h3>
            <small><p>Categories: <?php the_category( ' &bull; ' ); ?></p></small>
            <small><p>Tags: <?php the_tags( 'Tagged with: ', ' • ', '<br />' ); ?></p></small>
            <hr>
            <p><?php the_content('Read more ...'); ?></p>
            <p><?php wp_link_pages(); ?></p>
            <?php endwhile; else: ?>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
		</div>
        <div class="col-md-3 column"></div>
	</div>
    
<?php get_footer(); ?>