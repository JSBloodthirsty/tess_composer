<?php
namespace CHelp;

class Bc {
    public static function add(array $a, int $b) {
        $result = 0;
        foreach ($a as $value) {
            $result = bcadd($result,$value,$b);
        }
        return $result;
    }
}
