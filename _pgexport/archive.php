<?php
/*
 Theme by MNH: Archive
 */
?>
<?php
get_header(); ?>

<div class="container">
    <div class="row sidebar-page">
        <div class="col-md-9 page-content">
            <div class="row latest-posts-classic">
                <h4 class="classic-title"><span><?php post_type_archive_title(); ?></span></h4>
                <div class="col-md-6 post-row">
                    <?php wp_get_archives( array(
                          'type' => 'postbypost',
                          'limit' => '5',
                          'format' => 'html',
                          'before' => '<div class="col-md-6 post-row">',
                          'after' => '</div>'
                    ) ); ?>
                </div>
            </div>
        </div>
        <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
            <div class="col-md-3 sidebar right-sidebar">
                <?php dynamic_sidebar( 'right-sidebar' ); ?>
            </div>
        <?php endif; ?>
    </div>
</div>                

<?php get_footer(); ?>