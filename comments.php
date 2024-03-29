<div id="comment-<?php comment_ID(); ?>" <?php comment_class('hentry'); ?>>

	<address class="vcard author entry-title">

		<?php if (function_exists('get_avatar')) { echo get_avatar($comment, 48); } ?>

		<cite class="n"><?php comment_author_link(); ?></cite>

	</address>

	<div class="entry-content">

		<?php if ($comment->comment_approved == '0') : ?>
		<p class="notification"><em><?php _e('Your comment is awaiting moderation'); ?></em></p>
		<?php endif; ?>

		<?php comment_text(); ?>

	</div>

	<a rel="bookmark" href="<?php echo htmlspecialchars(get_comment_link( $comment->comment_ID )); ?>"><abbr class="published" title="<?php comment_time('Y-m-dTH:i'); ?>"><?php comment_date(); ?> @ <?php comment_time(); ?></abbr></a>

	<?php if (function_exists('comment_reply_link')) { comment_reply_link(array_merge( $args, array('respond_id' => 'respond', 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment, $post); } ?>

	<?php edit_comment_link(); ?>

</div>
