<?php get_header(); ?>

<main id="content">
  <div class="container">
    <div class="row">
        <div class="col-md-12">

          <?php 
            $homepageServices = new WP_Query(array(  
              'post_type' => 'services',
              'post_status' => 'publish',
              'posts_per_page' => 3
          ));
          ?> 
          <div class="row subheader services-header">
            <h2>Services</h2>
          </div>
          <div class="row">
            <?php while($homepageServices->have_posts()) {
              $homepageServices->the_post();
              get_template_part('template-parts/content', 'services');
              }
            ?>
         </div>

         <hr>
         
         <div class="row subheader bio-header">
          <h2>About Me</h2>
         </div>
         <div class="row justify-content-center">
           <?php get_template_part('template-parts/content', 'bios')?>
         </div>
         
         <hr>

         <div>
          <div class="row subheader">
            <h2>Custom Field</h2>
          </div>
          <div class="row justify-center section-description">
            <p>This section is fully customized based on your business needs. Here are some expamles of work I've done with past clients:</p>
          </div>
         </div>

         <div class="row justify-content-center">
           <?php get_template_part('template-parts/content', 'wildcards')?>
         </div>

         <hr>

         <!-- <div class="row subheader social-header">
          <h2>Instagram Social Feed</h2>
        </div>
        <?php
          // query for the about page
          $social_feed = new WP_Query( 'pagename=social-field' );
        // "loop" through query (even though it's just one page) 
          while ( $social_feed->have_posts() ) : $social_feed->the_post();
              the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>

        <hr> -->

         <div class="row subheader contact-header">
          <h2>Contact Me</h2>
         </div>
         <?php
          // query for the about page
          $contact_form = new WP_Query( 'pagename=contact form' );
          // "loop" through query (even though it's just one page) 
          while ( $contact_form->have_posts() ) : $contact_form->the_post();
              the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
        </div>
      </div>
    </div>
 </main>

<?php get_footer();

?>