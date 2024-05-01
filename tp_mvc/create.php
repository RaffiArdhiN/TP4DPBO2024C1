<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");
// include_once("controllers/.controller.php");

$member = new MembersController();
// $paket = new PaketController();

// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
    // Memanggil fungsi add jika form di-submit
    $member->add($_POST);
} else {
    // Tampilkan form add jika belum di-submit
    $member->create();
}
