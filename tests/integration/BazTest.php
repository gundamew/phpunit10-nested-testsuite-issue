<?php

declare(strict_types=1);

namespace integration;

use PHPUnit\Framework\TestCase;

class BazTest extends TestCase {

    public function testBaz(): void {
        $baz = null;
        $this->assertNull($baz, "Baz tested.");
    }
}
