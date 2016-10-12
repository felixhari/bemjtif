<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="icon" href="./images/favicon.ico">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>
        <?php get_header();?>
<?php include 'section.php' ?>
<main>
<div class="container">
	<?php dynamic_sidebar('sidebar1'); ?>
    <button class="btn btn-primary text-center">
        <a href="http://bemjtifubj.or.id/profil/"> See More Here!</a>
    </button>
</div>
</main>

<?php include 'section2.php' ?>

<div class="container">
	<?php dynamic_sidebar('sidebar2'); ?>
</div>

<div class="clearfix"></div>

<?php get_footer(); ?> 

    </body>
</html>