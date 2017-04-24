<?php get_header(); ?>

	<section>
		<div class="photo-wrapper">
            <?php// for($j=1;$j<=2;$j++){ ?>
			<div class="photo-box">
				<img src="<?php bloginfo('template_directory');?>/img/img1.jpg" alt=''>
            </div>
            <div class="photo-box">
				<img src="<?php bloginfo('template_directory');?>/img/img2.jpg" alt=''>         
			</div>        
		</div>
	</section>

	<section id="main-section">
		            <main class="main-content">
            <div class="wrapper">
			
				
    <?php if (have_posts()) : ?>
    <?php $i = 0; ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php $i++ ?>    
                    <div class="post-box">
					<p class="aside-text aligncenter"><a href="#" class="date"><?php the_date(); ?></a></p>
					<h2 class="post-title aligncenter"><a href="#"><?php the_title(); ?></a></h2>
					<p class="aligncenter"><a href="#" class="tag">lifestyle</a> &#124; <a href="#" class="tag">self-development</a></p>
					<img src="<?php bloginfo('template_directory'); ?>/img/img<?php echo $i; ?>.jpg" class="img-post">
					<p class="main-text">
						<?php the_excerpt(); ?>
						<span class="hide">
							<?php the_content('',true); ?>
						</span>
					</p>
					<span class="more-text tag">continue reading &#10137;</span>
				</div>

			</div>
			<span class="more-text tag alignright">more posts &#10137;</span>
		</main>


    <?php endwhile; ?>
<?php endif; ?>        

<?php get_sidebar(); ?>
<?php get_footer(); ?>