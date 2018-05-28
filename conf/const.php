<?php

define('DS', DIRECTORY_SEPARATOR);
defined('WEB_DIR')    	or define('WEB_DIR', dirname(__DIR__).DS);
defined('SMARTY_DIR') 	or define('SMARTY_DIR', WEB_DIR.'vendor'.DS.'smarty_3131'.DS);
defined('TPL_DIR') 		or define('TPL_DIR', WEB_DIR.'templates'.DS);
defined('COM_DIR') 		or define('COM_DIR', WEB_DIR.'template_c'.DS);
defined('CACHE_DIR') 	or define('CACHE_DIR', WEB_DIR.'cache'.DS);
defined('CACHE_TIME') 	or define('CACHE_TIME', 300);

