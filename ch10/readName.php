<?php
    $data = file("./name.txt");

    print_r($data);

    print "<br>--------<br>";

    foreach($data as $name) {
        print $name . "<br>";
    }