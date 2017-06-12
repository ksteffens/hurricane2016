<?php
ini_set("error_log", "/vagrant/php_error.log");

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
        $this->_db = new mysqli('localhost', 'hurricane' ,'123456', 'hurricane2017');

        $_db = $this->_db;
		
		error_log('QueryDatabase');

        if ($_db->connect_error) {
            die('Connection Error-QueryDatabase: ' . $_db->connect_error);
        }

        $_db->set_charset("utf8");

        return $_db;
    }

    public function readPatient($params) {
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM patient") or
        die('Connection Error QueryDatabase: ' . $_db->connect_error);
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
        $sql = "UPDATE `hurricane2017`.`patient` SET
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
        $sql = "INSERT INTO patient (Name, Vorname, Geburtsdatum, Strasse, PLZ, Ort, GeschlechtID, EingangsDatum, PatientenNummer, AufnahmeZeit, AufnahmeID, AufnahmeKTW, AbgangZeit, AbgangID,
                                     AbgangUebergabe, AbgangZiel, DiagnoseID, DiagnoseSonstiges, HelferNr1, HelferNr2) 
                VALUES ('$params->Name', '$params->Vorname', '$params->Geburtsdatum', '$params->Strasse', '$params->PLZ', '$params->Ort', '$params->GeschlechtID', '$params->EingangsDatum', '$params->PatientenNummer', '$params->AufnahmeZeit', '$params->AufnahmeID', '$params->AufnahmeKTW', '$params->AbgangZeit', '$params->AbgangID'
                        '$params->AbgangUebergabe', '$params->AbgangZiel', '$params->DiagnoseID', '$params->DiagnoseSonstiges', '$params->HelferNr1', '$params->HelferNr2');";
        error_log($sql);
        $_result = $_db->query($sql);// or
//        die('Connection Error: ' . $_db->connect_error);
        error_log(print_r($_db->connect_error, 1));
        $params->patientID = $_db->insert_id;
        error_log(print_r($params, 1));
        return $params;
    }

}
