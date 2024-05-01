<?php

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT members.*, paket.jenis_paket, lama.jenis_langganan
        FROM members
        LEFT JOIN paket ON members.id_paket = paket.id_paket
        LEFT JOIN lama ON members.id_lama = lama.id_lama
        ";
        return $this->execute($query);
    }

    function getMembersById($id) {
        $query = "SELECT * FROM members WHERE id = '$id'";
        $result = $this->execute($query);
        return mysqli_fetch_assoc($result);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $paket = $data['id_paket'];
        $lama = $data['id_lama'];
        // var_dump($data);

        $query = "insert into members (name, email, phone, id_paket, id_lama) values ('$name','$email','$phone','$paket','$lama')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM members WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $paket = $data['id_paket'];
        $lama = $data['id_lama'];

        $name = mysqli_real_escape_string($this->db_link, $name);
        $email = mysqli_real_escape_string($this->db_link, $email);
        $phone = mysqli_real_escape_string($this->db_link, $phone);
        $paket = mysqli_real_escape_string($this->db_link, $paket);
        $lama = mysqli_real_escape_string($this->db_link, $lama);
    
        $query = "UPDATE members SET name = '$name', email = '$email', phone = '$phone', id_paket = '$paket', id_lama = '$lama' WHERE id = '$id'";
    
        // Mengeksekusi query
        return $this->execute($query);
    }
    
}
