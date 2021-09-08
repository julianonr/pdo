<?php

namespace App;

class Main
{
    public function __construct()
    {
        echo "1";
    }
    public function teste()
    {
        return "2";
    }
}

$teste = new Main();

$xx = $teste->teste();

echo $xx;
