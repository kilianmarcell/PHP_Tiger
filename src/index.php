<?php

require_once "db.php";
require "../vendor/autoload.php";

use Marcell\Tiger\Tigris;
use Marcell\Tiger\Kiiratas;

use Dompdf\Dompdf;

$kiiratas = new Kiiratas();

$dompdf = new Dompdf();
//TODO: $kiiratas -> kiir()
$dompdf->loadHtml($kiiratas -> kiir());

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilián Marcell Seholnincs Állatkert</title>
</head>
<body>
    <div>
        <?php

            foreach ($lista as $i) {
                echo $i -> getId() . " " . $i -> getNev() . " " . $i -> getTulaj_nev() . " " . $i -> getOrokbefogadas_datum() -> format('Y-m-d') . "<br>";
            }

        ?>
    </div>
</body>
</html>