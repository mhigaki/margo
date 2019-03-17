<?php
/*
 Theme by MNH: Error 404
 */
?>
<?php
get_header(); ?>

<div id="content">
    <div class="container">
        <div class="page-content">
            <div class="error-page">
                <h1><?php _e( '404', 'margo' ); ?></h1>
                <h3><?php _e( 'File not Found', 'margo' ); ?></h3>
                <p><?php _e( 'We\'re sorry, but the page you were looking for doesn\'t exist.', 'margo' ); ?></p>
                <div class="text-center">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="btn-system btn-small"><?php _e( 'Back To Home', 'margo' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>                

<?php get_footer(); ?>