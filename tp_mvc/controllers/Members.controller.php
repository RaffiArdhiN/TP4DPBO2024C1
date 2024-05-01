<?php
include_once("connection.php");
include_once("models/Members.class.php");
include_once("views/Members.view.php");

class MembersController {
  private $members;

  function __construct(){
    $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->members->open();
    $this->members->getMembers();
    $data = array();
    while($row = $this->members->getResult()){
      array_push($data, $row);
    }

    $this->members->close();

    $view = new MembersView();
    $view->render($data);
  }

  public function create() {
    $view = new MembersView();
    $view->create();
  }

  public function update($id) {
    $this->members->open();
    $data = $this->members->getMembersById($id);
    $this->members->close();

    if ($data) {
        $view = new MembersView();
        $view->update($data);
    } else {
        // Tampilkan pesan error jika data anggota tidak ditemukan
        echo "Data anggota tidak ditemukan.";
    }
}

  
  function add($data){
    $this->members->open();
    $this->members->add($data);
    $this->members->close();
    
    header("location:index.php");
  }

  function edit($id){
    $this->members->open();
    $this->members->edit($id);
    $this->members->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->members->open();
    $this->members->delete($id);
    $this->members->close();
    
    header("location:index.php");
  }


}