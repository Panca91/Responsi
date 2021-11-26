<?php
require 'functions.php';
// menyimpan data id kedalam variabel
$item_id   = $_GET['item_id'];
// query SQL untuk delete data
$query="DELETE from inventaris where item_id='$item_id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman inventaris.php
header("location:inventaris.php");
?>