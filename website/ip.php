<?php

function get_public_ip() {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "icanhazip.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $ip = curl_exec($ch);

    return $ip;
}

?>