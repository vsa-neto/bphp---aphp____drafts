<?php

declare(strict_types=1);


class Phone
{
    public const NAME = 'phone';

    public function getName(): string
    {
       return self::NAME;
       // self возвращает значение родителя
    }
    public function getStaticName(): string
    {
       return static::NAME; 
       // static возвращает переопределенное значение потомка
    }
}

class MyPhone extends Phone
{
  public const NAME = 'my phone';
}
