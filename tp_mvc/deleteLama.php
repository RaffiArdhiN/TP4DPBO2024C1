
<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Lama.controller.php");

$lama = new LamaController();

// Cek apakah form telah di-submit
if (isset($_GET['id'])) {
  // Memanggil fungsi update dengan data dari $_POST
  $lama->delete($_GET['id']);
} 
//     include "connection.php";
//     if(isset($_GET['id'])){
//         $id = $_GET['id'];
//         $sql = "DELETE from `lamas` where id=$id";
//         $conn->query($sql);
//     }
//     header('location:index.php');
//     exit;
// ?>