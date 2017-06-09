<?php

/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 01.06.16
 * Time: 19:52
 */
class AbgangQuery
{
    private $_db;
    protected $_result;
    public $results;

    public function __construct() {
        $this->_db = new mysqli('localhost', 'hurricane' ,'123456', 'hurricane2017');

        $_db = $this->_db;

        if ($_db->connect_error) {
            die('Connection Error-AbgangQuery: ' . $_db->connect_error);
        }

        $_db->set_charset("utf8");
        
        return $_db;
    }

    public function getAbgang($params) {
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM `abgang`") or
        die('Connection Error AbgangQuery: ' . $_db->connect_error);
        $results = array();


        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        //error_log(print_r($results, 1));
        return $results;
    }
}
