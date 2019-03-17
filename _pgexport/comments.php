<div id="comments">
  <h2 class="comments-title"><?php _e( '(4) Comments', 'margo' ); ?></h2>
  <ol class="comments-list">
    <?php wp_list_comments( array(
        'max_depth' => '3',
        'style' => 'div',
        'type' => 'comment',
        'reply_text' => __( 'Reply', 'margo' ),
        'per_page' => '5',
        'avatar_size' => '60',
        'format' => 'html5'
    ) ); ?>
  </ol>
  <div id="respond">
    <?php comment_form(); ?>
  </div>
</div>