<?php if( have_rows('timeline') ): ?>

	<div class="timeline-wrap-color">
		<div class="timeline">

			<?php while ( have_rows('timeline') ): the_row();

			$date = get_sub_field('timeline_date');
			$image = get_sub_field('timeline_image');
			$heading = get_sub_field('timeline_heading');
			$description = get_sub_field('timeline_description');

			?>

	    <div class="container right">
	      <div class="content">
	        <div class="content-date"><h2><?php echo $date ?></h2></div>
	        <div class="content-column-wrap">
	          <div class="content-image"><img src="<?php echo $image ?>" alt="<?php echo $heading ?>"></div>
	          <div class="content-description">
	            <h3><?php echo $heading ?></h3>
	            <?php echo $description ?>
	          </div>
	        </div>
	        <div class="content-bg"></div>
	      </div>
	    </div>

			<?php endwhile; ?>

		</div>
	</div>

<?php endif; ?>
