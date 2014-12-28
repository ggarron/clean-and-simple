<?php get_header(); ?>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1 class="text-center">
                <?php if ( is_singular() ): ?>
                        <a href="<?php echo site_url('/'); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php else: ?>
                    <?php bloginfo( 'name' ); ?>
                <?php endif ?>
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
            <?php
                    if ( is_singular() ) {
                        <h3><center><?php the_title(); ?></center></h3> }
                    else {
                        <h3><center><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></center></h3> }
            ?>
            <small><p>Categories: <?php the_category( ', ' ); ?></p></small>
            <small><p><?php the_tags(); ?></p></small>
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