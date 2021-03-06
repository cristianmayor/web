<?php
/**
 * Search Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>

<div id="post-<?php bbp_reply_id(); ?>" <?php bbp_reply_class(); ?>>
	<div class="bbp-reply-header">
		<span><?php esc_html_e( 'In reply to: ', 'reign' ); ?>
			<a class="bbp-topic-permalink" href="<?php bbp_topic_permalink( bbp_get_reply_topic_id() ); ?>"><?php bbp_topic_title( bbp_get_reply_topic_id() ); ?></a>
		</span>
		<a href="<?php bbp_reply_url(); ?>" class="bbp-reply-permalink">#<?php bbp_reply_id(); ?></a>
	</div><!-- .bbp-reply-header -->
	<div class="bbp-reply-author">

		<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>
		<div class="bbp-reply-authoravtar">
			<?php bbp_reply_author_link( array( 'type' => 'avatar' ) ); ?>
		</div>
		<div class="bbp-reply-authorname">
			<?php bbp_reply_author_link( array( 'type' => 'name' ) ); ?>

			<?php if ( bbp_is_user_keymaster() ) : ?>

				<?php do_action( 'bbp_theme_before_reply_author_admin_details' ); ?>

				<div class="bbp-reply-ip"><?php bbp_author_ip( bbp_get_reply_id() ); ?></div>

				<?php do_action( 'bbp_theme_after_reply_author_admin_details' ); ?>

			<?php endif; ?>
		</div>
		<div class="bbp-reply-date">
			<span class="bbp-reply-post-date"><?php bbp_reply_post_date(); ?></span>
		</div>

		<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>

	</div><!-- .bbp-reply-author -->

	<div class="bbp-reply-content">

		<?php do_action( 'bbp_theme_before_reply_content' ); ?>

		<?php bbp_reply_content(); ?>

		<?php do_action( 'bbp_theme_after_reply_content' ); ?>

	</div><!-- .bbp-reply-content -->
</div><!-- #post-<?php bbp_reply_id(); ?> -->
