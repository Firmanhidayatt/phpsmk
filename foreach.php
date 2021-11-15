<?php

    // $nama = array('tejo', 'budi', 'inul', 100);

    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key ) {
    //    echo $key.'<br>';
    // }

    $nama = array(
        "tejo" => "surabaya",
        "budi" => "malanag",
        "inul" => "malaysia" 

    );

    var_dump($nama);
    echo  '<br>';
    foreach ($nama as $a => $b) {
        echo $a.'-'.$b;
        echo '<br>';
    }

?>