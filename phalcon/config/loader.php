<?
use Phalcon\Loader;
$loader = new Loader();
$loader->registerDirs([
        ROOT_PATH.'/tasks',
        ROOT_PATH.'/vendor',
        APPLICATION_PATH.'/tasks'
])
->registerNamespaces(array('Phalcon' => ROOT_PATH.'/vendor'))
->register();