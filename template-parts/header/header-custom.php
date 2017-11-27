<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage  company
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<!-- 客户定制页头，可以不用设置 -->
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>

	<!-- 显示站点身份（branding） -->
	<?php
		// get_template_part( 'template-parts/header/site', 'branding' ); 
	?>

</div><!-- .custom-header -->
