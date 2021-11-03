<?php

namespace Marcell\Tiger;

use DateTime;

class Tigris {

    private $id;
    private $nev;
    private $tulaj_nev;
    private $orokbefogadas_datum;

    public function __construct(string $nev, string $tulaj_nev, DateTime $orokbefogadas_datum)
    {
        $this -> nev = $nev;
        $this -> tulaj_nev = $tulaj_nev;
        $this -> orokbefogadas_datum = $orokbefogadas_datum;
    }

    public function getId() : int {
        return $this -> id;
    }

    public function getNev() : string {
        return $this -> nev;
    }

    public function setNev(string $nev) : void {
        $this -> nev = $nev;
    }

    public function getTulaj_nev() : string {
        return $this -> tulaj_nev;
    }

    public function setTulaj_nev(string $tulaj_nev) : void {
        $this -> tulaj_nev = $tulaj_nev;
    }

    public function getOrokbefogadas_datum() : DateTime {
        return $this -> orokbefogadas_datum;
    }

    public function setOrokbefogadas_datum(DateTime $orokbefogadas_datum) : void {
        $this -> orokbefogadas_datum = $orokbefogadas_datum;
    }

    public static function beolvas() : array {
        global $db;

        $lekerdezes = $db -> query('SELECT * FROM tigris') -> fetchAll();

        $list = [];

        foreach ($lekerdezes as $i) {
            $ujTigris = new Tigris($i['nev'], $i['tulaj_nev'], new DateTime($i['orokbefogadas_datum']));
            $ujTigris -> id = $i['id'];
            $list[] = $ujTigris;
        }

        return $list;
    }
}