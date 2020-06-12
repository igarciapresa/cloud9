<?php

require ('../classes/autoload.php');

use izv\http\Session;
use izv\http\Url;

$session = Session::getInstance();
$session->login(true);
Url::redirect('..?op=login&resultado=ok');