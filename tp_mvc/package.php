
<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Paket.controller.php");

$paket = new PaketController();

if (isset($_POST['add'])) {
    //memanggil add
    $paket->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $paket->delete($id);
} else if (!empty($_GET['id_edit'])) {
    //memanggil add
    $id = $_GET['id_edit'];
    $paket->edit($id);
} else{
    $paket->package();
}
