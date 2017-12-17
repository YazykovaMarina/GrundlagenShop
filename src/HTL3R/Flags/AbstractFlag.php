<?php

namespace HTL3R\Flags\Flags;

abstract class AbstractFlag {
    private $name;
    private $price;
    protected $width;
    protected $height;
    private $color;

    /**
     * Flag constructor.
     * @param string $name Name of the flag
     * @param float $price Price of the flag
     * @param float $width Width of the flag in m
     * @param float $height Height of the flag in m
     * @param string $color Color as hex code
     */

    //Konstruktor zum Erstellen der Klasse verwendet das reservierte Wort __construct
    function __construct(string $name,float $price,float $width,float $height,string $color) {
        $this->name = $name;
        $this->price = $price;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }
    //in Java String toString(String){} EOT ist zum Ausgeben größerer Strings
    function __toString() : string {
        $rv = <<<EOT
Name: $this->name<br>
Price: $this->price<br>
Width: $this->width<br>
Height: $this->height<br>
Farbe: <div style="width:40px;height:40px;background-color: $this->color;"></div>
EOT;
        return $rv;
    }
}