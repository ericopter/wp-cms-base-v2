<?php
/**
 * single.php
 */
get_header();
?>
<!-- single.php -->
<div class="row">
    <div id="single" class="<?php content_class(); ?>">
        <?php get_template_part('part/content', 'single'); ?>
    </div>
    <?php
    get_sidebar();
    ?>
</div>
<?php
get_footer();
?>
