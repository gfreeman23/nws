<?php

$image = get_field('featured_image', 'option');
$content = get_field('featured_content', 'option');

?>

<?php if($image) { ?>
  <div id="page-banner">
    <img src="<?php echo $image ?>" alt="Page Banner">
  </div>
<?php } ?>

<?php if($image) { ?>
  <div id="page-description">
    <div class="max-width">
      <?php echo $content ?>
    </div>
  </div>
<?php } ?>
