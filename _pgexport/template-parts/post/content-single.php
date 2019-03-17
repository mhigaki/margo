<div class="blog-post<?php if( $item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="<?php echo 'post'.$item_number ?>">
  <div class="post-head">
    <a title="This is an image title" class="lightbox" href="images/blog-01.jpg">
      <div class="thumb-overlay">
        <i class="fa fa-arrows-alt"></i>
      </div>
      <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large' );
        }
       ?>
    </a>
  </div>
  <div class="post-content">
    <div class="post-type">
      <?php echo get_field( 'post_type_icon' ); ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <ul class="post-meta">
      <li>
        <?php _e( 'Por', 'margo' ); ?>
        <a href="#"><?php the_author_meta( 'display_name' ); ?></a>
      </li>
      <li>
        <?php echo get_the_time( get_option( 'date_format' ) ) ?>
      </li>
      <li>
        <?php the_category( ' , ', 'single' ); ?>
      </li>
      <li>
        <?php printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s Comments', get_comments_number(), 'comments title', 'margo' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?>
      </li>
    </ul>
    <p><?php the_content(); ?></p>
    <div class="post-bottom clearfix">
      <div class="post-tags-list">
        <?php wp_tag_cloud(array(
            'number' => '5',
            'format' => 'flat',
            'orderby' => 'count'
        )); ?>
      </div>
      <div class="post-share">
        <span><?php _e( 'Share This Post:', 'margo' ); ?></span>
        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
        <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
    <div class="author-info clearfix">
      <div class="author-image">
        <a href="#"> <?php echo get_avatar( get_the_author_meta( 'ID' ), '90' ); ?> </a>
      </div>
      <div class="author-bio">
        <h4><?php the_author_meta( 'display_name' ); ?></h4>
        <p><?php the_author_meta( 'description' ); ?></p>
      </div>
    </div>
  </div>
</div>