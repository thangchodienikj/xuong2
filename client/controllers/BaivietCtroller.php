<?php
function trangbaiviet(){
    $data['posts']= PostsList();
    showViewClient('./client/views/baiviet/baiviet.php',$data);
}