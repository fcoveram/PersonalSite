<?php

get_header();
the_post();
?>
	<aside class="grid-x">
		<div class="cell small-12 medium-12 xlarge-9 home-section">
			<div class="about-me">
				<?php the_content(); ?>
			</div>
		</div>
	</aside>

	<section class="grid-x">
		<div class="cell home-section portfolio">
			<h2>Selected projects of my portfolio</h2>
			<div class="grid-x grid-margin-x">
				<a class="cell xlarge-3 large-4 small-6 work-post" href="/work-post.html">
					<div class="img thumb-img"></div>
					<p>Lorem ipsum dolor sit amet</p>
				</a>
				<a class="cell xlarge-3 large-4 small-6 work-post" href="/work-post.html">
					<div class="img thumb-img"></div>
					<p>Lorem ipsum dolor sit amet</p>
				</a>
				<a class="cell xlarge-3 large-4 small-6 work-post" href="/work-post.html">
					<div class="img thumb-img"></div>
					<p>Lorem ipsum dolor sit amet</p>
				</a>
				<a class="cell xlarge-3 large-4 small-6 work-post" href="/work-post.html">
					<div class="img thumb-img"></div>
					<p>Lorem ipsum dolor sit amet</p>
				</a>
				<a class="cell xlarge-3 large-4 small-6 work-post" href="/work-post.html">
					<div class="img thumb-img"></div>
					<p>Lorem ipsum dolor sit amet</p>
				</a>
				<a class="cell xlarge-3 large-4 small-6 work-post" href="/work-post.html">
					<div class="img thumb-img"></div>
					<p>Lorem ipsum dolor sit amet</p>
				</a>
			</div>
		</div>
	</section>

	<section class="grid-X">
		<div class="cell home-section blog">
			<h2>Thoughts, ideas and experiences</h2>
			<ul>
				<li class="grid-x align-middle">
					<a class="cell large-9 medium-10 small-12" href="/blog-post.html">Three years as a civil servant</a>
					<time class="cell large-3 medium-2 small-12">February 9th</time>
				</li>
				<li class="grid-x align-middle">
					<a class="cell large-9 medium-10 small-12" href="/blog-post.html">Reducing everything to its form</a>
					<time class="cell large-3 medium-2 small-12">February 9th</time>
				</li>
				<li class="grid-x align-middle">
					<a class="cell large-9 medium-10 small-12" href="/blog-post.html">A prototype that seeks to be law</a>
					<time class="cell large-3 medium-2 small-12">February 9th</time>
				</li>
				<li class="grid-x align-middle">
					<a class="cell large-9 medium-10 small-12" href="/blog-post.html">Lorem ipsum dolor sit amet</a>
					<time class="cell large-3 medium-2 small-12">February 9th</time>
				</li>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>