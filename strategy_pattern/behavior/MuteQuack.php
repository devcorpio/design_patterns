<?php

class MuteQuack implements QuackableInterface
{
    public function quack()
    {
        echo '...:(';
    }
}