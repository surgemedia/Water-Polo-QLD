<?php 

function club_endpoint($data ) {
$result = $data['name'];
        // WP_Query arguments
$args = array (
    'name'                    => $data['name'],
    'post_type'               => array('club')
);
// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
         $result = array( 'club' => [get_post(get_the_id())] );
    }
} else {
    $result = "no result";
}
// Restore original Post Data
wp_reset_postdata();
$result = json_decode(json_encode($result),true);
return $result;
}

function all_club_endpoint() {
$result =  array();
        // WP_Query arguments
$args = array (
    'post_type'               => array('club')
);
// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $temp_class = '';
                if($club_count == 4){
                   $club_count = 0;
                }
                 if($club_count == 3){
                  $temp_class = 'grey-light-bg';
                   $club_count++;
                }
                 if($club_count == 2){
                  $temp_class = 'grey-bg';
                  $club_count++;
                }
                 if($club_count == 1){
                  $temp_class = 'grey-bg';
                  $club_count++;
                }
                if($club_count == 0){
                  $temp_class = 'grey-light-bg';
                   $club_count++;
                } 
        $query->the_post();
        $the_post = get_post(get_the_id());
        array_push($result, [
            'title' => get_the_title(),
            'id'=> $the_post->ID,
            'slug'=> $the_post->post_name,
            'content'=> $the_post->post_content,
            'logo'=> get_field('logo'),
            'register_link'=> get_field('register_link'),
            'permalink'=> get_permalink(),
            'color'=> $temp_class




            ]);
    }
} else {
    $result = "no result";
}
// Restore original Post Data
wp_reset_postdata();
$result = json_decode(json_encode($result),true);
return $result;
}
 ?>