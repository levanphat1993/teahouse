<?php
// use an autoloader!
require 'libs/bootstrap.php';
require 'libs/controller.php';
require 'libs/model.php';
require 'libs/view.php';

//library
require 'libs/database.php';
require 'libs/session.php';

//
require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap();
