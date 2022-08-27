<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
</head>

<body>

    <div class="index-main">

        <h1 id="ks-h1">Klima Servis - AirCool</h1>

        <div class="tabela">
            <table class="display" id="tabela">
                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Adresa</th>
                        <th>Grad</th>
                        <th>Tip servisa</th>
                        <th>Cena</th>
                        <th>Majstor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $DB_CONN = new mysqli("localhost", "root", "", "klimaservis");
                    $SQL = "SELECT servis.*, tip.naziv, tip.cena, majstor.ime_prezime 
                from servis LEFT JOIN tip ON servis.tip_id = tip.id
                LEFT JOIN majstor ON servis.majstor_id = majstor.id";
                    $DATA = $DB_CONN->query($SQL);

                    while ($servis = mysqli_fetch_object($DATA)) {
                    ?>

                        <tr>
                            <td><?php echo $servis->datum ?></td>
                            <td><?php echo $servis->adresa ?></td>
                            <td><?php echo $servis->grad ?></td>
                            <td><?php echo $servis->naziv ?></td>
                            <td><?php echo $servis->cena ?></td>
                            <td><?php echo $servis->ime_prezime ?></td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="script.js"></script>
</body>

</html>