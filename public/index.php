<?php

require_once __DIR__."/../vendor/autoload.php";

require (dirname(__DIR__).'/app/Core/Aplication.php');

define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('APP',ROOT.'app'.DIRECTORY_SEPARATOR);
define('VIEW',ROOT.'app'.DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR);
define('MODEL',ROOT.'app'.DIRECTORY_SEPARATOR.'Model'.DIRECTORY_SEPARATOR);
define('DATA',ROOT.'app'.DIRECTORY_SEPARATOR.'Data'.DIRECTORY_SEPARATOR);
define('CORE',ROOT.'app'.DIRECTORY_SEPARATOR.'Core'.DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'Controller'.DIRECTORY_SEPARATOR);


$modules=[ROOT,APP,VIEW,MODEL,DATA,CORE,CONTROLLER];

set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));

spl_autoload_register('spl_autoload',false);

$obj=new Aplication();

$obj->__constructor();







