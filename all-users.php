<?php
include 'loader.php';




$usuarios = $db->buscarDatos('users');


require 'views/all-users-view.php';