<?php
/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 13.06.16
 * Time: 23:44
 */
class StatistikQuery
{
    private $_db;
    protected $_result;
    public $results;

    public function __construct()
    {
        $this->_db = new mysqli('localhost', 'hurricane', '123456', 'hurricane2016');

        $_db = $this->_db;

        error_log('StatistikQuery');

        if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
        }

        $_db->set_charset("utf8");

        return $_db;
    }


    public function getAufnahme()
    {
        $_db = $this->_db;

        $sql = 'select p.AufnahmeID, a.Beschreibung, count(1) as Anzahl
                from Protokoll p, Aufnahme a
                WHERE a.AufnahmeID = p.AufnahmeID
                group by p.AufnahmeID';

        $_result = $_db->query($sql) or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        return $results;
    }

    public function getDiagnose()
    {
        $_db = $this->_db;

        $sql = 'select p.DiagnoseID, d.Stichwort as Beschreibung , count(1) as Anzahl
                from Protokoll p, Diagnoseschluessel d
                WHERE d.DiagnoseID = p.DiagnoseID
                group by p.DiagnoseID';

        $_result = $_db->query($sql) or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        return $results;
    }

    public function getAbgang()
    {
        $_db = $this->_db;

        $sql = 'select p.AbgangID, a.Beschreibung, count(1) as Anzahl
                from Protokoll p, Abgang a
                WHERE a.AbgangID = p.AbgangID
                group by p.AbgangID';

        $_result = $_db->query($sql) or
        die('Connection Error: ' . $_db->connect_error);
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();
        return $results;
    }

    public function getGeschlecht()
    {
        $_db = $this->_db;

        $sql = 'select p.GeschlechtID, g.Beschreibung, count(1) as Anzahl
                from Patient p, Geschlecht g
                WHERE g.GeschlechtID = p.GeschlechtID
                group by p.GeschlechtID';

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

