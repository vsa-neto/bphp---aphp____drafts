<?php

declare(strict_types=1);

class Person
{
    public function __set($name, $value)
    {
        echo "Мы вызвали __set для '$name' с входными данными: $value".PHP_EOL;
    }

    public function __get($name)
    {
          echo "Мы вызвали __get для '$name'".PHP_EOL;
    }

    public function __call($name, $arguments)
    {
          echo "Мы вызвали __call для '$name' с входными данными: ".implode(', ', $arguments).PHP_EOL;
    }

        public static function __callStatic($name, $arguments)
    {
          echo "Мы вызвали __callStatic для '$name' с входными данными: ".implode(', ', $arguments).PHP_EOL;
    }

}