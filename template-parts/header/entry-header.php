<?php
/**
 * Displays the post header
 *
 * @package hoya
 * @subpackage hoya
 * @since 1.0.0
 */

?>

<?php if ( is_home() ) : ?>

<div class="container">
    <?php
		$args = array(
			'numberposts'      => 15,
			'category'         => 17,//home-carousel id
		);
		$latest_posts = get_posts( $args );
	?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
			<?php $idx = 0; foreach ( $latest_posts as $post ) :
			setup_postdata( $post ); ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $idx; ?>" class="<?php if($idx==0): echo 'active'; endif; ?>"></li>
				<?php $idx++; endforeach; 
			wp_reset_postdata(); ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
			<?php $idx = 0; foreach ( $latest_posts as $post ) :
			setup_postdata( $post ); ?>
				<div class="item <?php if($idx==0): echo 'active'; endif; ?>">
					<?php the_content(); ?>
					<div class="carousel-caption">
						<?php the_title(); ?>
					</div>
				</div>
				<?php $idx++; endforeach; 
			wp_reset_postdata(); ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php endif; ?>
</div>