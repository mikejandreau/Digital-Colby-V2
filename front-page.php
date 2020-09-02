<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MJ_Consulting_V2
 */

get_header();
?>

    <main id="primary" class="site-main">

        <div class="jumbotron">
            <div class="container h-100 d-flex">
                <div class="m-auto">
                    <div class="header-content-inner">
                        <h1 class="display-4"><?php bloginfo( 'name' ); ?></h1>
                        <hr class="light">
                        <p class="lead"><?php bloginfo( 'description' ); ?></p>
                        <a href="#services" class="btn btn-scroll js-scroll-trigger"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <?php
                        while ( have_posts() ) :
                         the_post();

                         get_template_part( 'template-parts/content', 'page' );

                         // If comments are open or we have at least one comment, load up the comment template.
                         if ( comments_open() || get_comments_number() ) :
                             comments_template();
                         endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding bg-blue" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-lg-12 text-center">
                        <?php
                            if(get_field('services_section_title'))
                            {
                                echo '<h2 class="section-heading">' . get_field('services_section_title') . '</h2>';
                            }
                        ?>
                    </div>
                    <div class="col-sm-12 col-sm-offset-0 col-lg-10 col-lg-offset-1 text-center">
                        <?php
                            if(get_field('services_section_copy'))
                            {
                                echo '<p class="section-subheading">' . get_field('services_section_copy') . '</p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 text-center">
                        <div class="service-box">
                            <i class="fas fa-4x fa-file-alt wow bounceIn"></i>
                            <p>Proposal &amp; Report Writing</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="service-box">
                            <i class="fas fa-4x fa-cogs wow bounceIn" data-wow-delay=".1s"></i>
                            <p>Development Strategy</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="service-box">
                            <i class="fas fa-4x fa-newspaper wow bounceIn" data-wow-delay=".2s"></i>
                            <p>Prospect Research</p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-sm-offset-2 text-center">
                        <div class="service-box">
                            <i class="fas fa-4x fa-users wow bounceIn" data-wow-delay=".3s"></i>
                            <p>Conference/Event Planning</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="service-box">
                            <i class="fas fa-4x fa-book wow bounceIn" data-wow-delay=".4s"></i>
                            <p>Board &amp; Staff Training</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-tan" id="about">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <?php
                            if(get_field('about_section_title'))
                                { echo '<h2 class="section-heading">' . get_field('about_section_title') . '</h2>'; }
                        ?>
                        <?php
                            if(get_field('about_section_copy'))
                                { echo '<p class="section-subheading">' . get_field('about_section_copy') . '</p>'; }
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="team-profile">
                            <?php 
                                if((get_field('team_member_image_1')) && (get_field('team_member_name_1')) )
                                    { echo '<img class="img-responsive add-bottom float-right" src="' . get_field('team_member_image_1') . '" alt="' . get_field('team_member_name_1') . '">'; }

                                if(get_field('team_member_name_1'))
                                    { echo '<h3>' . get_field('team_member_name_1') . '</h3>'; }

                                if(get_field('team_member_title_1'))
                                    { echo '<h4>' . get_field('team_member_title_1') . '</h4>'; }

                                if(get_field('team_member_bio_1'))
                                    { echo '<div>' . get_field('team_member_bio_1') . '</div>'; }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="team-profile">
                            <?php 
                                if((get_field('team_member_image_2')) && (get_field('team_member_name_2')) )
                                    { echo '<img class="img-responsive add-bottom float-right" src="' . get_field('team_member_image_2') . '" alt="' . get_field('team_member_name_2') . '">'; }

                                if(get_field('team_member_name_2'))
                                    { echo '<h3>' . get_field('team_member_name_2') . '</h3>'; }

                                if(get_field('team_member_title_2'))
                                    { echo '<h4>' . get_field('team_member_title_2') . '</h4>'; }

                                if(get_field('team_member_bio_2'))
                                    { echo '<div>' . get_field('team_member_bio_2') . '</div>'; }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="team-profile">
                            <?php 
                                if((get_field('team_member_image_3')) && (get_field('team_member_name_3')) )
                                    { echo '<img class="img-responsive add-bottom float-right" src="' . get_field('team_member_image_3') . '" alt="' . get_field('team_member_name_3') . '">'; }

                                if(get_field('team_member_name_3'))
                                    { echo '<h3>' . get_field('team_member_name_3') . '</h3>'; }

                                if(get_field('team_member_title_3'))
                                    { echo '<h4>' . get_field('team_member_title_3') . '</h4>'; }

                                if(get_field('team_member_bio_3'))
                                    { echo '<div>' . get_field('team_member_bio_3') . '</div>'; }
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-profile">
                            <?php
                                if(get_field('testimonial_section_title'))
                                    { echo '<h3 class="section-heading">' . get_field('testimonial_section_title') . '</h3>'; }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <blockquote>
                            <?php
                                if((get_field('testimonial_text_1')) && (get_field('testimonial_citation_1')) ) 
                                    { echo '<span>' . get_field('testimonial_text_1') . ' </span> <footer><span>' . get_field('testimonial_citation_1') . '</span></footer>'; }
                            ?>
                        </blockquote>
                    </div>
                    <div class="col-md-4">
                        <blockquote>
                            <?php
                                if((get_field('testimonial_text_2')) && (get_field('testimonial_citation_2')) ) 
                                    { echo '<span>' . get_field('testimonial_text_2') . ' </span> <footer><span>' . get_field('testimonial_citation_2') . '</span></footer>'; }
                            ?>
                        </blockquote>
                    </div>
                    <div class="col-md-4">
                        <blockquote>
                            <?php
                                if((get_field('testimonial_text_3')) && (get_field('testimonial_citation_3')) ) 
                                    { echo '<span>' . get_field('testimonial_text_3') . ' </span> <footer><span>' . get_field('testimonial_citation_3') . '</span></footer>'; }
                            ?>
                        </blockquote>
                    </div>
                </div>

            </div>
        </section>

        <?php /* news section, not using it for now 
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <div class="alert alert-info">
                            <strong>No content in this loop</strong>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4">
                        <?php                                               
                        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //
                        ?>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        */ ?>

        <section class="bg-contact bg-green" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <h2 class="section-heading">Contact Us</h2>

                        <?php if ($footerTagline = get_option('mjcv2_options')['mjcv2-footer-tagline']) { 
                            echo '<span>' . $footerTagline . '</span>';
                        } else { /* do nothing */ } ?>

                        <div class="social-block">
                            <?php // These fields are controlled using the theme options located in Appearance -> Theme Options
                            if ($facebook = get_option('mjcv2_options')['mjcv2-social-facebook']) { 
                                echo '<a class="social-button" target="_blank" href="' . $facebook . '"><i class="fab fa-3x fa-facebook"></i></a>';
                            } else { /* do nothing */ }

                            if ($twitter = get_option('mjcv2_options')['mjcv2-social-twitter']) { 
                                echo '<a class="social-button" target="_blank" href="' . $twitter . '"><i class="fab fa-3x fa-twitter-square"></i></a>';
                            } else { /* do nothing */ }

                            if ($instagram = get_option('mjcv2_options')['mjcv2-social-instagram']) { 
                                echo '<a class="social-button" target="_blank" href="' . $instagram . '"><i class="fab fa-3x fa-instagram"></i></a>';
                            } else { /* do nothing */ }

                            if ($linkedin = get_option('mjcv2_options')['mjcv2-social-linkedin']) { 
                                echo '<a class="social-button" target="_blank" href="' . $linkedin . '"><i class="fab fa-3x fa-linkedin"></i></a>';
                            } else { /* do nothing */ }
                            ?>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <?php // contact form will go here 
                            echo do_shortcode( '[contact-form-7 id="10" title="Contact form 1"]' );
                        ?>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
