<?php
/*  optimizado */
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('estadistica', 'prod', false);
sfContext::createInstance($configuration)->dispatch();