<?php
/**
 * The category news template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.0
 */

includeLinkStyle(get_template_directory_uri().'/static/css/category-news.css');
get_header(); ?>

<div class="row">
  <div class="banner col-md-12 col-xs-12">
    <img src="<?php echo get_template_directory_uri(); ?>/static/images/news/banner.jpg" alt="...">
  </div>
  <div class="col-md-12 col-xs-12 news-list">
      <div class="col-md-12 col-xs-12 time-range">
        <div class="drop-down row">
				  <div class="select col-md-offset-4 col-md-2" id="yearSelector">
            <?php $nowYear = date('Y')?>
              <div class="form-group">
                <select>
                <?php $fromYear = 2010; ?>
        				<?php while ( $nowYear>$fromYear): ?>
                  <option value="<?php echo $nowYear;?>"><?php echo $nowYear-- ?></option>
        				<?php endwhile; ?>
                </select>
              </div>
  				</div>
  				<div class="select col-md-2" id="monthSelector">
  				<!--如果当月新闻为空则显示全部新闻
  				<p><span>全部</span></p>

  				-->
            <?php $nowYear = date('Y')?>
              <div class="form-group">
                <select>
                <?php $fromMonth= 1; $toMonth=12;?>
        				<?php while ( $toMonth>=$fromMonth): ?>
                  <option value="<?php echo $fromMonth;?>"><?php echo $fromMonth++ ?></option>
        				<?php endwhile; ?>
                </select>
              </div>
  				</div>
  			</div>
      </div>
      <div class="col-md-12 col-xs-12 content">
      <?php if(have_posts()): ?>
        <ul>
        <?php while(have_posts()): the_post();?>
          <li>
          <div><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
          <?php the_excerpt(); ?>
          </li>

        <?php endwhile; ?>
        </ul>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      <?php pagination();?>
      </div>
  </div>
</div>

<?php get_footer();
