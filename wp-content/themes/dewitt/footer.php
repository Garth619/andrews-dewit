</div>

<footer id="colophon">
    <section id="footer-form">
		<div id="footer-side" class="hidden-sm hidden-xs">
			<div id="footer-social">
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
		<div id="footer-form-content">
	       <div class="footer_form_wrapper">
	       
	       	<h2 id="footer-form-title">Free Case Evaluation</h2>
	      
	       </div><!--footer_form_wrapper -->
	       
			<div id="footer-form-text">
				<?php the_field( 'footer_verbiage_title','option' ); ?>
				<h4>Our cases are taken on a contingency fee basis, which means you do not pay attorney fees unless we obtain compensation for you.</h4>
				<p>When you are dealing with your own health issues or the loss of a family member, you may not feel ready to handle the legal complexities of pursuing an injury or wrongful death claim. Nor should you ever try to do this on your own. A skilled, professional, and compassionate personal injury attorney can relieve you of the burden and stress of handling a legal action, while offering you the best likelihood of seeing a significantly larger damage award than you would typically get by attempting to negotiate your claim directly with the insurance company.</p>
			</div>
			<div id="footer-form-fields">
				<div id="footer-form-required">Information required *</div>
				<?php // echo do_shortcode('[gravityform id="1" name="Request Free Consultation" title="false" description="false"]'); ?>
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
			</div>
		</div>
    </section>
    <section id="footer-main">
	    <div class="container">
		    <div id="footer-contact">
			    
			    
			    
			    <h2>Contact Us</h2>
			    <div id="footer-contact-info">
			    
						<div class="footer-number">
							<label>Toll Free</label> 
							<span><a href="tel:8005138751">(800) 513-8751</a></span>
						</div>
			   		
			   		<?php if( get_field('phone_number', 'options') ): ?>
						<div class="footer-number">
							<label>Phone</label> 
							<span><a href="tel:<?php the_field('phone_number', 'option');?>"><?php the_field('phone_number', 'option');?></a></span>
						</div>
			   		<?php endif; ?>
			   		<?php if( get_field('fax_number', 'option') ): ?>
						<div class="footer-number">
							<label>Fax</label> 
							<span><?php the_field('fax_number', 'option');?></span>
						</div>
			   		<?php endif; ?>
			    </div>
		    </div>
		    <div id="footer-location">
			    <h2>Visit Us</h2>
			    <div id="footer-location-info">
			    	<?php if( get_field('address_1', 'options') ): ?>
						<div class="footer-location">
							<?php the_field('address_1', 'options');?>
						</div>
			   		<?php endif; ?>
			   		<?php if( get_field('address_2', 'options') ): ?>
						<div class="footer-location">
							<?php the_field('address_2', 'options');?>
						</div>
			   		<?php endif; ?>
			    </div>
		    </div>
	    </div>
	    <div id="footer-up" class="animated infiniteUp fadeInUp">
		    <div id="footer-up-text">
		    	<a href="#page">Back to Top</a>
	    	</div>
	    </div>
	    <div id="footer-social" class="visible-sm visible-xs">
			<ul>
				
					<li class="socicon-facebook">
						<a href="" target="_blank" class="social-facebook socicon-facebook"></a>
					</li>
				
				
					<li class="socicon-google">
						<a href="<?php the_field('google_plus_url', 'option');?>" target="_blank" class="social-google socicon-google"></a>
					</li>
			
			</ul>
		</div>
    </section>
    <section id="footer-bottom">			
	    <p>© <?php echo date("Y"); ?> by DeWitt Algorri & Algorri Lawyers, A Professional Corporation. All rights reserved. <a href="#">Disclaimer</a> <a href="#">Sitemap</a> <a href="#">Google +</a></p>
	    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 2928.6 1999.9 142.7" enable-background="new 0 2928.6 1999.9 142.7" xml:space="preserve">
			<title>sm_ilawyer</title>
			<path d="M424.6,2928.6h7.3v7.8c0,5.7-3.1,8.6-9.1,8.6h-7.3v-7.8C415.5,2931.5,418.6,2928.6,424.6,2928.6z M415.5,2966.7
				c0-5.7,3.1-8.6,9.1-8.6h7.3v82.4h-7.3c-6,0-9.1-2.9-9.1-8.6V2966.7L415.5,2966.7z"></path>
			<path d="M473.6,3023.8c2.2,1.8,5,2.8,7.8,2.7v7.5c0.4,3.2-1.8,6.2-5,6.8c-2.8,0.8-5.8,0.4-8.3-1c-4.3-1.9-7.9-5.1-10.4-9.1
				c-3.1-5-4.6-10.8-4.4-16.7v-76.9c0-5.7,3.1-8.6,9.1-8.6h7.3v85.5C469.5,3017.8,470.9,3021.3,473.6,3023.8z"></path>
			<path d="M557.8,2965.1c7.7,5.9,12.2,15,12.2,24.7v50.8h-4.9c-4.2-0.1-7.8-2.7-9.2-6.7c-6.9,6.2-16,9.5-25.3,9.1
				c-9.9,0.2-19.6-3.2-27.3-9.6c-7.7-5.8-12.2-14.9-12.2-24.5v-19.1c0-9.7,4.5-18.8,12.2-24.7c7.7-6.3,17.3-9.7,27.3-9.5
				C540.5,2955.5,550.1,2958.8,557.8,2965.1z M530.5,2971.8c-6.1-0.2-12.1,1.9-16.9,5.8c-3.8,2.8-6.1,7.3-6.2,12v19.1
				c0.1,4.7,2.4,9.2,6.2,12c10,7.6,23.8,7.6,33.7,0c3.8-2.8,6.1-7.3,6.2-12v-19.1c-0.1-4.7-2.4-9.2-6.2-12
				C542.7,2973.8,536.7,2971.7,530.5,2971.8z"></path>
			<path d="M687.9,2966.7c0-5.7,3.1-8.6,9.1-8.6h7.3v50.8c0,10.5-2.9,18.8-8.8,24.8c-6.5,6.3-15.3,9.7-24.3,9.2
				c-9.4,0.4-18.5-3.5-24.8-10.5c-6.3,7-15.4,10.9-24.8,10.5c-10.4,0-18.5-3.1-24.3-9.2s-8.8-14.4-8.8-24.8v-42.2
				c0-5.7,3.1-8.6,9.1-8.6h7.3v50.8c0,6.2,1.5,10.8,4.2,13.5c3.4,3.1,7.9,4.6,12.5,4.2c4.4,0.2,8.8-1.3,12-4.4
				c3.2-3.7,4.8-8.4,4.5-13.3v-42.2c0-5.7,3.1-8.6,9.1-8.6h7.3v50.8c-0.2,4.9,1.5,9.7,4.8,13.3c3.2,3,7.6,4.6,12,4.4
				c4.5,0.3,9-1.2,12.3-4.2c2.7-2.7,4.2-7.3,4.2-13.5v-42.1l0,0H687.9z"></path>
			<path d="M795.8,2958.1l-32.1,90.5c-0.8,2.1-1.6,4.1-2.4,6.2c-0.7,1.9-1.6,3.7-2.7,5.4c-2.3,3.5-5.5,6.3-9.2,8.1
				c-2.6,1.3-5.6,1.6-8.4,1c-3.1-0.7-5.3-3.6-4.9-6.8v-7.5c1.9,0,3.7-0.5,5.4-1.3c1.9-0.7,3.4-2.2,4.1-4.1l3.2-8.3
				c-4.5-0.7-8.2-3.7-9.9-8l-24.2-67.8c-0.8-1.6-0.8-3.6,0-5.2c1-1.6,2.8-2.5,4.7-2.3h10.2l24.3,68.1h0.2l22.1-62
				c1.1-3.8,4.6-6.4,8.6-6.2L795.8,2958.1L795.8,2958.1z"></path>
			<path d="M862.5,2959.8c3.9,2.2,7.4,5.1,10.2,8.6c3,4.2,4.6,9.2,4.5,14.3c0.2,4.2-0.7,8.4-2.7,12.2c-1.8,3.1-4.2,5.7-7.1,7.8
				c-3,2.2-6.3,3.8-9.9,4.7c-3.5,1-7.2,1.5-10.8,1.5H827c-1,0.1-2.1,0-3.1-0.2c-1-0.2-1.9-0.7-2.7-1.3v6.8c0.1,4,2.5,7.5,6.1,9.1
				c3.4,2,7.2,3.1,11.2,3.2c4,0.4,8,0.2,11.8-0.8c3.8-0.6,7.3-2.5,9.9-5.4c2.4-2.9,5.7-3.4,9.7-1.5l8,3.9c-1.5,3.4-3.6,6.5-6.2,9.1
				c-3.9,3.9-8.7,6.8-14,8.4c-5.2,1.8-10.6,2.8-16.1,2.7c-4.3,0-8.5-0.4-12.7-1.3c-4.2-0.9-8.2-2.6-11.8-4.9c-4-2.7-7.2-6.4-9.2-10.8
				c-2-4.4-3-9.3-2.9-14.1V2985c0-4.2,0.9-8.2,2.7-12c2.9-5.9,7.8-10.6,13.8-13.3c6-2.8,12.5-4.2,19.1-4.1
				C848.2,2955.4,855.6,2956.8,862.5,2959.8z M856.5,2990.4c4.3-2.3,5.8-7.7,3.5-11.9c-0.5-1-1.2-1.8-2.1-2.5
				c-3.6-2.4-7.8-3.9-12.1-4.1c-4.2-0.2-8.4,0.1-12.5,1c-3,0.6-5.9,2-8.3,3.9c-2.3,1.9-3.6,4.8-3.6,7.8v7.8h27
				C851.3,2992.4,854.1,2991.8,856.5,2990.4L856.5,2990.4z"></path>
			<path d="M892.3,2987c0-9.7,3.1-17.2,9.4-22.4c5.2-4.4,11.9-6.7,18.7-6.5h10.8v7.3c0,6-2.7,9.1-8.4,9.1h-2.3c-2.8,0-5.6,0.9-7.8,2.7
				c-2.7,2.5-4.1,6.1-3.9,9.7v53.6h-7.3c-6,0-9.1-2.9-9.1-8.6V2987l0,0H892.3z"></path>
			<path d="M1038,2976.1c-3.4-3.1-7.9-4.6-12.5-4.3c-4.5-0.3-8.9,1.4-12.1,4.6c-3.2,3.7-4.9,8.4-4.7,13.3v50.8h-7.3
				c-6,0-9.1-2.9-9.1-8.6v-42.2c0.2-4.9-1.4-9.6-4.5-13.3c-3.2-3.2-7.5-4.8-12-4.6c-4.6-0.4-9.1,1.1-12.5,4.2c-3,3.8-4.5,8.6-4.2,13.5
				v50.9h-7.3c-6,0-9.1-2.9-9.1-8.6v-42.2c0-10.4,2.9-18.7,8.8-24.8c5.8-6.3,14-9.4,24.3-9.4c7.9-0.2,15.6,2.5,21.6,7.6
				c1.2,0.9,2.3,2,3.2,3.1c1.1-1.1,2.1-2.3,3.1-3.1c13.7-10.7,33.2-10,46,1.8c5.8,6.2,8.8,14.4,8.8,24.8v50.8h-7.2
				c-6,0-9.1-2.9-9.1-8.6v-42.2C1042.6,2984.8,1041.1,2980,1038,2976.1z"></path>
			<path d="M1141.2,2965.1c7.7,5.9,12.2,15,12.2,24.7v50.8h-4.9c-4.2-0.1-7.8-2.7-9.2-6.7c-6.9,6.2-16,9.5-25.3,9.1
				c-9.9,0.2-19.6-3.2-27.3-9.6c-7.7-5.8-12.2-14.9-12.2-24.5v-19.1c0-9.7,4.5-18.8,12.2-24.7c7.6-6.3,17.3-9.7,27.2-9.5
				C1123.9,2955.5,1133.6,2958.8,1141.2,2965.1z M1114,2971.8c-6.1-0.2-12.1,1.9-16.9,5.8c-3.8,2.8-6.1,7.3-6.2,12v19.1
				c0.1,4.7,2.4,9.2,6.2,12c10,7.6,23.8,7.6,33.7,0c3.8-2.8,6.1-7.3,6.2-12v-19.1c-0.1-4.7-2.4-9.2-6.2-12
				C1126.1,2973.8,1120.1,2971.7,1114,2971.8z"></path>
			<path d="M1171.9,2987c0-9.7,3.1-17.2,9.4-22.4c5.2-4.4,11.9-6.7,18.7-6.5h10.8v7.3c0,6-2.7,9.1-8.4,9.1h-2.3
				c-6.3-0.2-11.5,4.7-11.7,11c0,0.5,0,1,0,1.5v53.5h-7.3c-6,0-9.1-2.9-9.1-8.6V2987H1171.9z"></path>
			<path d="M1223.8,2937.2c0-5.7,3.1-8.6,9.1-8.6h7.3v63.7h6c3.2,0,6.3,0.2,8.3-3.1l15.4-25.3c2-3.6,5.8-5.8,9.9-5.8h12.8l-19.5,32.1
				c-0.9,1.6-2,3.1-3.2,4.5c5.7,2.7,10.1,7.6,12.3,13.5l14.1,32.1h-10.5c-4.9,0-8.1-1.8-9.6-5.2l-8.9-20.4c-1.4-3.8-5.2-6.3-9.2-6.2
				h-17.7v31.9h-7.3c-6,0-9.1-2.9-9.1-8.6v-94.6l0,0L1223.8,2937.2z"></path>
			<path d="M1363.3,2959.8c3.9,2.2,7.4,5.1,10.2,8.6c3,4.2,4.6,9.2,4.5,14.3c0.2,4.2-0.7,8.4-2.7,12.2c-1.7,3.1-4.1,5.7-7,7.8
				c-3,2.2-6.3,3.8-9.9,4.7c-3.5,1-7.2,1.5-10.8,1.5h-19.8c-1,0.1-2.1,0-3.1-0.2c-1-0.2-1.9-0.7-2.7-1.3v6.8c0.1,3.9,2.4,7.4,6,9.1
				c3.4,2,7.2,3.1,11.2,3.2c4,0.4,8,0.2,11.8-0.8c2.8-0.6,5.4-1.8,7.8-3.4c0.7-0.6,1.5-1.3,2.1-1.9c2.4-2.9,5.7-3.4,9.7-1.5l8,3.9
				c-1.5,3.4-3.6,6.5-6.2,9.1c-3.9,3.9-8.7,6.8-14,8.4c-5.2,1.8-10.6,2.8-16.1,2.7c-4.3,0-8.5-0.4-12.7-1.3c-4.2-0.9-8.2-2.6-11.8-4.9
				c-4-2.7-7.2-6.4-9.2-10.8c-2-4.4-3-9.3-2.9-14.1V2985c0-4.2,0.9-8.2,2.7-12c2.9-5.9,7.8-10.6,13.8-13.3c6-2.8,12.5-4.2,19.1-4.1
				C1349,2955.4,1356.5,2956.8,1363.3,2959.8z M1357.3,2990.4c4.3-2.3,5.8-7.7,3.5-11.9c-0.5-1-1.2-1.8-2.1-2.5
				c-3.6-2.4-7.7-3.8-12-4.1c-4.2-0.2-8.4,0.1-12.5,1c-3,0.6-5.9,2-8.3,3.9c-2.4,1.9-3.7,4.8-3.7,7.8v7.8h27
				C1352.1,2992.5,1354.9,2991.8,1357.3,2990.4L1357.3,2990.4z"></path>
			<path d="M1429.7,2958.1v7.3c0,6-2.9,9.1-8.6,9.1h-10.8v39.6c-0.2,3.7,1.2,7.2,3.9,9.7c2.1,1.8,4.8,2.8,7.6,2.7v7.5
				c0.4,3.2-1.7,6.2-4.9,6.8c-2.8,0.8-5.9,0.5-8.4-1c-4.3-1.9-7.9-5.1-10.4-9.1c-2.9-5.1-4.4-10.9-4.2-16.7v-76.9
				c0-5.7,2.9-8.6,8.9-8.6h7.5v29.5h19.3H1429.7z"></path>
			<path d="M1452.4,2928.6h7.3v7.8c0,5.7-3.1,8.6-9.1,8.6h-7.1v-7.8C1443.5,2931.5,1446.4,2928.6,1452.4,2928.6z M1443.5,2966.7
				c0-5.7,3.1-8.6,9.1-8.6h7.1v82.4h-7.3c-6,0-9.1-2.9-9.1-8.6v-65.2H1443.5z"></path>
			<path d="M1491.3,2964.8c7.2-6.2,16.5-9.4,26-9.2c9.6-0.2,18.9,3.1,26.2,9.2c7.2,5.7,11.4,14.3,11.5,23.5v52.2h-7.3
				c-6,0-9.1-2.9-9.1-8.6v-43.6c-0.1-4.4-2.2-8.4-5.7-11c-9.2-7.1-22-7.1-31.2,0c-3.5,2.6-5.6,6.7-5.7,11v52.2h-7.3
				c-6,0-9.1-2.9-9.1-8.6v-43.6C1479.7,2979.1,1484,2970.4,1491.3,2964.8z"></path>
			<path d="M1637.7,2965.1c7.7,5.9,12.2,15,12.2,24.7v49.9c0.1,4.7-1,9.3-3.1,13.5c-4.4,8-11.8,13.8-20.6,16.1c-4.6,1.3-9.5,2-14.3,1.9
				c-4.3,0-8.5-0.4-12.7-1.3c-3-0.4-5.7-1.9-7.6-4.2c-1-2.1-1.2-4.6-0.3-6.8l1.5-6.5c4.6,1.8,9.5,2.7,14.4,2.7
				c4.9,0.2,9.7-0.4,14.4-1.6c8-2.1,11.8-6.8,11.8-14v-3.1c-15.7,9.7-35.9,8.4-50.3-3.1c-7.7-5.8-12.2-14.9-12.2-24.5v-19.1
				c0-9.7,4.5-18.8,12.2-24.7c7.7-6.3,17.3-9.7,27.3-9.5C1620.4,2955.5,1630,2958.8,1637.7,2965.1z M1610.4,2971.8
				c-6.1-0.2-12.1,1.9-16.9,5.8c-3.8,2.8-6.1,7.3-6.2,12v19.1c0.1,4.7,2.4,9.2,6.2,12c10,7.6,23.8,7.6,33.7,0c3.8-2.8,6.1-7.3,6.2-12
				v-19.1c-0.1-4.7-2.3-9.2-6.1-12C1622.6,2973.8,1616.6,2971.7,1610.4,2971.8z"></path>
			<path d="M1678.9,3022h7.3v9.9c0,5.7-3.1,8.6-9.1,8.6h-7.3v-9.9C1669.8,3025,1672.9,3022,1678.9,3022z"></path>
			<path d="M1703.7,2988.3c0-9.2,4.3-17.9,11.7-23.5c7.2-6.2,16.5-9.4,26-9.2c9.5-0.2,18.8,3.1,26.1,9.2c4.2,3.4,7.5,7.9,9.6,13
				l-7.1,3.7c-3.6,2.3-8.3,1.4-10.8-1.9c-1-1.1-1.6-1.8-2.1-2.3c-4.4-3.6-10-5.5-15.7-5.4c-5.7-0.2-11.2,1.8-15.6,5.4
				c-3.4,2.6-5.5,6.7-5.7,11v22.1c0.1,4.4,2.2,8.4,5.7,11c4.4,3.5,9.9,5.3,15.6,5.2c5.7,0.2,11.3-1.7,15.9-5.2c0.5-0.5,1.1-1.1,2.1-2.3
				c2.5-3.4,7.3-4.2,10.8-1.9l7.1,3.7c-2,5.1-5.3,9.5-9.6,13c-7.3,6.1-16.6,9.3-26.1,9.1c-9.5,0.2-18.7-3-26-9.1
				c-7.4-5.6-11.7-14.3-11.7-23.5v-22.1H1703.7z"></path>
			<path d="M1855.9,2965.1c7.7,5.9,12.2,15,12.2,24.7v19.1c0,9.6-4.5,18.7-12.2,24.5c-15.9,12.8-38.6,12.8-54.5,0
				c-7.7-5.8-12.2-14.9-12.2-24.5v-19.1c0-9.7,4.5-18.8,12.2-24.7c7.7-6.3,17.3-9.7,27.3-9.5
				C1838.6,2955.5,1848.2,2958.8,1855.9,2965.1z M1828.7,2971.8c-6.1-0.2-12.1,1.9-16.9,5.8c-3.8,2.8-6.1,7.3-6.2,12v19.1
				c0.1,4.7,2.4,9.2,6.2,12c10,7.6,23.8,7.6,33.7,0c3.8-2.8,6.1-7.2,6.2-11.9v-19.1c-0.1-4.7-2.4-9.2-6.2-12
				C1840.9,2973.8,1834.8,2971.7,1828.7,2971.8z"></path>
			<path d="M1979.4,2976.1c-3.4-3.1-7.9-4.6-12.5-4.3c-4.5-0.3-8.9,1.3-12,4.5c-3.2,3.7-4.9,8.4-4.7,13.3v50.8h-7.3
				c-6,0-9.1-2.9-9.1-8.6v-42.2c0.2-4.9-1.4-9.6-4.5-13.3c-3.2-3.2-7.5-4.8-12-4.6c-4.6-0.4-9.1,1.1-12.5,4.2c-3,3.8-4.5,8.6-4.2,13.5
				v50.9h-7.3c-6,0-9.1-2.9-9.1-8.6v-42.2c0-10.4,2.9-18.7,8.8-24.8c5.8-6.3,14-9.4,24.3-9.4c7.9-0.2,15.6,2.5,21.6,7.6
				c1.2,0.9,2.3,2,3.2,3.1c1.1-1.1,2.1-2.3,3.1-3.1c13.7-10.7,33.2-10,46,1.8c5.8,6.2,8.8,14.4,8.8,24.8v50.8h-7.3
				c-6,0-9.1-2.9-9.1-8.6v-42.2C1983.9,2984.8,1982.4,2980,1979.4,2976.1z"></path>
			<path d="M32.2,2989.1c0-7.1-0.5-14-8.7-14c-4.9,0-8.1,2-8.1,7.4c0,6,3.8,8.3,8.4,11.3c6.3,3.8,12.3,8.2,17.9,13
				c4.6,4.2,7.1,10.3,6.7,16.5c0,15-9.9,22.8-24.3,22.8c-17.7,0-24-9.9-24-24v-5.7h14.7v4.7c-0.3,7.8,2,13.2,9.3,13.2
				c6.2,0,9.2-3.3,9.2-9.3c0-4.3-2.2-8.3-5.9-10.4c-7.7-5.9-17.3-10.2-23.3-18.1c-2.4-3.6-3.7-7.8-3.8-12.1c0-13.5,7.6-20.9,23.2-20.9
				c23.5,0,22.9,18.1,23,25.9L32.2,2989.1L32.2,2989.1z"></path>
			<path d="M65,3044.2v-79.1h14.8v79.1H65z"></path>
			<path d="M93,2965.1h49.3v11.6h-17.2v67.6h-14.8v-67.6H93V2965.1L93,2965.1z"></path>
			<path d="M154.9,3044.2v-79.1h41.5v11.6h-26.7v19.9h24.7v11.6h-24.7v24.3h26.8v11.6L154.9,3044.2L154.9,3044.2z"></path>
			<path d="M242.6,3044.2v-79.1h23.8c6.3,0,12.5,0.4,16.8,5.8c3,4.1,4.3,9.2,3.9,14.2c0,6.8-1.5,13.5-9.5,16.5v0.2
				c8.3,1.2,11.5,8.1,11.5,18.4c0.1,3.3-0.3,6.5-1.1,9.7c-3.2,10-8.9,14.2-19.4,14.2H242.6L242.6,3044.2z M260.1,2997
				c3.6,0,8.1,0.2,10.5-2.7c1.3-2.6,1.9-5.6,1.6-8.5c0-5.9-1.3-8.9-8.1-9.1h-6.8v20.4L260.1,2997L260.1,2997z M260.5,3032.6
				c3,0.3,6,0,8.9-0.8c4-1.8,4.5-6.9,4.5-11c0-8.5-1.7-12.1-10.8-12.1h-5.8v23.9L260.5,3032.6L260.5,3032.6z"></path>
			<path d="M324.3,2985.9c1.6,3.9,2.8,8,3.5,12.1h0.2c1-5.2,2.6-10.2,4.8-15l7.1-17.9h16.2l-21,45.4v33.6h-14.8v-33.6l-20.6-45.5h16.2
				L324.3,2985.9z"></path>
			</svg>
	</section>
</footer>

</div>

<?php wp_footer(); ?>
<?php the_field( 'footer_tags','option'); ?>
	</body>
</html>