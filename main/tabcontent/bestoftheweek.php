<?php $path = "images/slideshow/" ;?>

<div id="bestoftheweek" class="tabcontent">
	<div class="card">
		<div class="slideshow-container">

			<div class="mySlide fade">
			  <img src="<?=$path?>one.jpg" style="width:100%">
			  <div class="text">Apple Pie</div>
			</div>

			<div class="mySlide fade">
			  <img src="<?=$path?>two.jpg" style="width:100%">
			  <div class="text">Pumpkin Pie</div>
			</div>

			<div class="mySlide fade">
			  <img src="<?=$path?>three.jpg" style="width:100%">
			  <div class="text">Blueberry Pie</div>
			</div>

			<div class="mySlide fade">
			  <img src="<?=$path?>four.jpg" style="width:100%">
			  <div class="text">Pecan Pie</div>
			</div>

			<div class="mySlide fade">
			  <img src="<?=$path?>five.jpg" style="width:100%">
			  <div class="text">Cream Pie</div>
			</div>

			<div class="mySlide fade">
			  <img src="<?=$path?>six.jpg" style="width:100%">
			  <div class="text">Key Lime Pie</div>
			</div>

			<a class="prev" onclick="prevSlide()">&#10094;</a>
			<a class="next" onclick="nextSlide()">&#10095;</a>

		</div>
	</div>
</div>