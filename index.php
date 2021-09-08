<?php

namespace App;

class Main
{

    private $name = 'Juliano';

    public function __construct()
    {
        echo "oi";
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function teste(string $name)
    {
        return $name;
    }
}

$x = new Main();

var_dump $x->__construct();
