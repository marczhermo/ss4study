<?php
// These four define set the database connection details.
define('SS_DATABASE_CLASS', 'MySQLPDODatabase');
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_USERNAME', 'root');
define('SS_DATABASE_PASSWORD', 'root');

// This sets a prefix, which is prepended to the $database variable. This is
// helpful mainly on shared hosts, when every database has a prefix.
define('SS_DATABASE_PREFIX', 'ss4_');

// This is used by sake to know which directory points to which URL
global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/home/marcz/Code/opensource/ss4'] = 'http://www.ss4.app';
