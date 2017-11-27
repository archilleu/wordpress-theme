<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage company 
 * @since 1.0
 * @version 1.0
 */

?>
<div class="header-banner">
	<div class="row">
		<div class="col-xs-12 col-md-12">
            <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-banner" data-slide-to="1"></li>
                    <li data-target="#carousel-banner" data-slide-to="2"></li>
                    <li data-target="#carousel-banner" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/banner/banner-1.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/banner/banner-2.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/banner/banner-3.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/banner/banner-4.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

		</div>
	</div>

</div><!-- .custom-header -->
