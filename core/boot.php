<?php
session_start();
define('BASE_URL', 'http://localhost/doAn');

require_once 'auth.php';
require_once 'product_db.php';
require_once 'function.php';
require_once 'category_db.php';
require_once 'order_detail_db.php';
require_once 'order.php';