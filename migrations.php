<?php

require_once './app/bootstrap.php';


$db =  new Database();


$db->applyMigrations();
