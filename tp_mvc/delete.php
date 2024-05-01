
<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$member = new MembersController();

// Cek apakah form telah di-submit
if (isset($_GET['id'])) {
  // Memanggil fungsi update dengan data dari $_POST
  $member->delete($_GET['id']);
} 
//     include "connection.php";
//     if(isset($_GET['id'])){
//         $id = $_GET['id'];
//         $sql = "DELETE from `members` where id=$id";
//         $conn->query($sql);
//     }
//     header('location:index.php');
//     exit;
// ?>