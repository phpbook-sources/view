<?php namespace PHPBook\View\Configuration;

abstract class Template {
    
    private static $directory = '/';

    public static function setDirectory(String $directory) {
        Static::$directory = $directory;
    }

    public static function getDirectory(): String {
        return Static::$directory;
    }

}
