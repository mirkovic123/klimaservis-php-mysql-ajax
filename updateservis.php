<?php

require 'Servis.php';

$servis = new Servis();
$servis->id = $_POST['SERVIS_ID'];
$servis->datum = $_POST['DATUM'];
$servis->adresa = $_POST['ADRESA'];
$servis->grad = $_POST['GRAD'];
$servis->tip_servisa = $_POST['TIP_SERVISA'];
$servis->majstor = $_POST['MAJSTOR_ID'];

$DB_CONN = new mysqli("localhost", "root", "", "klimaservis");

$servis->updateServis($servis->id, $servis->datum, $servis->adresa, $servis->grad, $servis->tip_servisa, $servis->majstor, $DB_CONN);
