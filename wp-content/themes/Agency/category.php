<?php
get_header();
$category = get_the_category();
$args = array(
    'post_type' => 'post',
    'post_status'  => 'publish',
    'category_name' => $category[0]->slug,                                         
    'posts_per_page' => 24,
);  
$the_query = new WP_Query( $args );
?>
<input id="category" type="hidden" value="<?php echo $category[0]->slug ?>">
<?php 
 switch ($category[0]->slug) {
    case 'cam-nang':
        include("handbook.php");
        break;  	

    default:
        include("news.php");
     break;

 }
?>

<?php
get_footer();
?>  