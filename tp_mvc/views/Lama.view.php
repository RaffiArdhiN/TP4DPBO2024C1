<?php
  class LamaView{
    public function render($data){
      $no = 1;
      $dataLama = null;
      foreach($data as $val){
        $id = $val['id_lama'];
        $jenis = $val['jenis_langganan']; 
    
        $dataLama .= "<tr>
        <td>" . $no++ . "</td>
        <td>" . $jenis . "</td>
        <td>
        <a class='btn btn-success' href='editLama.php?id=" . $id . "'>Edit</a>
        <a class='btn btn-danger' href='deleteLama.php?id=" . $id . "'>Delete</a>
        </td>
        </tr>";
      }

      $tpl = new Template("templates/lama.html");
      $tpl->replace("DATA_TABEL", $dataLama);
      $tpl->write();
    }

    public function create(){
      $tpl = new Template("templates/createLama.html");
      $tpl->write();
    }

    public function update($data){
      $tpl = new Template("templates/editLama.html");
      $tpl->replace("IDNYA", $data['id_lama']);
      $tpl->replace("LAMANYA", $data['jenis_langganan']);
      $tpl->write();
    }    
  }