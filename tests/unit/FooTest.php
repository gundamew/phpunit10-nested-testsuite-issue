<?php

declare(strict_types=1);

namespace unit;

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase {

    public function testFoo(): void {
        $foo = null;
        $this->assertNull($foo, "Foo tested.");
    }
}
