<?php
//setting default time zone
date_default_timezone_set('Asia/Jakarta');

session_start();

//koneksi
$con = mysqli_connect('localhost', 'root', '', 'rumahsakit');
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

//test
$test = "test";

//fungsi base_url
function base_url($url = null) {
    $base_url = "http://localhost/rumahsakit";
    if($url != null) {
        return $base_url."/".$url;
    } else {
        return $base_url;
    }
}
?>