<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav class="row">
	<div id="menu-nav" class="col-md-12">

		<div class="logo"><?php the_custom_logo(); ?></div>

		<ul class="nav-response left">
			<li>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">首页</a>
			</li>
			<?php
			$args=array(
				'hide_empty'=>false,
				'orderby'=>'id',
				'parent'  => 0, //only top level category
				'exclude'=>1 //exclude uncategorized
			);
			$categories=get_categories($args);
			?>
			<?php foreach ($categories as $category): ?>
				<!-- get children -->
				<?php
				$subcategories = get_categories( array(
					'hide_empty'=>false,
					'orderby'=>'id',
					'parent'=> $category->term_id
				));
				?>
				<!-- has children -->
				<?php if($subcategories): ?>
					<li class="dropdown">
						<a href="<?php echo get_category_link( $category->term_id ) ?>" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<?php echo $category->name ?>
							<span class="caret"></span>
						</a>
						<div class="dropdown-menu">
							<ul>
								<?php foreach ($subcategories as $subcategory): ?>
									<li>
										<a href="<?php echo get_category_link( $subcategory->term_id ) ?>" title="<?php echo $subcategory->name?>">
											<?php echo $subcategory->name  ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</li>
				<?php else: ?>
					<li>
						<a href="<?php echo get_category_link( $category->term_id ) ?>" title="<?php echo $category->name?>">
							<?php echo $category->name;  ?>
						</a>
					</li>
				<?php endif ?>

			<?php endforeach; ?>
		</ul>

		<ul class="right">
			<li><span class="glyphicon glyphicon-earphone"></span><span>95338</span></li>
			<li>
				<span><span class="glyphicon glyphicon-user"></span><span class="login">会员登陆</span></span>
				<span><span></span>会员注册</span>
			</li>
		</ul>

	</div>
</nav><!-- navigation -->
