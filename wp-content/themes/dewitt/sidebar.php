<div id="secondary">
	<div class="inner_form_wrapper inner_form_main">
		
		<div class="myblueline"></div><!-- myblueline -->
		
		<span class="large_header">Get legal help today</span><!-- large_header -->
		
		<span class="sidebar_info_required">Information Required*</span><!-- sidebar_info -->
		
		<div class="inner_form">
			
			<?php gravity_form(2, false, false, false, '', true, 12); ?>
			
		</div><!-- inner_form -->
		
	</div><!-- inner_form_wrapper -->
    <div id="sidebar" class="main_sidebar">
<!--     	<?php dynamic_sidebar( 'main' ); ?> -->
<?php wp_nav_menu(array('theme_location' => 'practiceareas', 'menu_class'  => 'prac',)); ?>
    </div>
</div>