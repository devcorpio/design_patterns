<?php

require 'Light.php';
require 'Command.php';
require 'LightOnCommand.php';
require 'SimpleRemoteControl.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$lightOn = new LightOnCommand($light);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();