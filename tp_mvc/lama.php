
<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Lama.controller.php");

$lama = new LamaController();

if (isset($_POST['add'])) {
    //memanggil add
    $lama->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $lama->delete($id);
} else if (!empty($_GET['id_edit'])) {
    //memanggil add
    $id = $_GET['id_edit'];
    $lama->edit($id);
} else{
    $lama->index();
}
