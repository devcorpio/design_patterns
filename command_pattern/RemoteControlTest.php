<?php

require 'Command.php';
require 'Light.php';
require 'GarageDoor.php';
require 'LightOnCommand.php';
require 'GarageDoorCommand.php';
require 'SimpleRemoteControl.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$lightOn = new LightOnCommand($light);
$garageDoor = new GarageDoor();
$garageDoorOpen = new GarageDoorOpenCommand($garageDoor);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();

$remote->setCommand($garageDoorOpen);
$remote->buttonWasPressed();