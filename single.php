<?php
/**
 * single.php
 */
get_header();
?>
<!-- single.php -->
<div class="row">
    <div id="single" class="<?php content_class(); ?> post-index">
        <div class="post-content">
            <?php get_template_part('part/content', 'single'); ?>
        </div>
        <div class="post-nav">
            <?php ewd_post_nav(); ?>
        </div>
    </div>
    <?php
    get_sidebar();
    ?>
</div>
<?php
get_footer();
?>
