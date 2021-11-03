<?php

namespace Marcell\Tiger;

use Marcell\Tiger\Tigris;

class Kiiratas {
    public static function kiir() {
        $lista = Tigris::beolvas();

        $sor = "";

        foreach ($lista as $i) {
            $sor .= $i -> getId() . " " . $i -> getNev() . " " . $i -> getTulaj_nev() . " " . $i -> getOrokbefogadas_datum() -> format('Y-m-d') . "<br>";
        }
        echo $sor;

        return $sor;
    }
}