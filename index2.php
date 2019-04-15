<?php
use Yosymfony\Toml\Toml;
use Spatie\YamlFrontMatter\YamlFrontMatter;

require_once 'vendor/autoload.php';

// The file locator uses an array of pre-defined paths to find files:
$file = 'testsuite2.toml';


echo "<pre>";
try {

	$object = YamlFrontMatter::parse(file_get_contents($file));

	echo $object->matter('maker'), PHP_EOL;
	
	print_r ($object->matter('film'));

	echo $object->matter('developer'), PHP_EOL;
	
	echo $object->matter('camera'), PHP_EOL;

	$toml = $object->body();
	$array = Toml::Parse( $toml );
	print_r($array);

}
catch (\Throwable $e)
{
	echo $e;
}
