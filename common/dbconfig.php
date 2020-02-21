<?php 
    class dbConfig{
        private $DB_HOST = '127.0.0.1';
        private $USER_NAME = 'root';
        private $USER_PASSWORD = '';
        private $DB_NAME = 'flow'; 
        public $conn;
        public function dbConnection(){
        $this->conn = null;
            try{
                $this->conn = mysqli_connect($this->DB_HOST, $this->USER_NAME, $this->USER_PASSWORD, $this->DB_NAME);
            // echo "get in config";
            }  catch (exception $ex){
                echo "connection error".$ex;
            }
            return $this->conn;
        }
    }
?>


