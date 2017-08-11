<?php get_header();?>

<div id="content-wrap">

    <!-- HERO AREA -->
    <div class="jumbotron" id="#hero" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
        <canvas id="effect-js"></canvas>
        <div id="particles-js"></div>
        <div id="bg-video-wrap">
            <video id="bg-video" playsinline autoplay muted loop>
            </video>
        </div>
        <div class="container">
            <h1><?php bloginfo('title');?></h1>
            <span class="typed"><?php bloginfo('description');?></span>
            <div class="typed-wrap"></div>
        </div>
    </div>
    <!-- HERO AREA END -->

    <!-- bouncing arrow -->
    <div class="arrow-wrap">
        <a href="#about" class="arrow down-bounce scroll-link fa fa-angle-double-down"></a>
    </div>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="photo-wrap">
                        <?php echo get_the_post_thumbnail( 12, array(360,640) );?>
						

                    </div>
                </div>
                <div id="aboutRight" class="col-lg-6 col-12">
                    <div>
						<?php $postId = 12;
						$post = get_post($postId);
						echo '<h2>'.$post->post_title.'</h2>';
						echo '<div><p>'.$post->post_content.'</p></div>';
						$post->post_image;?>
                    </div>
                    
                    <div id="skillbar-wrap">
                        <div class="skillbar" data-percent="95">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title"><?php the_field('skill1');?></span>
                        </div>
                        <div class="skillbar" data-percent="95">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title"><?php the_field('skill2');?></span>
                        </div>
                        <div class="skillbar" data-percent="80">
                            <p class="skillbar-bar"></p>
                            <span class="skillbar-title"><?php the_field('skill3');?></span>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END -->

    <!-- SERVICES -->
    <section id="services">
        <div class="section-header">
            <div>
                <h2>Информация</h2>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
				      <?php
								$id=2; // ID заданной рубрики
								$n=4;   // количество выводимых записей
								$recent = new WP_Query("cat=$id&showposts=$n"); 
								while($recent->have_posts()) : $recent->the_post();?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="box">
                            <div class="circle"><i class="fa fa-heart fa-stack-1x fa-inverse"></i></div>
                     
								
								<a href="<?php the_permalink() ?>" rel="bookmark">
								<h3><?php the_title(); ?></h3>
								</a><br>
							<?php the_excerpt(); ?>
                        </div>
                    </div>
						 
								<?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES END -->

    <!-- HIRE ME -->
    <section id="hireme" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
        <div class="section-header container">
            <div class="col-12">
			<?php $postId = 34;
				  $post = get_post($postId);?>
                <h2 class="animation" data-animation="fadeInLeft"><?php echo $post->post_title;?></h2>
				<h4 class="animation" data-animation="fadeInLeft"><?php echo $post->post_content;?></h4>
                <a class="btn btn-primary animation" href="https://litecoin.com/ru/services#exchanges" target="_blank">Найти биржу</a>
            </div>
        </div>
    </section>
    <!-- HIRE ME END -->




   


<?php get_footer();?>