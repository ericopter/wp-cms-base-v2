<?php
/**
* Template Name: Page w/ Sidebar
*/
get_header();
?>
<!-- page.php -->
<div class="container">
    <div class="row">
        <div id="page" class="<?php content_class(); ?>">
            <?php get_template_part('part/content', 'page'); ?>
        </div>
        <?php
        get_sidebar();
        ?>
    </div>
</div>
<?php
get_footer();
?>