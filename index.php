<?php
/**
* index.php
*/
get_header();
?>
<!-- index.php -->
<div class="container">
    <div class="row">
        <div id="index" class="<?php content_class(); ?> post-index">
            <div class="posts">
                <?php get_template_part('part/content', 'excerpt'); ?>
            </div>
            <div class="post-nav">
                <?php ewd_content_nav(); ?>
            </div>
        </div>
        <?php
        get_sidebar();
        ?>
    </div>
</div>
<?php
get_footer();
?>