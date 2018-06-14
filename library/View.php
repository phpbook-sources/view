<?php namespace PHPBook\View;

abstract class View {
    
    public static function render(String $alias, String $template, Array $data = []): String {

		ob_start();
		
		extract($data);

		include str_replace(['/', '\''], DIRECTORY_SEPARATOR, Configuration\View::getDirectory($alias) . DIRECTORY_SEPARATOR . $template . '.php');
		
		$buffer = ob_get_clean();
		
		return $buffer;
		
    }

}
