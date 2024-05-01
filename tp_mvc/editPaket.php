<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Paket.controller.php");

$paket = new PaketController();

// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
  // Memanggil fungsi update dengan data dari $_POST
  $paket->edit($_POST);
} else {
    // Memanggil fungsi update dengan id dari $_GET
    $id = $_GET['id'];
    $paket->update($id);
}