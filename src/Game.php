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
        $frameIndex = 0;

        for ($frame = 0; $frame < 10; $frame++) {
            $score += $this->rolls[$frameIndex];
            $score += $this->rolls[$frameIndex + 1];

            if ($this->isSpare($frameIndex)) {
                $score += $this->rolls[$frameIndex + 2];
            }

            $frameIndex += 2;
        }

        return $score;
    }

    /**
     * @param $frameIndex
     * @return bool
     */
    protected function isSpare($frameIndex)
    {
        return $this->rolls[$frameIndex] + $this->rolls[$frameIndex + 1] === 10;
    }

}
