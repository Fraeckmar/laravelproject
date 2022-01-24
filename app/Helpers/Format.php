<?php

class Format
{
    public static function price($value)
    {
        return number_format($value, 2);
    }
}