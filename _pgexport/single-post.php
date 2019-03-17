<?php
/*
 Template by MNH: Single Post
 */
?>
<?php
get_header(); ?>

    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php _e( 'Blog', 'margo' ); ?></h2>
                    <p><?php _e( 'Blog Subtitle', 'margo' ); ?></p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li>
                            <a href="<?php echo esc_url( home_url() ); ?>"><?php _e( 'Home', 'margo' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php _e( 'Blog', 'margo' ); ?></a>
                        </li>
                        <li>
                            <?php the_title(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row blog-post-page">
                <div class="col-md-9 blog-box">
                    <?php if ( have_posts() ) : ?>
                        <?php $item_number = 0; ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <div class="blog-post<?php if( $item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                                <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( '0' ), 'full' );
if( $image_attributes ) : ?>
                                <div class="post-head" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
                                    <a title="This is an image title" class="lightbox" href="<?php echo $image_attributes[0]; ?>">
                                        <div class="thumb-overlay">
                                            <i class="fa fa-arrows-alt"></i>
                                        </div>
                                        <img alt="" src="<?php echo $image_attributes[0]; ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
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
                            <?php $item_number++; ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'margo' ); ?></p>
                    <?php endif; ?>
                    <?php comments_template( null, true ); ?>
                </div>
                <div class="col-md-3 sidebar right-sidebar">
                    <div class="widget widget-search">
                        <?php get_search_form( true ); ?>
                    </div>
                    <div class="widget widget-categories">
                        <h4><?php _e( 'Categories', 'margo' ); ?> <span class="head-line"></span></h4>
                        <ul>
                            <li>
                                <a href="#"><?php _e( 'Brandign', 'margo' ); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Design', 'margo' ); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Development', 'margo' ); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Graphic', 'margo' ); ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-popular-posts">
                        <h4><?php _e( 'Popular Post', 'margo' ); ?> <span class="head-line"></span></h4>
                        <ul>
                            <li>
                                <div class="widget-thumb">
                                    <a href="#">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog-mini-01.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="widget-content">
                                    <h5><a href="#"><?php _e( 'How To Download The Google Fonts Catalog', 'margo' ); ?></a></h5>
                                    <span><?php _e( 'Jul 29 2013', 'margo' ); ?></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="widget-thumb">
                                    <a href="#">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog-mini-02.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="widget-content">
                                    <h5><a href="#"><?php _e( 'How To Download The Google Fonts Catalog', 'margo' ); ?></a></h5>
                                    <span><?php _e( 'Jul 29 2013', 'margo' ); ?></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="widget-thumb">
                                    <a href="#">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog-mini-03.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="widget-content">
                                    <h5><a href="#"><?php _e( 'How To Download The Google Fonts Catalog', 'margo' ); ?></a></h5>
                                    <span><?php _e( 'Jul 29 2013', 'margo' ); ?></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4><?php _e( 'Video', 'margo' ); ?> <span class="head-line"></span></h4>
                        <div>
                            <iframe src="https://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450"></iframe>
                        </div>
                    </div>
                    <div class="widget widget-tags">
                        <h4><?php _e( 'Tags', 'margo' ); ?> <span class="head-line"></span></h4>
                        <div class="tagcloud">
                            <a href="#"><?php _e( 'Portfolio', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Theme', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Mobile', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Design', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Wordpress', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Jquery', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'CSS', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Modern', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Theme', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Icons', 'margo' ); ?></a>
                            <a href="#"><?php _e( 'Google', 'margo' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                

<?php get_footer(); ?>