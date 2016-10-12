<?php get_header();?>
<main>
<?php  
if ( have_posts() ) {
	while ( have_posts()) {
		the_post();		
		get_template_part('content',get_post_format());
		the_post_thumbnail();
	}
}

else{
	echo 'tidak ada post';
}
?>
</main>

<aside>
	<?php dynamic_sidebar('sidebar1'); ?>	
</aside>

<div class="clear"></div>

<?php get_footer(); ?> 