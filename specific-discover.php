<?php
/*
Template Name: Specific Discoverpage
*/
?>
<?php
get_header(); ?>

<section class="discover-page-slide">
	<div class="container">
        <div class="row">

		<div class="col-md-6">
			<div class="dis-text-left">
				<h3>Lorem ipsum dolor sit</h3>
				<p>Beautifully appointed to ensure that your stay is as comfortable as possible, our Superior Rooms feature a heavenly king-size bed and bathroom with walk-in rain shower Perfect for a short stay or romantic getaway for two. </p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="img-slide-dis-right">
				<ul class="dis-image-slide">
					<li> <img src="/wp-content/uploads/2022/01/image1.png" class="img-responsive"></li>
					<li> <img src="/wp-content/uploads/2022/01/image1.png" class="img-responsive"></li>
					<li> <img src="/wp-content/uploads/2022/01/image1.png" class="img-responsive" ></li>
					<li> <img src="/wp-content/uploads/2022/01/image1.png" class="img-responsive"></li>
				</ul>
			</div>
		</div>
		
		</div>
            
        </div>
	</div>
</section>
<style>
	section.discover-page-slide {
    background-color: #F1EADF;
}
.dis-text-left {
    padding: 200px 152px 200px 0px;
}
</style>

<script>
	 $('.dis-image-slide').slick({
				infinite: true,
				slidesToShow: 1, // Shows a three slides at a time
				slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
				arrows: true, // Adds arrows to sides of slider
				dots: false, // Adds the dots on the bottom
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					
				
				  ]
			  });
</script>
<?php get_footer(); ?>