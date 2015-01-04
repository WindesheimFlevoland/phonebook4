<?php

/**
 * DbManager - interface to MySQL database
 * @ 2012-2013 Peter van der Post
 */
class DbManager {

    private $dbhost = 'localhost';      //naam van de server                                  
    private $dbuser = 'root';           //naam van de gebruiker 
    private $dbpassword = '';           //wachtwoord van de gebruiker 
    private $dbname = 'phonebook';      //naam van de database

    public function DbManager() {
        
        mysqli_report(MYSQLI_REPORT_STRICT); 
        $this->openConnection();
    }

    public function openConnection() {
        try {
            $this->mysqli = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
        } catch (Exception $e) {
            echo "message: " . $e->getMessage();  
            echo "Service unavailable";
            exit(3);
        }
    }

    //  Select queries
    public function doQuery($sql) {

        return $this->mysqli->query($sql);
    }

    //  Insert,  Delete, Update queries
    public function executeQuery(String $sql) {

        $this->$mysqli->query($sql);
    }

    public function insertQuery(String $slq) {
        
    }

    public function closeConnection() {
        
    }

}

?>
