<?php 
    class db{

        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db= 'estudo';

        public function conecta_db(){
            $conect = mysqli_connect($this->host,$this->user,$this->password,$this->db);
            mysqli_set_charset($conect, 'utf8');

            if(mysqli_connect_errno()){
                echo 'Erro ao conectar com o banco'.mysqli_connect_error();
            }else{
                return $conect;
            }
        }       

    }
?>