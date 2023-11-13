<?php

namespace App\Traits;

trait Color
{
    private string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
}
