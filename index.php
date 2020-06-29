<?php
/**
* index.php
*/
get_header();
?>
<!-- index.php -->
<div class="row">
    <div id="index" class="<?php content_class(); ?>">
        <?php get_template_part('part/content', 'excerpt'); ?>
    </div>
    <?php
    get_sidebar();
    ?>
</div>
<?php
get_footer();
?>