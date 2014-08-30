<?php

namespace Bowling;


class Game
{
    private $rolls = [];

    private $currentRoll = 0;

    public function roll($pins)
    {
        $this->rolls[$this->currentRoll++] = $pins;
    }

    public function score()
    {
        $score = 0;
        $i = 0;

        for ($frame = 0; $frame < 10; $frame++) {
            $score += $this->rolls[$i];
            $score += $this->rolls[$i + 1];
            $i += 2;
        }

        return $score;
    }
}
