<?php

require 'Duck.php';
require 'Turkey.php';
require 'MallardDuck.php';
require 'WildTurkey.php';
require 'TurkeyAdapter.php';

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

testDuck($duck);

testDuck($turkeyAdapter);


function testDuck(Duck $duck) {
    $duck->quack();
    $duck->fly();
}