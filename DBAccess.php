<?php
// hello worldをindex htmlにテスト出力
function ControlDB() {
    global $wpdb;
    $fivesdrafts = $wpdb->get_results( 
        "
        SELECT *
        FROM $wpdb->posts
        "
    );
    
    foreach ( $fivesdrafts as $fivesdraft ) 
    {
        echo $fivesdraft->post_content;
    }
}

function OutPutCardFormat($cardTitle,$cardText){
    echo '<section class="item">';
    echo '<img class="card-img" src="images/test.jpg" alt="">';
    echo '<div class="card-content">';
    echo   '<h1 class="card-title">'. $cardTitle .'</h1>';
    echo   '<p class="card-text">'. $cardText .'</p>';
    echo   '<div class="card-data">';
    echo     '<p>6 days ago</p>';
    echo   '</div>';
    echo '</div>';
    echo '</section>';

}

function OutPutArticle(){
    global $wpdb;
    $posts = $wpdb->get_results( 
        "
        SELECT *
        FROM $wpdb->posts
        "
    );
    
    foreach ( $posts as $post ) 
    {
        if($post->post_status== 'publish')
        {
            OutPutCardFormat($post->post_title,$post->post_content);
            echo $fivesdraft->post_content;
        }
    }
}

?>