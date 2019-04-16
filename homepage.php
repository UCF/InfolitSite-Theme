<?php
/*
Template Name: Home Page
Description: A Template for the Website homepage.
*/

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' );
  }
  return $title;
}
?>



<?php get_header(); ?>
<h1 class="sr-only">Infolit Website Homepage</h1>
<div id="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php if(get_post_meta($post->ID, 'success', true) || get_post_meta($post->ID, 'info', true) || get_post_meta($post->ID, 'warning', true) || get_post_meta($post->ID, 'danger', true)): ?>
        <?php if(get_post_meta($post->ID, 'success', true)): ?>
          <div id="banner_message" class="homepage-banner banner-success">
            <div class="container">
              <p>
                <button type="button" id="banner_close_btn" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php echo(get_post_meta($post->ID, 'success', true)); ?>
              </p>
            </div>
          </div>
        <?php endif; ?>
        <?php if(get_post_meta($post->ID, 'info', true)): ?>
          <div id="banner_message" class="homepage-banner banner-info">
            <div class="container">
              <p>
                <button type="button" id="banner_close_btn" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php echo(get_post_meta($post->ID, 'info', true)); ?>
              </p>
            </div>
          </div>
        <?php endif; ?>
        <?php if(get_post_meta($post->ID, 'warning', true)): ?>
          <div id="banner_message" class="homepage-banner banner-warning">
            <div class="container">
              <p>
                <button type="button" id="banner_close_btn" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php echo(get_post_meta($post->ID, 'warning', true)); ?>
              </p>
            </div>
          </div>
        <?php endif; ?>
        <?php if(get_post_meta($post->ID, 'danger', true)): ?>
          <div id="banner_message" class="homepage-banner banner-danger">
            <div class="container">
              <p>
                <button type="button" id="banner_close_btn" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php echo(get_post_meta($post->ID, 'danger', true)); ?>
              </p>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
  		<?php the_content(__('(more...)')); ?>
		<?php endwhile; else: ?>
		<?php _e('Sorry, no posts matched your criteria.'); ?><?php endif; ?>
</div>
<?php get_footer(); ?>