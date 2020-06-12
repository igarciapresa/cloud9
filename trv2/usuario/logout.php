<?php

require ('../classes/autoload.php');

use izv\http\Session;
use izv\http\Url;

$session = Session::getInstance();
$session->logout();
Url::redirect('..?op=logout&resultado=ok');