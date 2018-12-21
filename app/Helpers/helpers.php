<?php

use App\Helpers\StringX;

function string_len($string)
{
    return StringX::len($string);
}

function string_repeat($string, $times)
{
    return StringX::repeat($string, $times);
}

function string_reverse($string)
{
    return StringX::reverse($string);
}

function string_trim($string)
{
    return StringX::startTrim($string);
}

function string_to_array($string)
{
    return StringX::toArray($string);
}

function charsTable($string)
{
    return StringX::charsTable();
}