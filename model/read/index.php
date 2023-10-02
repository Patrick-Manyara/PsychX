<?php
define('READ_PATH', realpath(dirname(__FILE__)) . '/');
define('READ_COUNT_PATH', realpath(dirname(__FILE__)) . '/count/');

require_once READ_PATH . 'admin.php';
require_once READ_PATH . 'image.php';
require_once READ_PATH . 'banner.php';
require_once READ_PATH . 'inquiry.php';
require_once READ_PATH . 'metadata.php';
require_once READ_PATH . 'error_check.php';
require_once READ_PATH . 'id_generator.php';
require_once READ_PATH . 'dates.php';
require_once READ_PATH . 'note.php';
require_once READ_PATH . 'user.php';
require_once READ_PATH . 'post.php';
require_once READ_PATH . 'category.php';
require_once READ_PATH . 'simple.php';
require_once READ_PATH . 'session.php';
require_once READ_PATH . 'therapist.php';
require_once READ_PATH . 'corporate.php';

require_once READ_COUNT_PATH . 'inquiry.php';

