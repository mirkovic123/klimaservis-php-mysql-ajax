<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
</head>

<body>

    <div class="index-main">

        <h1 id="ks-h1">Klima Servis - AirCool</h1>

        <?php
        $DB_CONN = new mysqli("localhost", "root", "", "klimaservis");

        $SQL = "SELECT servis.*, tip.naziv, tip.cena, majstor.ime_prezime 
             from servis LEFT JOIN tip ON servis.tip_id = tip.id
             LEFT JOIN majstor ON servis.majstor_id = majstor.id";

        $DATA = $DB_CONN->query($SQL);
        ?>

        <div id="servis-ispis">
            <?php
            while ($servis = mysqli_fetch_object($DATA)) {
            ?>
                <h3><?php echo "ID: " . $servis->id . " |  Adresa: " . $servis->adresa . " |  Grad: " . $servis->grad . " |  Tip servisa: " . $servis->naziv . " |  Cena: " . $servis->cena . " |  Majstor: " . $servis->ime_prezime . " | " ?>
                    <button class="btn btn-primary" id="edit-btn" value="<?php echo $servis->id ?>">Edit</button>
                </h3>
            <?php
            }
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>