<?php

/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 18.05.16
 * Time: 18:30
 */
class QueryDatabase
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

    public function readPatient($params) {
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM patient") or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        return $results;
    }

    public function updatePatient($params)
    {

        $_db = $this->_db;



        error_log(123456);
        error_log(print_r($params, 1));
        $sql = "UPDATE `hurricane2016`.`Patient` SET
        `Name` = '$params->Name',
        `Vorname` = '$params->Vorname',
        `Geburtsdatum` = '$params->Geburtsdatum',
        `Strasse` = '$params->Strasse',
        `Ort` = '$params->Ort',
        `GeschlechtID` = '$params->GeschlechtID',
        `PLZ` = '$params->PLZ'
        WHERE `patient`.`patientID` = $params->patientID";

        $_result = $_db->query($sql) or
        die('Connection Error: ' . $_db->connect_error);
    }

    public function createPatient($params) {
        $_db = $this->_db;
        error_log(print_r($params, 1));
        $sql = "INSERT INTO Patient (Name, Vorname, Geburtsdatum, Strasse, PLZ, Ort, GeschlechtID) 
                VALUES ('$params->Name', '$params->Vorname', '$params->Geburtsdatum', '$params->Strasse', '$params->PLZ', '$params->Ort', '$params->GeschlechtID');";
        $_result = $_db->query($sql) or
        die('Connection Error: ' . $_db->connect_error);
        $params->patientID = $_db->insert_id;
        return $params;
    }

}
