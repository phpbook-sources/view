<?php namespace PHPBook\View;

class View {
	
	private $pathRoot = null;

	private $view = null;

	private $data = [];

	public function setPathRoot(String $pathRoot) {
		$this->pathRoot = $pathRoot;
		return $this;
	}

	public function getPathRoot(): ?String {
		return $this->pathRoot;
	}

	public function setView(String $view) {
		$this->view = $view;
		return $this;
	}

	public function getView(): ?String {
		return $this->view;
	}

	public function setData(Array $data) {
		$this->data = $data;
		return $this;
	}

	public function getData(): Array {
		return $this->data;
	}

    public function render(): String {

		$pathRoot = $this->getPathRoot() ? $this->getPathRoot() : \PHPBook\View\Configuration\View::getDefaultPathRoot();

		ob_start();
		
		extract($this->getData());

		include str_replace(['/', '\''], DIRECTORY_SEPARATOR, Configuration\View::getViewsPathRoot($pathRoot) . DIRECTORY_SEPARATOR . $this->getView() . '.php');
		
		$buffer = ob_get_clean();
		
		return $buffer;
		
    }

}
