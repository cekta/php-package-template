<?php

declare(strict_types=1);

namespace App\Test;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testMain(): void
    {
        $this->assertSame(0, (new Example())->main());
    }
}
