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

        <div class="item-index">
            <button class="btn btn-danger" id="novi-servis-dgm" data-bs-toggle="modal" data-bs-target="#novi-servis-modal"> ADD </button>
            <a href="edit-delete.php"><button class=" btn btn-danger" id="ed-servis-dgm"> EDIT | DELETE </button></a>
            <button class="btn btn-danger" id="ss-servis-dgm"> SEARCH | SORT</button>
        </div>


        <!-- Forma modal za dodavanje novog urađenog servisa -->
        <div class="modal fade" id="novi-servis-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Novi Servis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <label class="form-label">Datum</label>
                            <input type="text" class="form-control mb-2" name="datum">
                            <label class="form-label">Adresa</label>
                            <input type="text" class="form-control mb-2" name="adresa">
                            <label class="form-label">Grad</label>
                            <input type="text" class="form-control mb-2" name="grad">
                            <label class="form-label">Tip servisa</label>
                            <select class="form-select mb-3" name="tip_servisa">
                                <?php
                                $DB_CONN = new mysqli("localhost", "root", "", "klimaservis");
                                $SQL = "SELECT * from tip";
                                $DATA = $DB_CONN->query($SQL);

                                while ($tip_servisa = mysqli_fetch_object($DATA)) {
                                ?>
                                    <option value="<?php echo $tip_servisa->id; ?>"><?php echo $tip_servisa->naziv; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <label class="form-label">Majstor</label>
                            <select class="form-select mb-3" name="majstor">
                                <?php
                                $SQL2 = "SELECT id, ime_prezime from majstor";
                                $DATA2 = $DB_CONN->query($SQL2);

                                while ($majstor = mysqli_fetch_object($DATA2)) {
                                ?>
                                    <option value="<?php echo $majstor->id; ?>"><?php echo $majstor->ime_prezime; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                            <button type="submit" class="btn btn-primary" name="sacuvaj_servis_button">Sačuvaj</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nazad</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ************************************************* -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>