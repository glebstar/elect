<?php

namespace App;

/**
 * Class Elect Класс игрока
 * @package App
 */
class Elect
{
    /**
     * Ход игрока
     *
     * @var integer
     */
    private $move = 0;

    /**
     * Все лампочки
     *
     * @var array
     */
    private $lamps = [];

    public function __construct()
    {
        for($i=1; $i<=25; $i++) {
            $this->lamps[] = [
                'id' => $i,
                'active' => false
            ];
        }
    }

    public function getLamps()
    {
        return $this->lamps;
    }

    public function getMove()
    {
        return $this->move;
    }
}
