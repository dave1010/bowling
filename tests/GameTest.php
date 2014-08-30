<?php

namespace Bowling;


class GameTest extends \PHPUnit_Framework_TestCase
{
    public function testGutterGame()
    {
        $game = new Game;

        for ($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }

        $this->assertEquals(0, $game->score());
    }
}
