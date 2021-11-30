<?php
require_once(dirname(__FILE__)).'/../classes/post.php';

//creating new posts
function create($title,$body){
    //instance of post class
    $post = new Post;
    
    //run query
    $runQuery = $post->create($title,$body);

    //if query is successful
    if($runQuery){
        return $runQuery;
    }
    else{
        return false;
    }

}