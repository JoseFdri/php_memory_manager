<?php

interface IMemory {
    /**
     * allocate memory
     *
     * @param int $size
     * @return string
     */
    public function alloc(int $size): string;

    /**
     * free up allocated memory
     * @param string $char
     * @return void
     */
    public function free(string &$char): void;
}