<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_parkir_arya');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}