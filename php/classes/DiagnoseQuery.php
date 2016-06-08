<?php

/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 01.06.16
 * Time: 19:52
 */
class DiagnoseQuery
{
    private $_db;
    protected $_result;
    public $results;

    public function __construct() {
        $this->_db = new mysqli('localhost', 'hurricane' ,'123456', 'hurricane2016');

        $_db = $this->_db;
		
		error_log($_db->error);
		error_log(print_r($_db, 1));

        if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
        }

        $_db->set_charset("utf8");
        
        return $_db;
    }

    public function getDiagnose($params) {
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM `Diagnoseschluessel`") or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();


        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        //error_log(print_r($results, 1));
        return $results;
    }
}
