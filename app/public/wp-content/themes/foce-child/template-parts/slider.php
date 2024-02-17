<?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key'  => '_main_char_field',
        'orderby'   => 'meta_value_num',
    );
    $characters_query = new WP_Query($args);
?>

<swiper-container class="mySwiper" loop="true" effect="coverflow" slides-per-view="3">

<?php

      
while ( $characters_query->have_posts() ) {
  $characters_query->the_post();          
  echo '<swiper-slide>' .get_the_post_thumbnail( get_the_ID(), 'full' ), the_title(). '</swiper-slide>  ';  
  
}
?>

</swiper-container>


