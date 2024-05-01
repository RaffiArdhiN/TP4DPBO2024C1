<?php
  class MembersView{
    public function render($data){
      $no = 1;
      $dataMembers = null;
      foreach($data as $val){
        $id = $val['id'];
        $name = $val['name'];
        $email = $val['email'];
        $phone = $val['phone'];
        $package = $val['jenis_paket']; 
        $lama = $val['jenis_langganan']; 
    
        $dataMembers .= "<tr>
        <td>" . $no++ . "</td>
        <td>" . $name . "</td>
        <td>" . $email . "</td>
        <td>" . $phone . "</td>
        <td>" . $package . "</td>
        <td>" . $lama . "</td>
        <td>
        <a class='btn btn-success' href='edit.php?id=" . $id . "'>Edit</a>
        <a class='btn btn-danger' href='delete.php?id=" . $id . "'>Delete</a>
        </td>
        </tr>";
      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMembers);
      $tpl->write();
    }

    public function create(){
      // $opsi = '';
      // foreach ($packages as $package) {
      //   $opsi .= "<option value='" . $package['id_paket'] . "'>" . $package['jenis_paket'] . "</option>";
      // }
      $tpl = new Template("templates/create.html");
      // $tpl->replace("PACKAGE_GANTI", $opsi);
      $tpl->write();
    }

    public function update($data){
      $tpl = new Template("templates/edit.html");
      $tpl->replace("IDNYA", $data['id']);
      $tpl->replace("NAMANYA", $data['name']);
      $tpl->replace("EMAILNYA", $data['email']);
      $tpl->replace("HPNYA", $data['phone']);
      $tpl->replace("PAKETNYA", $data['id_paket']);
      $tpl->replace("LAMANYA", $data['id_lama']);
      $tpl->write();
    }    
  }