<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	['dsn']      The full DSN string describe a connection to the database.
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database driver. e.g.: mysqli.
|			Currently supported:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Query Builder class
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
|	['encrypt']  Whether or not to use an encrypted connection.
|
|			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
|			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
|
|				'ssl_key'    - Path to the private key file
|				'ssl_cert'   - Path to the public key certificate file
|				'ssl_ca'     - Path to the certificate authority file
|				'ssl_capath' - Path to a directory containing trusted CA certificates in PEM format
|				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
|				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
|
|	['compress'] Whether or not to use client compression (MySQL only)
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
| 				NOTE: Disabling this will also effectively disable both
| 				$this->db->last_query() and profiling of DB queries.
| 				When you run a query, with this setting set to TRUE (default),
| 				CodeIgniter will store the SQL statement for debugging purposes.
| 				However, this may cause high memory usage, especially if you run
| 				a lot of SQL queries ... disable this to avoid that problem.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $query_builder variables lets you determine whether or not to load
| the query builder class.
*/

$active_group = 'default';
$query_builder = TRUE;

//$active_group = 'default';

// $db['default']['hostname'] = 'localhost';
// $db['default']['username'] = 'root';
// $db['default']['password'] = '';
// $db['default']['database'] = 'db_sis';

// $db['default']['dsn']	= '';
// $db['default']['hostname'] = 'localhost';
// $db['default']['username'] = 'root';
// $db['default']['password'] = '';
// $db['default']['database'] = $_SESSION['clientdb']; // $ci->session->userdata('clientdb'); // 'db_sis';
// $db['default']['dbdriver'] = 'mysqli';
// $db['default']['dbprefix'] = '';
// $db['default']['pconnect'] = FALSE;
// $db['default']['db_debug'] = (ENVIRONMENT !== 'production');
// $db['default']['cache_on'] = FALSE;
// $db['default']['cachedir'] = '';
// $db['default']['char_set'] = 'utf8';
// $db['default']['dbcollat'] = 'utf8_general_ci';
// $db['default']['swap_pre'] = '';
// $db['default']['encrypt'] = FALSE;
// $db['default']['compress'] = FALSE;
// $db['default']['stricton'] = FALSE;
// $db['default']['failover'] = array();
// $db['default']['save_queries'] = TRUE;
//
// $db['01']['dsn']	= '';
// $db['01']['hostname'] = 'localhost';
// $db['01']['username'] = 'root';
// $db['01']['password'] = '';
// $db['01']['database'] = 'db_sis_unggulan';
// $db['01']['dbdriver'] = 'mysqli';
// $db['01']['dbprefix'] = '';
// $db['01']['pconnect'] = FALSE;
// $db['01']['db_debug'] = (ENVIRONMENT !== 'production');
// $db['01']['cache_on'] = FALSE;
// $db['01']['cachedir'] = '';
// $db['01']['char_set'] = 'utf8';
// $db['01']['dbcollat'] = 'utf8_general_ci';
// $db['01']['swap_pre'] = '';
// $db['01']['encrypt'] = FALSE;
// $db['01']['compress'] = FALSE;
// $db['01']['stricton'] = FALSE;
// $db['01']['failover'] = array();
// $db['01']['save_queries'] = TRUE;
//
// $db['02']['dsn']	= '';
// $db['02']['hostname'] = 'localhost';
// $db['02']['username'] = 'root';
// $db['02']['password'] = '';
// $db['02']['database'] = 'db_sis_karakter';
// $db['02']['dbdriver'] = 'mysqli';
// $db['02']['dbprefix'] = '';
// $db['02']['pconnect'] = FALSE;
// $db['02']['db_debug'] = (ENVIRONMENT !== 'production');
// $db['02']['cache_on'] = FALSE;
// $db['02']['cachedir'] = '';
// $db['02']['char_set'] = 'utf8';
// $db['02']['dbcollat'] = 'utf8_general_ci';
// $db['02']['swap_pre'] = '';
// $db['02']['encrypt'] = FALSE;
// $db['02']['compress'] = FALSE;
// $db['02']['stricton'] = FALSE;
// $db['02']['failover'] = array();
// $db['02']['save_queries'] = TRUE;

//Another database connection.
// $db['01']['hostname'] = 'localhost';
// $db['01']['username'] = 'root';
// $db['01']['password'] = '';
// $db['01']['database'] = 'db_sis_unggulan';
//
// $db['02']['hostname'] = 'localhost';
// $db['02']['username'] = 'root';
// $db['02']['password'] = '';
// $db['02']['database'] = 'db_sis_karakter';

// $db['default'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'root',
// 	'password' => '',
// 	'database' => 'db_sis',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
//
// $db['01'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'root',
// 	'password' => '',
// 	'database' => 'db_sis_unggulan',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
//
// $db['02'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'root',
// 	'password' => '',
// 	'database' => 'db_sis_karakter',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
