<?php
$DB_HOST="localhost";
$DB_USERNAME="crudth1";
$DB_PASSWORD="crudth1";
$DB_DATABESE="crud_tahap_1";
$DB_PORT="3306";

$konek = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABESE, $DB_PORT);

if($konek->connect_error){
    die('koneksi gagal :' .$konek->connect_error);
}
?>