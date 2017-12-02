<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage company
 * @since 1.0
 * @version 1.0
 */

// https://codex.wordpress.org/Function_Reference/comment_form
// http://blog.wpjam.com/article/custom-wordpress-comment-form/

includeLinkStyle(get_template_directory_uri().'/static/css/guestbook.css');
get_header(); ?>

<?php if ( post_password_required() ): ?>
<?php endif ?>

<?php
	$args = array(
		'number' => '5',
	);
	$comments = get_comments($args);
?>

<div class="row">
	<div class="col-md-12">
		<div class="comments-list">
			<div class="title">公共留言板</div>
			<ul>
			<?php foreach($comments as $comment) : ?>
				<li>
				 	<p><?php echo $comment->comment_content; ?></p>
						<div>
						 	<span>用户:<?php echo $comment->comment_author; ?></span>
						 	<span>邮箱:<?php echo $comment->comment_author_email; ?></span>
						 	<span>日期:<?php echo $comment->comment_date; ?></span>
						</div>
				</li>
			<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>

<div id="comments" class="row comments-area">
	<div class="col-md-12" id="guestbook">
	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( '留言板停止使用', 'twentyseventeen' ); ?></p>
	<?php
	endif;
	?>

	<?php
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$fields =  array(
		'author' =>
		'<div class="form-group comment-form-author"><label for="author">' . __( '名字', 'domainreference' ) . '</label> ' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></div>',

		'email' =>
		'<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></div>',

		'url' =>
		'<div class="form-group comment-form-url"><label for="url">' . __( '补充内容(*不会在留言板显示)', 'domainreference' ) . '</label>' .
		'<input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" /></div>',
		);
	$comments_args = array(
		//fields
		'fields'=>$fields,
	  // change the title of send button
	  'label_submit'=>__('提交'),
		'class_submit'=> 'btn btn-primary',
	  // change the title of the reply section
	  'title_reply'=>_('留言'),
	  // redefine your own textarea (the comment body)
	  'comment_field' => '<div class="comment-form-comment"><label for="comment">' . _x( '留言 *', 'noun' ) . '</label>
		<br /><textarea class="form-control" row="3" id="comment" name="comment" aria-required="true"></textarea></div>',
		);

	comment_form($comments_args);

	//获取页面内容
	while ( have_posts() ) : the_post();endwhile;
	echo '<div class="tips">';
	the_content();
	echo "</div>";
	?>
  </div>

</div><!-- #comments -->
<?php get_footer();
