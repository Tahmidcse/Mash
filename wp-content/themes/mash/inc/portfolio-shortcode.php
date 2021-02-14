
 <?php


 # Dynamic Portfolio With Shortcode

 function portfolio_shortcode($atts){
     extract( shortcode_atts( array(
         'category' => ''
     ), $atts, '' ) );

     $q = new WP_Query(
         array('posts_per_page' => 50, 'post_type' => 'portfolio')
         );


 //Portfolio taxanomy query
     global $paged;
     global $post;
     $args = array(
         'post_type' => 'portfolio',
         'paged' => $paged,
         'posts_per_page' => -1,
     );

     $portfolio = new WP_Query($args);
     if(is_array($portfolio->posts) && !empty($portfolio->posts)) {
         foreach($portfolio->posts as $gallery_post) {
             $post_taxs = wp_get_post_terms($gallery_post->ID, 'portfolio_category', array("fields" => "all"));
             if(is_array($post_taxs) && !empty($post_taxs)) {
                 foreach($post_taxs as $post_tax) {
                     $portfolio_taxs[$post_tax->slug] = $post_tax->name;
                 }
             }
         }
     }
     // if(is_array($portfolio->posts) && !empty($portfolio->posts) && get_post_meta($post->ID,'portfolio_filters',true) != 'no');
 ?>

         <!--Category Filter-->
         <div id="portfolio-item-selector">
             <ul class="portfolio-grid-list">
                 <li class="active" data-filter="*">
                     <p>All</p>
                 </li>
                 <?php foreach($portfolio_taxs as $portfolio_tax_slug => $portfolio_tax_name): ?>
                 <li data-filter=".<?php echo $portfolio_tax_slug; ?>">
                     <?php echo $portfolio_tax_name; ?>
                 </li>
                   <?php endforeach; ?>

             </ul>
         </div>



 <?php

 $list = '<div id="portfolio-section" class="grid row">';
 while($q->have_posts()) : $q->the_post();
     $idd = get_the_ID();
     $small_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), 'portfolio_small_image');
     $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), 'portfolio_large_image');
     //Get Texanmy class
     $item_classes = '';
     $item_cats = get_the_terms($post->ID, 'portfolio_category');
     if($item_cats):
     foreach($item_cats as $item_cat) {
         $item_classes .= $item_cat->slug . ' ';
     }
     endif;

     $single_link =
     $list .= '

     <div class="grid-item portfolio-item bd wd '.$item_classes.'" data-category="transition">
         <div class="project-element">
             <div class="project-thumb">
                 <div class="overlay-effect"></div>
                 <img src=" '.$small_image_url[0].' " alt="portfolio" class="img-responsive">
                 <a href="'.$full_image_url[0].'" class="plus-minus-stick" data-rel="lightcase:myCollection">
                     <span class="plus-stick"></span>
                     <span class="minus-stick"></span>
                 </a>
                 <div class="project-content style-one">
                     <h6>Business Websaite</h6>
                     <p>Photography</p>
                 </div>
             </div>
         </div>
     </div>

     <div class="mix '.$item_classes.'" >'.get_the_content().'</div>
     ';
 endwhile;
 $list.= '</div>';
 wp_reset_query();
 return $list;
}
add_shortcode('portfolio', 'portfolio_shortcode');

 ?>
