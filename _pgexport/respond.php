<?php if ('open' == $post->comment_status) : ?>

	<div id="respond">

		<h3><?php comment_form_title(); ?></h3>

		<?php cancel_comment_reply_link(); ?>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

			<p>You must be <a href="<?php echo wp_login_url(get_permalink()); ?>">logged in</a> to post a comment.</p>

		<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( $user_ID ) : ?>

				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>

				<p>
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
					<label for="author">Name <?php if ($req) echo "(required)"; ?></label>
				</p>

				<p>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
					<label for="email">Email (<?php if ($req) echo "required, "; ?>never shared)</label>
				</p>

				<p>
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					<label for="url">Website</label>
				</p>

			<?php endif; ?>

			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

			<p>Some HTML is ok: <code><?php echo allowed_tags(); ?></code></p>

			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /></p>
			<?php do_action('comment_form', $post->ID); comment_id_fields(); ?>

		</form>

	<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // If comments are open: delete this and the sky will fall on your head ?>
