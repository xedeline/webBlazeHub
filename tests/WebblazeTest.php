<?php
/**
 * Tests for webBlaze
 */

use PHPUnit\Framework\TestCase;
use Webblaze\Webblaze;

class WebblazeTest extends TestCase {
    private Webblaze $instance;

    protected function setUp(): void {
        $this->instance = new Webblaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Webblaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
