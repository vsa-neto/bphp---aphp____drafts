<?php

declare(strict_types=1);

class ExampleReport
{
    use SayWorld;

     function print(): void
    {
      echo ($this->sayHello());
    }
}

