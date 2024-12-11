<?php
namespace Geometry;
class Point {
    private $x;
    private $y;

    public function __construct(int|float $x, int|float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveByX(int|float $dx) {
        $this->x += $dx;
    }

    public function moveByY(int|float $dy) {
        $this->y += $dy;
    }

    public function getX(): int|float {
        return $this->x;
    }

    public function getY(): int|float {
        return $this->y;
    }
}
