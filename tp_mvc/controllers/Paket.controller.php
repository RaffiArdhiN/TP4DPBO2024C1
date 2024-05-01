<?php
include_once("connection.php");
include_once("models/Paket.class.php");
include_once("views/Paket.view.php");

class PaketController {
  private $paket;

  function __construct(){
    $this->paket = new Paket(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function package() {
    $this->paket->open();
    $this->paket->getPaket();
    $data = array();
    while($row = $this->paket->getResult()){
      array_push($data, $row);
    }

    $this->paket->close();

    $view = new PaketView();
    $view->render($data);
  }
  
  public function create() {
    $view = new PaketView();
    $view->create();
  }

  public function update($id) {
    $this->paket->open();
    $data = $this->paket->getPaketById($id);
    $this->paket->close();

    $view = new PaketView();
    $view->update($data);
}

  
  function add($data){
    $this->paket->open();
    $this->paket->add($data);
    $this->paket->close();
    
    header("location:index.php");
  }

  function edit($id){
    $this->paket->open();
    $this->paket->edit($id);
    $this->paket->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->paket->open();
    $this->paket->delete($id);
    $this->paket->close();
    
    header("location:index.php");
  }


}