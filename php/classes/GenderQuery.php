<?php
/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 31.05.16
 * Time: 20:12
 */

class GenderQuery
{

    private $_db;
    protected $_result;
    public $results;

    public function __construct() {
        $this->_db = new mysqli('localhost', 'hurricane' ,'123456', 'hurricane2016');

        $_db = $this->_db;
		
		error_log($_db->error);
		error_log($_db);

        if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
        }

        $_db->set_charset("utf8");
        
        return $_db;
    }

    public function getGender($params) {
        $_db = $this->_db;

        $sql = "SELECT GeschlechtID, Beschreibung
                FROM Geschlecht";


        $_result = $_db->query($sql) or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        return $results;
    }



}
