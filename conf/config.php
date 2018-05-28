<?php

require_once 'const.php';
require_once SMARTY_DIR.'Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir(TPL_DIR)
       ->setCompileDir(COM_DIR)
       ->setCacheDir(CACHE_DIR);
$smarty->caching = true;
$smarty->cache_lifetime = CACHE_TIME;
