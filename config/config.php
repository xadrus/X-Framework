<?php

/** Configuration Variables **/


define ('DEVELOPMENT_ENVIRONMENT',true);

/** DATABASE CONFIGURATION **/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Tsenonit');
define('DB_NAME', 'x_framework');

/** APPLICATION **/
define('APPLICATION_PATH', ROOT.DS.'application'.DS);
define('APPLICATION_CONTROLLER_PATH', APPLICATION_PATH.'controller'.DS);
define('APPLICATION_MODEL_PATH', APPLICATION_PATH.'model'.DS);

/** CONFIG **/
define('CONFIG_PATH', ROOT.DS.'config'.DS);

/** LIBRARY **/
define('LIBRARY_PATH', ROOT.DS.'library'.DS);

/** PUBLIC **/
define('PUBLIC_PATH', ROOT.DS.'public'.DS);
define('PUBLIC_VIEW_PATH', PUBLIC_PATH.'view'.DS);
define('PUBLIC_CSS_PATH', PUBLIC_PATH.'css'.DS);
define('PUBLIC_JS_PATH', PUBLIC_PATH.'js'.DS);

