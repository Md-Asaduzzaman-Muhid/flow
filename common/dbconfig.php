<?php 
    class dbConfig{
        private $DB_HOST = '127.0.0.1';
        private $USER_NAME = 'root';
        private $USER_PASSWORD = '';
        private $DB_NAME = 'flow'; 
        public $conn;
        public $sql = "CREATE TABLE IF NOT EXISTS user (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            phone VARCHAR(50),
            dob VARCHAR(50),
            image VARCHAR(50),
            password VARCHAR(50),
            phone VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        public function dbConnection(){
        $this->conn = null;
            try{
                $this->conn = mysqli_connect($this->DB_HOST, $this->USER_NAME, $this->USER_PASSWORD, $this->DB_NAME);
                $this->conn->exec($sql);
                
            }  catch (exception $ex){
                echo "connection error".$ex;
            }
            return $this->conn;
        }
    }
?>


