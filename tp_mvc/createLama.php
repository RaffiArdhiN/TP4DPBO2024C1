<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Lama.controller.php");

$lama = new LamaController();

// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
    // Memanggil fungsi add jika form di-submit
    $lama->add($_POST);
} else {
    // Tampilkan form add jika belum di-submit
    $lama->create();
}
