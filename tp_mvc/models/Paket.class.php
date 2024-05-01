<?php

class Paket extends DB
{
    function getPaket()
    {
        $query = "SELECT * FROM paket";
        return $this->execute($query);
    }

    function getPaketById($id) {
        $query = "SELECT * FROM paket WHERE id_paket = '$id'";
        $result = $this->execute($query);
        return mysqli_fetch_assoc($result);
    }

    function add($data)
    {
        $jenis = $data['jenis_paket'];
        // var_dump($data);

        $query = "INSERT INTO paket (jenis_paket) VALUES ('$jenis')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM paket WHERE id_paket = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($data)
    {
        $id = $data['id_paket'];
        $jenis = $data['jenis_paket'];
        // var_dump($data);

        // $jenis = mysqli_real_escape_string($this->db_link, $jenis);
    
        $query = "UPDATE paket SET jenis_paket = '$jenis' WHERE id_paket = '$id'";
    
        // Mengeksekusi query
        return $this->execute($query);
    }
    
}
