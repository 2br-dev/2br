<?php

declare(strict_types = 1);

error_reporting(E_ALL | E_STRICT);

define('LOCAL_SERVER', in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')));
define('DEV_MODE', LOCAL_SERVER);
define('EDITOR_MODE', DEV_MODE);

define('CAPTCHA_URL', 'captcha');
define('CAPTCHA_KEYSTRING', 'captcha_keystring');

define('CATALOG_ROOT', 'catalog');

ini_set('display_errors', strval(intval(DEV_MODE)));
ini_set('display_startup_errors', strval(intval(DEV_MODE)));
ini_set('error_reporting', '32767');

ini_set('session.auto_start', '0');
ini_set('session.use_cookies', '1');
ini_set('session.use_trans_sid', '0');
ini_set('session.use_only_cookies', '1');
ini_set('session.gc_maxlifetime', '2678400');
ini_set('session.cookie_lifetime', '2678400');

define('DS', DIRECTORY_SEPARATOR);

define('IS_SPA', false);
define('ADMIN_DIR', 'cp');
define('TEMPLATING', 'Smarty'); // PHP | Smarty | Fenom | Twig | Html
define('SITE_THEME', 'base');
define('GZIP_COMPRESS', true);
define('CSRF_PROTECTION', true);
define('DEFAULT_LANGUAGE', 'ru');
define('SEARCH_VAR', 'q');

// PATH
define('PATH_ROOT', __DIR__);
define('PATH_WEBROOT', 'public_html');
define('PATH_PROTECTED', 'protected');

define('PATH_SYSTEM', PATH_ROOT);
define('PATH_SECURE', PATH_SYSTEM.DS.PATH_PROTECTED);
define('PATH_KERNEL', PATH_SECURE.DS.'app');

// Kernel path
define('PATH_CORE', PATH_KERNEL.DS.'core');
define('PATH_VENDORS', PATH_KERNEL.DS.'vendors');
define('PATH_EXTENSIONS', PATH_KERNEL.DS.'extensions');

define('PATH_RUNTIME', PATH_SECURE.DS.'runtime');
define('PATH_MODULE', PATH_SECURE.DS.'modules');
define('PATH_MODULE_TEMPLATE', 'tpl');
define('PATH_THEMES', PATH_SECURE.DS.'themes');
define('PATH_CACHE', PATH_RUNTIME.DS.'cache');

define('PATH_ADMIN', PATH_ROOT.DS.ADMIN_DIR);
define('PATH_PUBLIC', PATH_ROOT.DS.'apps');
define('PATH_STATIC', PATH_ROOT.DS.'static'.'/'.'cache');
define('PATH_EXCHANGE', PATH_ROOT.DS.'exchange');
define('PATH_RESOURCE', PATH_CORE.DS.'resource');

// API
define('TRANSLATE_API', 'trnsl.1.1.20150906T141528Z.634470d03ea1e762.2bad0e1f563db5cf22a91b87182866b13d349941');

require PATH_SECURE.'/'.'config'.'/'.'config.inc.php';
