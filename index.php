<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
    <div id="curtain_container">
        <!-- CLOSES AT FOOTER -->
        <article id="manifesto">
            <div class="article_header">
                <h1>I.</h1>
                <figure>
                    <img alt="manifesto" src="<?php echo get_template_directory_uri()."/img/manifesto.png" ?>" >
                <figcaption>Manifesto</figcaption> 
                </figure>
            </div>
            <p>
            <?php 
                $page = get_page_by_title( 'manifesto' );
                $content = apply_filters('the_content', $page->post_content);
                echo $content; 
            ?>
            </p>
            <figure>
                <img alt="" src="<?php echo get_template_directory_uri()."/img/manifesto_end.png"?>">
            </figure>
        </article>

        <article id="oferta">
            <h1>II.</h1>
            <figure>
                <img alt="oferta" src="<?php echo get_template_directory_uri()."/img/oferta.png"?>">
                <img id="offer_arrow" alt="oferta" src="<?php echo get_template_directory_uri()."/img/offers_arrow.png"?>">
            <figcaption>Oferta</figcaption> 
            </figure>

            <?php 
                $page = get_page_by_title( 'oferta' );
                $content = apply_filters('the_content', $page->post_content);
                echo $content; 
            ?>
            <div id="oferta_animation"> 
                <div id="oa_long_slant"><img src="<?php echo get_template_directory_uri()."/img/animations/long_slant.png"?>"></div>
                <div id="oa_square"><img src="<?php echo get_template_directory_uri()."/img/animations/black_square.jpg"?>"></div>
                <div id="oa_finger">
                    <img src="<?php echo get_template_directory_uri()."/img/animations/finger.jpg"?>">
                    <img class="mask" src="<?php echo get_template_directory_uri()."/img/animations/lifestyle.png"?>">
                </div>
                <div id="oa_woman">
                    <img src="<?php echo get_template_directory_uri()."/img/animations/woman.jpg"?>">
                    <img class="mask" src="<?php echo get_template_directory_uri()."/img/animations/fashion.png"?>">
                </div>
                
                <div id="oa_trendy">
                    <img src="<?php echo get_template_directory_uri()."/img/animations/triangle.png"?>">
                    <img class="mask" src="<?php echo get_template_directory_uri()."/img/animations/trendy.png"?>">
                </div>

                <figure id="hasla">
                    <!--
                    <img alt="Fashion, Lifestyle, Media Impact" src="<?php echo get_template_directory_uri()."/img/oferta_hasla.jpg"?>">
                    -->
                    <figcaption>
                            Fashion, Lifestyle, Media Impact
                    </figcaption>
                </figure>
            </div>
            
            <div id="oferta_mobile">
               <img src="<?php echo get_template_directory_uri()."/img/oferta_mobile.png"?>">
            </div>

        </article>

        <article id="portfolio">
            <div class="article_header">
                <h1>III.</h1>
                <figure>
                    <img alt="portfolio" src="<?php echo get_template_directory_uri()."/img/portfolio.png"?>">
                    <figcaption>Portfolio</figcaption>
                </figure>
            </div>
            
            <ul>
            <?php
            $args = array( 'post_type' => 'portfolio' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                echo '<li class="accordionButton">';
                echo the_title();
                echo '<span></span></li>';
                echo '<li class="accordionContent">';
                the_post_thumbnail('full');
                echo    '<div class="projectClient">';
                echo        '<p>Klient:</p>';
                echo    '<img src='.get_post_meta($post->ID, 'wpcf-client_logo', true).'>';
                echo    '</div>';  
                echo    '<div class="projectDescription">';
                echo        '<h1>';
                echo            the_title();
                echo        '</h1>';
                echo        '<p class="projectDate">';
                echo            the_time('Y'); 
                echo        '</p>';
                echo        '<div class="project_description">';
                echo            the_content();
                echo        '</div>';
                echo        '<div class="close_project"></div>' ;
                echo    '</div>';
                echo '</li>';

            endwhile;
            ?>
            </ul>
        </article>

        <article id="aktualnosci">
            <div class="article_header">
                <h1>IV.</h1>
                <figure id="aktualnosci1">
                    <img alt="aktualności" src="<?php echo get_template_directory_uri()."/img/aktualnosci1.png"?>">
                    <figcaption>Aktualności</figcaption>
                </figure>
                <figure id="aktualnosci2">
                    <img alt="aktualności" src="<?php echo get_template_directory_uri()."/img/aktualnosci2.png"?>">
                </figure>
            </div>

            <div id="news" class="news">

            <div id="news_nav_links">
                <div class="news_nav_link" id="older_posts_link">
                    <?php next_posts_link('poprzednie'); ?>  
                </div> 
    
                <div class="news_nav_link" id="newer_posts_link">
                    <?php previous_posts_link('następne'); ?>
                </div>
            </div>

                <div class="news_titles">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content-title', get_post_format() ); ?>
                            <?php endwhile; ?>
                    <?php endif; // end have_posts() check ?>
                </div>

                <div class="news_content">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                <?php endif; // end have_posts() check ?>
                </div>

            </div> <!-- #news --> 
            

        </article>

        <article id="team">
            <h1>V.</h1>
            <figure id="team_top">
                <img alt="team" src="<?php echo get_template_directory_uri()."/img/team.png"?>">
                <figcaption>Team</figcaption>
            </figure>
                
                <?php
                $blogusers = get_users();
                foreach ($blogusers as $user) {
                ?>
                <div class="team_member">
                    <figure class="team_thumb">
                    <?php echo $user->user_avatar ?>
                    </figure>
                   <div class="team_who">
                        <h2> <?php echo $user->user_email ?> </h2>
                        <p><?php echo $user->title ?> </p>
                    </div>
                    <div class="team_description">
                        <p><?php echo $user->user_description ?></p>
                    </div>
                </div>

                <?php }?>
                

            <div class="team_member">

                <figure class="team_thumb">
                </figure>
                <div class="team_who">
                    <h2>Magdalena Wójcik</h2>
                    <p>W Studio 111 tworzy koncepcje biznesowe, kampanie marketingu online i e-PR</p>
                </div>
                <div class="team_description">
                    <p>
                        Przygodę z Internetem zaczęła od Myspace Polska w 2007 r., w 2009r. została szefem marketingu Buy VIP! Polska (obecnie Markafoni) i była odpowiedzialna za komunikacyjne i promocyjne wprowadzenie marki na polski rynek. Następnie w ramach Grupy Allegro była odpowiedzialna za rebranding Buy VIP na Markafoni,
                        również jako szef marketingu serwisu. W 2011 r. rozpoczęła pracę w segmencie Internet Agora S.A. pracuje, gdzie zarządzała projektami e-commercowymi z obszaru fashion & lifestyle.
                    </p>
                </div>
            </div>

        </article>
<?php get_footer(); ?>