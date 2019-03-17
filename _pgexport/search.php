<?php
/*
 Template by MNH: Search Page
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
                        <a href="#"><?php _e( 'Home', 'margo' ); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php _e( 'Blog', 'margo' ); ?></a>
                    </li>
                    <li>
                        <?php _e( 'Gallery Post With Nice Lightbox', 'margo' ); ?>
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
                <div class="search-page">
                    <div class="search-content">
                        <h1 class="search-page"><?php _e( 'Search results for:', 'margo' ); ?> <?php echo esc_html( get_search_query( false ) ); ?></h1>
                    </div>
                    <div class="search-content">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article <?php post_class(); ?>> 
                                    <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                                    <?php the_content(); ?>
                                    <?php _e( 'Link', 'margo' ); ?> 
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'margo' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sidebar right-sidebar">
                <div class="widget widget-search">
                    <?php get_search_form( true ); ?>
                </div>
            </div>
        </div>
    </div>
</div>                

<?php get_footer(); ?>