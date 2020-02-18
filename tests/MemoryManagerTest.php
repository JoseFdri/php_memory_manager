<?php
require '../vendor/autoload.php';
require '../MemoryManager.php';

use PHPUnit\Framework\TestCase;

class MemoryManagerTest extends TestCase
{
    public function testMemoryAllocated()
    {
        $buffer = '64987987654654813546846848464554545455';
        $size = 24;
        $manager = new MemoryManager($buffer, $size);
        $manager->alloc($size);
        $memory = $manager->memory;
        $this->assertIsString($memory['buffer']);
    }

    public function testMemoryReleased()
    {
        $buffer = '64987987654654813546846848464554545455';
        $size = 24;
        $manager = new MemoryManager($buffer, $size);
        $manager->alloc($size);
        $manager->free($buffer);
        $this->assertNull($buffer);
    }
}