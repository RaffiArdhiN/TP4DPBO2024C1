<?php
include_once("connection.php");
include_once("models/Lama.class.php");
include_once("views/Lama.view.php");

class LamaController {
  private $lama;

  function __construct(){
    $this->lama = new Lama(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->lama->open();
    $this->lama->getLama();
    $data = array();
    while($row = $this->lama->getResult()){
      array_push($data, $row);
    }

    $this->lama->close();

    $view = new LamaView();
    $view->render($data);
  }

  public function create() {
    $view = new LamaView();
    $view->create();
  }

  public function update($id) {
    $this->lama->open();
    $data = $this->lama->getLamaById($id);
    $this->lama->close();

    $view = new LamaView();
    $view->update($data);
}

  
  function add($data){
    $this->lama->open();
    $this->lama->add($data);
    $this->lama->close();
    
    header("location:index.php");
  }

  function edit($id){
    $this->lama->open();
    $this->lama->edit($id);
    $this->lama->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->lama->open();
    $this->lama->delete($id);
    $this->lama->close();
    
    header("location:index.php");
  }


}