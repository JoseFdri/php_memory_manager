<?php
require 'IMemory.php';

class MemoryManager implements IMemory {

    public $buffer;
    public $numBytes;
    public $memory;

    /**
     * MemoryManager constructor.
     * @param string $buffer
     * @param int $numBytes
     */
    public function __construct(string &$buffer, int $numBytes)
    {
        $this->buffer = $buffer;
        $this->numBytes = $numBytes;
    }

    /**
     * {@inheritDoc}
     */
    public function alloc(int $size): string
    {
        $this->memory = [
            'buffer' => $this->buffer,
            'size' => $size
        ];
        return $this->buffer;
    }

    /**
     * {@inheritDoc}
     */
    public function free(string &$buffer): void
    {
        $buffer = null;
        $this->memory = [];
    }
}