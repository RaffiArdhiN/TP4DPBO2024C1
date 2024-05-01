
<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Paket.controller.php");

$paket = new PaketController();

// Cek apakah form telah di-submit
if (isset($_GET['id'])) {
  // Memanggil fungsi update dengan data dari $_POST
  $paket->delete($_GET['id']);
} 
//     include "connection.php";
//     if(isset($_GET['id'])){
//         $id = $_GET['id'];
//         $sql = "DELETE from `pakets` where id=$id";
//         $conn->query($sql);
//     }
//     header('location:index.php');
//     exit;
// ?>