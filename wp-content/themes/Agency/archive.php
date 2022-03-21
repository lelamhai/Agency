<?php 
    //  $term = get_queried_object();
    //  $image = get_field('thumbnail_category',  $term);


    $term = get_term_by('id', 40, 'category');
    $image = get_field('thumbnail_category',  $term);
    var_dump($term);

?>