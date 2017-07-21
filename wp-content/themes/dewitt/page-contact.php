<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="new_header_wrapper">
	
	
	<span class="new_line"></span><!-- new_line -->
	<h1 class="new_titles"><?php the_title();?></h1>
	
	
	
</div><!-- new_header_wrapper -->

<section id="page-content">
	
	





	
	
<!-- <h1 id="page-title">Contact Us</h1> -->
	
	
	
	
	<div id="contact-page">
		<div id="contact-content">
			<div id="contact-phone">
				<h2>Call Us</h2>
				<div id="contact-phone-info">
					<?php if( get_field('toll_free_number', 'options') ): ?>
						<div class="contact-number">
							<label>Toll Free</label> 
							<span><?php the_field('toll_free_number', 'options');?></span>
						</div>
			   		<?php endif; ?>
			   		<?php if( get_field('phone_number', 'options') ): ?>
						<div class="contact-number">
							<label>Phone</label> 
							<span><?php the_field('phone_number', 'options');?></span>
						</div>
			   		<?php endif; ?>
			   		<?php if( get_field('fax_number', 'options') ): ?>
						<div class="contact-number">
							<label>Fax</label> 
							<span><?php the_field('fax_number', 'options');?></span>
						</div>
			   		<?php endif; ?>
				</div>
			</div>
			<div id="contact-location">
				<h2>Visit Us</h2>
				<div id="contact-location-info">
					<?php if( get_field('address_1', 'options') ): ?>
						<div class="contact-location">
							<?php the_field('address_1', 'options');?>
							<a href="<?php the_field('address_1_url', 'options');?>" target="_blank" class="button">Get Directions</a>
						</div>
			   		<?php endif; ?>
			   		<?php if( get_field('address_2', 'options') ): ?>
						<div class="contact-location">
							<?php the_field('address_2', 'options');?>
							<a href="<?php the_field('address_2_url', 'options');?>" target="_blank" class="button">Get Directions</a>
						</div>
			   		<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="map" id="contact-map"></div>
	</div>
	<div id="contact-side" class="hidden-sm hidden-xs">
		<div id="contact-social">
			<ul>
				<?php if( get_field('facebook_url', 'options') ): ?>
					<li class="socicon-facebook">
						<a href="<?php the_field('facebook_url', 'options');?>" target="_blank" class="social-facebook socicon-facebook"></a>
					</li>
				<?php endif; ?>
				<?php if( get_field('google_plus_url', 'options') ): ?>
					<li class="socicon-google">
						<a href="<?php the_field('google_plus_url', 'options');?>" target="_blank" class="social-google socicon-google"></a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>

<script type="text/javascript">
	 
  function initializeMap() {
	  var myLatlng = new google.maps.LatLng(34.147017, -118.149870);
	var mapOptions = {
	  center: new google.maps.LatLng(34.147017, -118.149870),
	  zoom: 15,
	  center: myLatlng,
	  disableDefaultUI: true,
	  draggable:false,
	  scrollwheel: false,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	 };
	var map = new google.maps.Map(document.getElementById("contact-map"),
		mapOptions);
		marker = new google.maps.Marker({
			map:map,
			position: new google.maps.LatLng(34.147017, -118.149870)
		 });
  }
  google.maps.event.addDomListener(window, 'load', initializeMap);
  
</script>

<?php get_footer(); ?>
