<?php
get_header();
pageBanner(array(
  'title' => 'Past Events',
  'subtitle' => 'A recap of our past events.'
));
?>
  


  <div class="container container--narrow page-section">
    <?php

        $today = date('Ymd');
          $pastEvents = new WP_Query(array(
            'paged' => get_query_var('paged', 1), //1) to find page number dynamically. 2) Second argument of the method is default value, cuz in the case of 1st page there is no number on the link.
            //thanks to get_query_var() we can have all sorts of information about current URL.             
            //'posts_per_page' => 1,  //we don't it anymore
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' =>  'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '<=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));

        while($pastEvents->have_posts()){
          $pastEvents->the_post();
          get_template_part('template-parts/content-event');
        }
        echo paginate_links(array(
          'total' => $pastEvents->max_num_pages //number of maximum possiblr pages . If there is 30 pages and we set 10 event per page , we will have max 3 possible pages
        )); 
        ?>

  </div>

<?php get_footer();
?>