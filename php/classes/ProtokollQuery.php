<?php

/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 01.06.16
 * Time: 19:52
 */
class ProtokollQuery
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

    public function readProtokoll($params) {
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM `Protokoll`") or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();


        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        //error_log(print_r($results, 1));
        return $results;
    }

    public function createProtokoll($params) {
error_log(print_r($params, 1));
        $_db = $this->_db;

        $sql = "INSERT INTO Protokoll (PatientenID, EingangsDatum, PatientenNummer, AufnahmeZeit, AufnahmeID, AufnahmeKTW, AbgangZeit, AbgangID, AbgangUebergabe, AbgangZiel, DiagnoseID, DiagnoseSonstiges, HelferNr1, HelferNr2) 
                VALUES ($params->PatientenID, '$params->EingangsDatum', '$params->PatientenNummer', '$params->AufnahmeZeit', '$params->AufnahmeID', '$params->AufnahmeKTW', '$params->AbgangZeit', '$params->AbgangID', '$params->AbgangUebergabe', '$params->AbgangZiel', '$params->DiagnoseID', '$params->DiagnoseSonstiges', '$params->HelferNr1', '$params->HelferNr2' );";


        error_log($sql);

        $_result = $_db->query($sql)or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();

    error_log($_db->error);

        $this->_db->close();
        return $results;
    }

    public function updateProtokoll($params) {
        error_log(print_r($params, 1));
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM `Protokoll`") or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();


        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        error_log(print_r($results, 1));
        return $results;
    }

    public function deleteProtokoll($params) {
        error_log(print_r($params, 1));
        $_db = $this->_db;

        $_result = $_db->query("SELECT * FROM `Protokoll`") or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();


        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        error_log(print_r($results, 1));
        return $results;
    }


}
