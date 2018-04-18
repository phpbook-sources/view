<?php namespace PHPBook\View\Configuration;

abstract class View {
    
    private static $directory = [];

    public static function setDirectory(String $alias, String $directory) {
        Static::$directory[$alias] = $directory;
    }

    public static function getDirectory(String $alias): String {
        return array_key_exists($alias, Static::$directory) ? Static::$directory[$alias] : Null;
    }

}
