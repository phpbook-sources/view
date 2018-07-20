    
+ [About View](#about-view)
+ [Composer Install](#composer-install)
+ [Declare Configurations](#declare-configurations)
+ [Declare Views](#declare-views)
+ [Rendering Views](#rendering-views)

### About View

- A lightweight view PHP library

### Composer Install

	composer require phpbook/view

### Declare Configurations

```php
<?php

/********************************************
 * 
 *  Declare Configurations
 * 
 * ******************************************/

//Path root to views

\PHPBook\View\Configuration\View::setViewsPathRoot('main', 'path\to\views\base\dir');

\PHPBook\View\Configuration\View::setViewsPathRoot('anotherAlias', 'path\to\another\views\base\dir');

\PHPBook\View\Configuration\View::setDefaultPathRoot('main');

?>
```

### Declare Views

###### View One (one.php)

```php
		
	My View Example One

	<?php echo $title; ?>

	<?php echo $jhon->name; ?>

	<?php foreach($friends as $friend): ?>

		<?php echo $friend->name; ?>

	<?php endforeach; ?>
		
```

###### View Two (two.php)

```php

	My View Example Two using another view inside

	<?php  
		echo (new \PHPBook\View\View)
			->setPathRoot('anotherAlias')
			->setView('subpath/to/file/view')
			->render();
	?>
		
```

### Rendering Views

```php
<?php 

/*********************************************
 * 
 *  Rendering Views
 * 
 * *******************************************/

$jhon = new StdClass;
$jhon->name = 'Jhon';
$jhon->age = 15;

$title = $jhon->name;

$ana = new StdClass;
$ana->name = 'Ana';
$ana->age = 15;

$paul = new StdClass;
$paul->name = 'Paul';
$paul->age = 16;

$friends = [$ana, $paul];

//data must be an array os values
$content = (new \PHPBook\View\View)
	->setView('subpath/to/file/view/one')
	->setData([
		'title' => $title, 
		'jhon' => $jhon, 
		'friends' => $friends
	])
	->render();

echo $content;
    
?>
```
