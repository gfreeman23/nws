<?php

$term = get_queried_object();
$bg = get_field('homebg', $term);

if($bg) { ?>

	<h5 style="display: none;">Upload Background Image Here</h5>

	<style>

		#homebg {
			display: block;
			position: relative;
		}

		#homebg:before {
			position: absolute;
			width: 100%;
			height: 50%;
			top: 0;
			left: 0;
			right: 0;
			background: url('<?php echo $bg ?>') no-repeat;
			background-size: cover;
			z-index: -1;
		}

	</style>

<?php }

?>
