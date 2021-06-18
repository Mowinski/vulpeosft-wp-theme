<?php
    $query = new WP_Query( array( 'category_name' => 'news', 'posts_per_page' => 3, 'orderby' => 'date' ) );
?>

<?php if($query->have_posts()) : ?>
<div class="col-md-5">
    <?php $query->the_post(); ?>
    <div class="row">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
        </a>
    </div>
    <div class="row font-light">
        <?php the_date("d/m/Y"); ?>
    </div>
    <div class="row">
        <a href="<?php the_permalink();?>">
            <h4 class="font-semi-bold"><?php the_title(); ?></h4>
        </a>
    </div>
</div>

<div class="col-md-7">
    <div class="container-fluid d-flex h-100 flex-column">
        <div class="row flex-fill d-flex">
            <?php $query->the_post(); ?>
            <div class="col-md-5">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                </a>
            </div>
            <div class="col-md-7">
                <div class="row font-light">
                    <?php the_date("d/m/Y"); ?>
                </div>
                <div class="row">
                    <a href="<?php the_permalink();?>">
                        <h4 class="font-semi-bold"><?php the_title(); ?></h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-3 flex-fill d-flex justify-content-start">
            <?php $query->the_post(); ?>
            <div class="col-md-7">
                <div class="row font-light">
                    <?php the_date("d/m/Y"); ?>
                </div>
                <div class="row">
                    <a href="<?php the_permalink();?>">
                        <h4 class="font-semi-bold"><?php the_title(); ?></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>