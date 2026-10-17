<?php
/**
 * Tests for LanternBeacon
 */

use PHPUnit\Framework\TestCase;
use Lanternbeacon\Lanternbeacon;

class LanternbeaconTest extends TestCase {
    private Lanternbeacon $instance;

    protected function setUp(): void {
        $this->instance = new Lanternbeacon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lanternbeacon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
