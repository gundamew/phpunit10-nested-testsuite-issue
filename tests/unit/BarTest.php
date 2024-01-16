<?php

declare(strict_types=1);

namespace unit;

use PHPUnit\Framework\TestCase;

class BarTest extends TestCase {

    public function testBar(): void {
        $bar = null;
        $this->assertNull($bar, "Bar tested.");
    }
}
