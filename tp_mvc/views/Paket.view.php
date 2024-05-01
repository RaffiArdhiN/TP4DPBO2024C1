<?php
  class PaketView{
    public function render($data){
      $no = 1;
      $dataPaket = null;
      foreach($data as $val){
        $id = $val['id_paket'];
        $package = $val['jenis_paket']; 
    
        $dataPaket .= "<tr>
        <td>" . $no++ . "</td>
        <td>" . $package . "</td>
        <td>
        <a class='btn btn-success' href='editPaket.php?id=" . $id . "'>Edit</a>
        <a class='btn btn-danger' href='deletePaket.php?id=" . $id . "'>Delete</a>
        </td>
        </tr>";
      }

      $tpl = new Template("templates/paket.html");
      $tpl->replace("DATA_TABEL", $dataPaket);
      $tpl->write();
    }

    public function create(){
      $tpl = new Template("templates/createPaket.html");
      $tpl->write();
    }

    public function update($data){
      $tpl = new Template("templates/editPaket.html");
      $tpl->replace("IDNYA", $data['id_paket']);
      $tpl->replace("PAKETNYA", $data['jenis_paket']);
      $tpl->write();
    }    
  }