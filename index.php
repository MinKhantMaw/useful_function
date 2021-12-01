<?php
    // define use
    $name="Min Khant Maw";
    define('NAME','Min Khant ');
    echo ($name);

    // header use
    // header('Location:index.php');
    // ecryption
    // echo md5($name);
    echo "<pre>";
    date_default_timezone_set("Asia/Yangon");
    echo date("d-m-Y h:i");
echo "<pre>";

    $today =date_create(date("d-m-Y"));
    date_add($today,date_interval_create_from_date_string('3 days'));
    echo date_format($today,"d-m-Y");
    echo "</pre>";
    // include && require
    include('test.php');
    echo "<br> this is test include text";