<?php namespace PHPBook\View\Configuration;

abstract class View {
    
    private static $viewsPathRoot = [];

    private static $defaultPathRoot = null;

    public static function setViewsPathRoot(String $alias, String $viewsPathRoot) {
        Static::$viewsPathRoot[$alias] = $viewsPathRoot;
    }

    public static function getViewsPathRoot(String $alias): String {
        return array_key_exists($alias, Static::$viewsPathRoot) ? Static::$viewsPathRoot[$alias] : Null;
    }

    public static function setDefaultPathRoot(String $defaultPathRoot) {
        Static::$defaultPathRoot = $defaultPathRoot;
    }

    public static function getDefaultPathRoot(): String {
        return Static::$defaultPathRoot;
    }

}
