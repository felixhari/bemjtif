<?php get_header();?>
<main id="main-page">
<?php  
if ( have_posts() ) {
	while ( have_posts()) {
		the_post();		
		get_template_part('content');
	}
}

else{
	echo 'tidak ada post';
}
?>
</main>
<?php get_footer(); ?> 