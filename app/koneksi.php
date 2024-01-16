<?php

$mysqli = new mysqli("localhost", "root", "", "simkbs");

if (!$mysqli) {
    echo "Koneksi bermasalah !";
}
