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

    private function rollMany($n, $pins)
    {
        for ($i = 0; $i < $n; $i++) {
            $this->game->roll($pins);
        }

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

    public function testOneSpare()
    {
        $this->rollSpare();
        $this->game->roll(3);
        $this->rollMany(17, 0);
        $this->assertEquals(16, $this->game->score());
    }

    protected function rollSpare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
    }
}
