<?php
/**
 * Tests for BlockPrime
 */

use PHPUnit\Framework\TestCase;
use Blockprime\Blockprime;

class BlockprimeTest extends TestCase {
    private Blockprime $instance;

    protected function setUp(): void {
        $this->instance = new Blockprime(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockprime::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
