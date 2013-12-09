<?php

namespace DeltaBind\Render;

interface DataAssign
{
    public function assignVar($name, $value);

    public function assignArray($array);

}