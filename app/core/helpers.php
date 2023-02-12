<?php
namespace app\core;

class helpers
{
    public static function redirect($path)
    {
        header("location: http://".HOST."/public/" . $path);
    }
}