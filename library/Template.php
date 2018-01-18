<?php namespace PHPBook\View;

abstract class Template {
    
    public static function render(String $alias, String $template, Array $data = []): String {

		ob_start();
		
		extract($data);
		
		include Configuration\Template::getDirectory($alias) . '/' . $template . '.php';
		
		$buffer = ob_get_clean();
		
		return $buffer;
		
    }

}
