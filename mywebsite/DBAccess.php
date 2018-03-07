<?php
// hello worldをindex htmlにテスト出力
function ControlDB() {
    global $wpdb;

    $user_count = $wpdb->get_results( "SELECT post_content FROM $wpdb->wp_posts" );
    echo "<p>User count is {$user_count}</p>";
}

?>