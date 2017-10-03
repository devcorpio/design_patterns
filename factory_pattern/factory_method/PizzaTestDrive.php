<?php

require 'Pizza.php';
require 'ChicagoCheesePizza.php';
require 'NYStyleCheesePizza.php';
require 'PizzaStore.php';
require 'NYStylePizzaStore.php';
require 'ChicagoStylePizzaStore.php';

$nyStore = new NYStylePizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza("cheese");


$pizza = $chicagoStore->orderPizza("cheese");