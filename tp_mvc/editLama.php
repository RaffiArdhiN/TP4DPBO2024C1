<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Lama.controller.php");

$lama = new LamaController();

// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
  // Memanggil fungsi update dengan data dari $_POST
  $lama->edit($_POST);
} else {
    // Memanggil fungsi update dengan id dari $_GET
    $id = $_GET['id'];
    $lama->update($id);
}