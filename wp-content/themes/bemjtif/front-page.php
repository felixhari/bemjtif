<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <style>
        	h1{
        		font-size: 50px;
        	}

        	#front-page{
				text-align: center;
			}


        </style>
    </head>
    <body>
        
		<div id="front-page">
			<h1> Selamat Datang di Bem J Tif UBJ</h1>
			<a href="<?php echo home_url('/blog') ?>">Menuju Blog</a>
		</div>
	<div id="custom_post">	
	<?php 

	$custom_post = new WP_Query('cat=1&posts_per_page=3');

	if($custom_post -> have_posts()){
		while ($custom_post->have_posts()) {
			$custom_post->the_post(); ?>
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			<?php
		}
	}

	else{
		echo "Tidak Ada Berita";
	}

	 ?>
	</div>

    </body>
</html>