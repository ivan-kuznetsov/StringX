<?php

namespace App\Helpers;

class StringX
{
    public static function charsTable()
    {
        $table = [];

        foreach (range(0, 255) as $code) {
            $table[] = chr($code);
        }

        return $table;
    }

    public static function repeat($string, $times)
    {
        for ($resultString = $string, $i = 1; $i < $times; $i++) {
            $resultString .= $string;
        }

        return $resultString;
    }

    public static function reverse($string)
    {
        for ($resultString = '', $i = self::len($string); $i >= 0; $i--) {
            $resultString .= $string[$i];
        }

        return $resultString;
    }

    public static function len($string)
    {
        if ($string === '') {
            return [];
        }

        return count(self::toArray($string));
    }

    public static function toArray($string)
    {
        if ($string === '') {
            return [];
        }

        $letters = [];
        $counter = 0;

        while ($string[$counter]) {
            $letters[] = $string[$counter];
            $counter++;
        }

        return $letters;
    }
}