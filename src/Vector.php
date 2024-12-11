<?php
namespace Geometry;

class Vector {
    private $x;
    private $y;

    public function __construct(int|float $x, int|float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function length(): float {
        return sqrt(($this->x ** 2) + ($this->y ** 2));
    }

    public function isZero(): bool {
        return ($this->x === 0 && $this->y === 0);
    }

    public function isPerpendicularTo(Vector $vector): bool {
        return ($this->x * $vector->x + $this->y * $vector->y === 0);
    }

    public function getX(): int|float {
        return $this->x;
    }

    public function getY(): int|float {
        return $this->y;
    }
}

