<?php

class Lama extends DB
{
    function getLama()
    {
        $query = "SELECT * FROM lama";
        return $this->execute($query);
    }

    function getLamaById($id) {
        $query = "SELECT * FROM lama WHERE id_lama = '$id'";
        $result = $this->execute($query);
        return mysqli_fetch_assoc($result);
    }

    function add($data)
    {
        $jenis = $data['jenis_langganan'];

        $query = "INSERT INTO lama (jenis_langganan) VALUES ('$jenis')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM lama WHERE id_lama = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($data)
    {
        $id = $data['id_lama'];
        $jenis = $data['jenis_langganan'];

        $jenis = mysqli_real_escape_string($this->db_link, $jenis);
    
        $query = "UPDATE lama SET jenis_langganan = '$jenis' WHERE id_lama = '$id'";
    
        // Mengeksekusi query
        return $this->execute($query);
    }
    
}
