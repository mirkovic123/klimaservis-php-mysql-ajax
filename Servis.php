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

    public function updateServis($id, $datum, $adresa, $grad, $tip_id, $majstor_id, $db_conn)
    {
        $SQL = "update servis set datum='" . $datum . "', adresa='" . $adresa . "', grad='" . $grad . "', tip_id='" . $tip_id . "', majstor_id='" . $majstor_id . "' where id=" . $id;

        $db_conn->query($SQL);
        header('Location: edit-delete.php');
    }
}
