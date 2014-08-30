<?php

namespace Bowling;


class GameTest extends \PHPUnit_Framework_TestCase
{
    /** @var Game */
    private $game;

    public function setUp()
    {
        $this->game = new Game;
    }

    public function testGutterGame()
    {
        $this->rollMany(20, 0);
        $this->assertEquals(0, $this->game->score());
    }

    public function testAllOnes()
    {
        $this->rollMany(20, 1);
        $this->assertEquals(20, $this->game->score());
    }

    private function rollMany($n, $pins)
    {
        for ($i = 0; $i < $n; $i++) {
            $this->game->roll($pins);
        }

    }
}
