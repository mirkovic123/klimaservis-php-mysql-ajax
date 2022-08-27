<?php

require 'Servis.php';

$servis = new Servis();
$servis->datum = $_POST['datum'];
$servis->adresa = $_POST['adresa'];
$servis->grad = $_POST['grad'];
$servis->tip_servisa = $_POST['tip_servisa'];
$servis->majstor = $_POST['majstor'];

$DB_CONN = new mysqli("localhost", "root", "", "klimaservis");

$servis->saveServis($servis->datum, $servis->adresa, $servis->grad, $servis->tip_servisa, $servis->majstor, $DB_CONN);
