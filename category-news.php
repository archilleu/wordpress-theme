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

get_header(); ?>

<style>

.banner>img {
  width: 100%;
}

.news-list {
    margin-bottom: 50px;
}

.news-list .time-range {
  height: 90px;
  background: #f1f1f1;
  width: 100%;
}
.news-list .time-range .form-group{
  margin-bottom: 0;
}
.news-list .time-range .form-group select{
  border: none;
  background-color: transparent;
  -webkit-appearance:none;
  -moz-appearance:none;
  appearance:none;
  font-size: 18px;
  width: 100%;
  height: 90px;
  padding: 0 60px;
}
.news-list .time-range .form-group select:hover{
  color: red;
  cursor: pointer;
}
.news-list .time-range .form-group select:hover option{
  padding: 0 60px;
  font-size: 14px;
  color: black;
}
.news-list .time-range .form-group select:focus{
  outline: none;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
}

.news-list .content {
    margin-top: 88px;
}

.news-list .content>ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.news-list .content>ul>li {
  padding: 25px 50px;
  border: 1px solid #dbdada;
  margin-bottom: 25px;
}

.news-list .content>ul>li>div>a {
  font-size: 20px;
  color: #333;
}
.news-list .content>ul>li a:hover {
  text-decoration: none;
  color: #dc1e32;
}

.news-list .content>ul>li>p {
  font-size: 16px;
  color: #333;
  line-height: 24px;
  margin-top: 15px;
  display: inline-block;
}

</style>

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
          <?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> [ 详情 ]</a>
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
