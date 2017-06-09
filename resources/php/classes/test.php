<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <input name="Protokoll" id="Protokoll">
    <input type="submit" id="test">

</form>

<?php

//echo print_r($_POST,1);
//echo $_SERVER['PHP_SELF'];


$_db = new mysqli('localhost', 'hurricane', '123456', 'hurricane2017');

if ($_db->connect_error) {
die('Connection Error: ' . $_db->connect_error);
}

$_db->set_charset("utf8");

for ($i = 1; $i < 4000; $i++) {

    $SQL = "SELECT * FROM PROTOKOLL WHERE PatientenNummer = $i";

    $_result = $_db->query($SQL) or
    die('Bitte nur Nummern ' . $_db->connect_error);
    $results = array();

    while ($row = $_result->fetch_assoc()) {
        //  echo print_r($row, 1);
        array_push($results, $row);
    }

    if (!empty($results)) {
        echo '<span style="color: green";>Protokoll ' . $i . ' ist Vorhanden</span><br>'.PHP_EOL;
    } else {
        echo '<span style="color: red";> Protokoll ' . $i . '  nicht vorhanden</span><br>'.PHP_EOL;
    }

    $result = array();

}
$result = array();
$_POST = null;

?>

<script>
  console.log('Hallo');
  document.getElementById("Protokoll").focus();
</script>


