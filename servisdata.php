<?php

require 'Servis.php';

$id_servis = $_POST['ID'];

$DB_CONN = new mysqli("localhost", "root", "", "klimaservis");

$SQL = "SELECT servis.*, tip.naziv, tip.cena, majstor.ime_prezime 
             from servis LEFT JOIN tip ON servis.tip_id = tip.id
             LEFT JOIN majstor ON servis.majstor_id = majstor.id
             WHERE servis.id = " . $id_servis;

$DATA = $DB_CONN->query($SQL);
$servis = mysqli_fetch_object($DATA);

echo json_encode($servis);
