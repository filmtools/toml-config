<?php
use Yosymfony\ConfigLoader\FileLocator;
use Yosymfony\ConfigLoader\ConfigLoader;
use Yosymfony\ConfigLoader\Loaders\TomlLoader;

require_once 'vendor/autoload.php';

// The file locator uses an array of pre-defined paths to find files:
$paths = [__DIR__];
$locator = new FileLocator( $paths );

// Set up the ConfigLoader to work with YAML and TOML configuration files:
$loader = new ConfigLoader([
    new TomlLoader($locator),
]);

echo "<pre>";
try {
	$config = (array) $loader->load('testsuite.toml');

	print_r( $config );

}
catch (\Throwable $e)
{
	echo $e;
}
