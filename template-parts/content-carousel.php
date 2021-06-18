<?php
  $attached_images = array(
    'carousel_first_image',
    'carousel_second_image',
    'carousel_third_image',
    'carousel_fourth_image',
    'carousel_fifth_image',
  );
?>


<div id="vulpesoft-carousel" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach(get_slider_items() as $id => $image) : ?>
      <li data-target="#vulpesoft-carousel" data-slide-to="<?php echo $id; ?>" class="<?php echo $id == 0 ? "active" : "";?>"></li>
    <?php endforeach; ?>
  </ol>


  <div class="carousel-inner">
    <?php 
      foreach($attached_images as $id => $image) {
        get_slide_item($image, $id == 0);
      }
    ?>
    <a class="carousel-control-prev" href="#vulpesoft-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#vulpesoft-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>