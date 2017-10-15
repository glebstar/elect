<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Elect;

class ElectTest extends TestCase
{
    /**
     * A new game test.
     *
     * @return void
     */
    public function testNewGame()
    {
        $elect = new Elect();
        $this->assertTrue(0 == $elect->getMove());
        $this->assertFalse($elect->getIsWin());

        return $elect;
    }

    /**
     * @param $elect
     * @depends testNewGame
     */
    public function testMoves($elect)
    {
        $elect->newMove(1);
        $this->assertTrue(1 == $elect->getMove());

        $elect->newMove(20);
        $this->assertTrue(2 == $elect->getMove());
    }
}
