<?php

namespace App\Helpers;

class HandleAddress {
    public static function getShortAddress($address) {
        $pos = strpos($address, ',');
        return substr($address, 0, $pos);
        
    }
}