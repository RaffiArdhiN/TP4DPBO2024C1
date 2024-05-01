<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$member = new MembersController();

// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
  // Memanggil fungsi update dengan data dari $_POST
  $member->edit($_POST);
} else {
    // Memanggil fungsi update dengan id dari $_GET
    $id = $_GET['id'];
    $member->update($id);
}