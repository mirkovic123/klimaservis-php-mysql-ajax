<?php

class Servis
{
    public $id;
    public $datum;
    public $adresa;
    public $grad;
    public $tip_id;
    public $majstor_id;

    public function saveServis($datum, $adresa, $grad, $tip_id, $majstor_id, $db_conn)
    {
        $SQL = "insert into servis (datum, adresa, grad, tip_id, majstor_id) values 
        ('$datum', '$adresa', '$grad', '$tip_id', '$majstor_id')";

        $db_conn->query($SQL);
        header('Location: index.php');
    }
}
