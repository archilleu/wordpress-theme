<?php
/**
 * The main template file
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

includeLinkStyle(get_template_directory_uri().'/static/css/index.css');
get_header(); ?>

<div class="index-main">
	<div class="row shortcut">
		<div class="col-md-12 col-xs-12">

			<div class="content">
				<ul>
					<li class="waybill">
						<!--a class="zz" href="javascript:void(0)">	运单追踪</a-->
						<a class="zz" href="/">
							<span class="glyphicon glyphicon-search"></span>运单追踪
						</a>
					  <!-- <div class="quick-tool">
		            <div class="bill-number clearfix folded">
		              <div class="form-wrap">
		                <div class="icon"><a href="javascript:void(0)"></a></div>
		                <div class="tokenfield form-control"><input type="text" class="tokenfield bill-numbers-input before-placeholder" placeholder="您可以输运单号进行查询" tabindex="-1" style="position: absolute; left: -10000px;"><input type="text" tabindex="-1" style="position: absolute; left: -10000px;"><input type="text" class="token-input" autocomplete="off" placeholder="您可以输运单号进行查询" id="1511421491088159-tokenfield" tabindex="0" style="min-width: 90px; width: 248px;"></div>

		                <div class="notice">最多可查询20条，以逗号、空格或回车键隔开</div>
		              </div>
		              <div class="error" data-error="bill-number-format">*运单号只能为12位数字，且不能重复。</div>
		              <div class="error" data-error="limit-exceeded">* 您已输入超过20条运单号，系统将自动截取并显示前20条运单号的追踪信息</div>
		              <div class="phone">
		                <input type="text" placeholder="或您可以输入手机号进行查询">
		                <div class="icon"><a href="javascript:void(0)"></a></div>
		              </div>
						  <div class="error" data-error="phone-number-format">* 请输入正确的手机号码</div>
	              <button type="button" class="primary-button submit">马上查单</button>
	            </div>
	          </div> -->
					</li>
					<li>
						<a class="jd" href="">
							<span class="glyphicon glyphicon-send"></span>我要寄件
						</a>

					</li>
					<li>
						<a class="sx" href="">
							<span class="glyphicon glyphicon-usd"></span>运费时效查询
						</a>
					</li>
					<li>
						<a class="wd" href="">
							<span class="glyphicon glyphicon-map-marker"></span>服务网点查询
						</a>
					</li>
					<li>
						<a class="fw" href="/">
							<span class="glyphicon glyphicon-eye-open"></span>收寄范围查询
						</a>
					</li>
					<li class="pb-last">
						<a class="kf" href="">
        				<span class="glyphicon glyphicon-earphone"></span>在线客服
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row news-express">
		<?php
			//show category
			$category1 = 26;
			$thisCat = get_category($category1);
		?>
		<div class="col-md-12 title">
			<?php echo $thisCat->name; ?>
			<span>
				<?php echo $thisCat->description; ?>
			</span>
		</div>
		<a href="<?php echo get_category_link( $thisCat->term_id ) ?>" alt="">查看全部&gt;&gt;</a>
		<div class="col-md-12 col-xs-12 news-excerpt">
			<!-- https://codex.wordpress.org/Class_Reference/WP_Query	 -->
			<!-- https://www.wpzhiku.com/all-wp_query-arguments-comments/ -->
			<?php
			// the query
			$args = array(
				'cat' => $category1,
				'posts_per_page' => 4
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<!-- pagination here -->

				<div class="row">
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-sm-6 col-md-3 news-item">
				    <div class="thumbnail">
							<!-- 特色图片 用于新闻封面-->
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium');}?>
				      <div class="caption">
								<!-- 标题 -->
								<h4><?php the_title(); ?></h4>
								<!-- 摘要 -->
								<?php the_excerpt(); ?>
				      </div>
				    </div>
				  </div>
				<?php endwhile; ?>
				</div>
					<!-- end of the loop -->
					<!-- pagination here -->
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<?php
	// get_sidebar();
	?>
</div>

<?php get_footer();
