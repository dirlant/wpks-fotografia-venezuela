<?php get_header(); ?>

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1><?php echo get_field('autor', 'option') ?></h1>
						<p><?php echo get_field('mensaje', 'option') ?></p>
						<ul class="icons">
							<li><a href="<?php echo get_field('facebook', 'general') ?>" target="_blank" class="icon fa-facebook"><span class="label">Facebok</span></a></li>
							<li><a href="<?php echo get_field('twitter', 'general') ?>" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="<?php echo get_field('instagram', 'option') ?>" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="mailto:<?php echo get_field('email', 'option') ?>" target="_blank" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<?php $posts = get_posts(); ?>
						<?php foreach ($posts as $key): ?>
							<article>
								<a class="thumbnail" href="<?php echo get_the_post_thumbnail_url($key->ID) ?>" data-position="left center"><img src="<?php echo get_the_post_thumbnail_url($key->ID) ?>" alt="" /></a>
								<h2><?php echo $key->post_title ?></h2>
								<p><?php echo $key->post_content ?></p>
							</article>
					  <?php endforeach; ?>
					</section>

<?php get_footer(); ?>
