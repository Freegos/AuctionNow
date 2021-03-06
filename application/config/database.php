<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

//Site db (unused)
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'root';
$db['default']['database'] = 'auctionnow';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


//Trinitycore world db params
$db['world']['hostname'] = 'localhost';
$db['world']['username'] = 'root';
$db['world']['password'] = 'root';
$db['world']['database'] = 'world';
$db['world']['dbdriver'] = 'mysql';
$db['world']['dbprefix'] = '';
$db['world']['pconnect'] = TRUE;
$db['world']['db_debug'] = TRUE;
$db['world']['cache_on'] = FALSE;
$db['world']['cachedir'] = '';
$db['world']['char_set'] = 'utf8';
$db['world']['dbcollat'] = 'utf8_general_ci';
$db['world']['swap_pre'] = '';
$db['world']['autoinit'] = FALSE;
$db['world']['stricton'] = FALSE;

//Trinitycore character db params
$db['character']['hostname'] = 'localhost';
$db['character']['username'] = 'root';
$db['character']['password'] = 'root';
$db['character']['database'] = 'characters';
$db['character']['dbdriver'] = 'mysql';
$db['character']['dbprefix'] = '';
$db['character']['pconnect'] = TRUE;
$db['character']['db_debug'] = TRUE;
$db['character']['cache_on'] = FALSE;
$db['character']['cachedir'] = '';
$db['character']['char_set'] = 'utf8';
$db['character']['dbcollat'] = 'utf8_general_ci';
$db['character']['swap_pre'] = '';
$db['character']['autoinit'] = FALSE;
$db['character']['stricton'] = FALSE;

//Trinitycore auth db params
//$db['auth']['dsn'] = 'mysql:host=localhost;dbname=auth';
$db['auth']['hostname'] = 'localhost';
$db['auth']['database'] = 'auth';
$db['auth']['username'] = 'root';
$db['auth']['password'] = 'root';
$db['auth']['dbdriver'] = 'mysql';
$db['auth']['dbprefix'] = '';
$db['auth']['pconnect'] = TRUE;
$db['auth']['db_debug'] = TRUE;
$db['auth']['cache_on'] = FALSE;
$db['auth']['cachedir'] = '';
$db['auth']['char_set'] = 'utf8';
$db['auth']['dbcollat'] = 'utf8_general_ci';
$db['auth']['swap_pre'] = '';
$db['auth']['autoinit'] = FALSE;
$db['auth']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */