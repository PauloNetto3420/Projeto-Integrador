<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_DAO extends Model {
    
    function addUser($email,$login, $senha, $nome, $data_nasc, $gender, $url){
        $this->db->query("INSERT INTO `tbl_usuario` (`Email`, `Login`, `Senha`, `Nome`, `Data_Nasc`, `Genero`, `Url`) VALUES ('$email', '$login', '$senha', '$nome', '$data_nasc', '$gender', '$url')");
    }

}
