<?php

namespace App\Helpers;

class HandleOptions {
    public static function planPreferences() {
        $plan = ['Mensual','Anual'];
        $select = rand(0,1);
        return $plan[$select];
    }

    public static function businessStatus() {
        $status = ['OPERATIONAL','CLOSED_PERMANENTLY'];
        $select = rand(0,1);
        return $status[$select];
    }
}