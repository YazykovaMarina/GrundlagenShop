<?php

namespace HTL3R\Flags\Flags;

use HTL3R\Flags\Interfaces\FlagInterface as FlagInterface;

class RectangleFlag extends AbstractFlag implements FlagInterface {

    function calcArea() : float {
        return $this->width * $this->height;
    }

}