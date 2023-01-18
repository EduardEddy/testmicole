<?php

namespace App\Helpers;

class HandleRandomNumber {
    public static function getNew($max_number) {
        return rand(0,$max_number);
    }

    public static function getNewDecimalNumber() {
        return rand(0, 9) / 10;
    }
}