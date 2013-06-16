<?php

self::$config['DefaultNamespace'] = '\\Blog';
self::$config['NamespaceAssociations']['\\Blog'] = '~/application/';

self::$config['Log']['On'] = false;
self::$config['Log']['UseOneFile'] = true;

self::$config['Database']['Adapter'] = 'MySQL';
self::$config['Database']['Path'] = '\\Pvik\\Database\\Adapter\\MYSQL\\';
self::$config['Database']['Server'] = 'localhost';
self::$config['Database']['Username'] = 'root';
self::$config['Database']['Password'] = 'root';
self::$config['Database']['Database'] = 'blog';

self::$config['Routes'] = array(
    array ('Url' => '/', 'Controller' => 'Index', 'Action' => 'Index'),
    array ('Url' => '/{uniqueName}/', 'Controller' => 'Post', 'Action' => 'Index'),
);
?>