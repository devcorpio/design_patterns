<?php

$mallardDuck = new MallardDuck(new Quack(), new FlyWithWings());
$mallardDuck->performQuack(); //quack quack
$mallardDuck->performFly(); //fly!

$rubberDuck = new RubberDuck(new MuteQuack(), new FlyNoWay());
$rubberDuck->performQuack(); //is mute quack
$rubberDuck->performFly(); //no fly

//change behavior at runtime!
$rubberDuck->setFlyBehavior(new FlyWithWings());
$rubberDuck->performFly(); // I'm the first rubber duck that can fly!, I am a rubber duck angel :D