<?php

$DB_CONN = new mysqli("localhost", "root", "", "klimaservis");
$SQL = "DELETE FROM servis where id=" . $_POST['SERVIS_ID'];
$DB_CONN->query($SQL);
