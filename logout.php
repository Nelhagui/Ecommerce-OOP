<?php
require 'loader.php';
require 'helpers.php';

$auth->logout(); // TERMINO LA SESIÓN CON LA FUNCIÓN 'logout()' UBICADA EN LA CLASE 'AUTH.PHP'
redirect('index.php');