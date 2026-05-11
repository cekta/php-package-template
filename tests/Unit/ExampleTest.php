<?php

declare(strict_types=1);

namespace App\Test\Unit;

use App\Example;
use Testo\Assert;
use Testo\Test;

final class ExampleTest
{
    #[Test]
    public function mainReturnSuccess(): void
    {
        // Arrange
        $example = new Example();

        // Act
        $result = $example->main();

        // Assert
        Assert::same($result, 0);
    }
}
