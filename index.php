<?php

include_once './includes/AirSystem.php';
include_once './includes/LightSystem.php';
include_once './includes/SoundSystem.php';
include_once './SmartHomeSystem.php';

$smartObj = new  SmartHomeSystem(new LightSystem(), new SoundSystem(), new AirSystem());
$smartObj->setWorkoutMode();
$smartObj->turnOff();
$smartObj->setPartyMode();
$smartObj->setRestMode();
$smartObj->turnOff();

?>