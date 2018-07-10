<?php
/**
* Template Name: Home Page
*
* Date: March 28, 2017
* Version: 1.0
*/

// Get site header
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

        <!-- START: ABOUT -->
        <article id="about-the-project" class="page type-page status-publish hentry">
            <div class="section group">
                <div id="about-the-project-text" class="col span_1_of_2">
					<?php $recent = new WP_Query("pagename=about-the-project");
					while($recent->have_posts()) : $recent->the_post(); ?>
						<h2 class="content-title"><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
			    </div><!-- .col span_1_of_2 -->
                <div class="span_1_of_2 crest-banner">

                </div><!-- .col span_1_of_2 -->
            </div><!-- .section group -->
        </article>
        <!-- END: ABOUT -->

		<article id="recognition-form">
			<div class="section-group">

				<div id="recognition-form-text" class="col">
					<?php $recent = new WP_Query("pagename=send-your-message");
					while($recent->have_posts()) : $recent->the_post(); ?>
					<div id="employee-recognition-col-2" class="col span_2_of_2">
						<a class="close-toggle">╳</a>
						<h2 class="content-title"><?php the_title(); ?></h2>
					</div><!-- .col span_1_of_3 -->

						<div>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				</div><!-- .col span_1_of_2 -->

					<!-- <iframe src="//iweb.langara.bc.ca/langaraforms/gfembed/?f=172" width="100%" height="800" frameBorder="0"></iframe>
					<script src="//iweb.langara.bc.ca/langaraforms/wp-content/plugins/gravity-forms-iframe-master/assets/scripts/gfembed.min.js" type="text/javascript"></script> -->
			</div>
	</article> <!-- .site-form-main -->

        <!-- START: WALL OF THANKS -->
        <article id="employee-recognition" class="page type-page status-publish hentry">
            <div class="section group">
                <div id="employee-recognition-col-1" class="col span_1_of_3">
                    <p>&nbsp;</p>
                </div><!-- .col span_1_of_3 -->
                <div id="employee-recognition-col-2" class="col span_1_of_3">
                    <h2 class="content-title">Wall of Recognition</h2>
                </div><!-- .col span_1_of_3 -->
                <div id="employee-recognition-col-3" class="col span_1_of_3">
                    <p>&nbsp;</p>
                </div><!-- .col span_1_of_3 -->
            </div><!-- .section group -->

            <div class="masonry">
            <?php
            // Grab all the posts that are published and categorized with 'your-story'
            $args = array (
                'category_name'     => 'employee-recognition',
                'posts_per_page'    => -1, // Change to -1 to display all
                'post_status'       => 'publish',
                'post_type'         => 'post',
                'orderby'           => 'date',
                'order'             => 'DESC'
            );

            $cat_posts = new WP_query($args);

            if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
            ?>
                <div class="item">
                    <?php // the_title(); ?>
                    <?php // echo word_count(); ?>
                    <div class="message"><?php the_content(); ?></div>

                </div><!-- .item -->
            <?php endwhile; endif; ?>
            </div><!-- .masonry -->
        </article>
        <!-- END: WALL OF THANKS -->

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
// Get site footer
get_footer(); ?>
