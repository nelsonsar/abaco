<?php

namespace Abaco;

class Matrix
{
    private $lines = array();

    public function __construct(array $lines)
    {
        $this->validateLines($lines);

        $this->lines = $lines;
    }

    private function validateLines(array $lines)
    {
        if (empty($lines)) {
            throw new \InvalidArgumentException('Matrix lines cannot be empty');
        }

        foreach ($lines as $line) {
            if (false === is_array($line)) {
                throw new \InvalidArgumentException('Matrix line must be an array');
            }

            $this->validateLineElements($line);
        }
    }

    private function validateLineElements(array $line)
    {
        array_walk($line, function ($element) {
            if (false === is_int($element)) {
                throw new \InvalidArgumentException('Matrix only supports integer elements');
            }
        });
    }
}
