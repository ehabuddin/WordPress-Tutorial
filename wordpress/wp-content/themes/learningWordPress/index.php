<?php 
	
	//Looping through the posts
get_header();

	if(have_posts()){
		while(have_posts()){ the_post(); ?>
			<article class="post">
				<h2><a href="<?php the_permalink()?>">Title is: <?php the_title();?></a></h2>
				<?php the_content(); ?>
			</article>
		<?php }
	}
	else{
		echo "<p>No Content found</p>";
	}
get_footer();
?>