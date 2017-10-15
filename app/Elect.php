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

    public function newMove($id)
    {
        if(!isset($this->lamps[$id - 1]) || $this->lamps[$id - 1]['active']) {
            return false;
        }

        $this->lamps[$id - 1]['active'] = true;

        // переключить близлежащие лампочки
        $near = [
            -1, -6, -5, -4, 1, 6, 5, 4
        ];

        if (in_array($id, [1, 6, 11, 16, 21])) {
            $near = [-5, -4, 1, 6, 5];
        }

        if (in_array($id, [5, 10, 15, 20, 25])) {
            $near = [-5, -6, -1, 4, 5];
        }

        foreach ($near as $n) {
            $idLamp = $id - 1 + $n;

            if (isset($this->lamps[$idLamp])) {
                $this->lamps[$idLamp]['active'] = $this->lamps[$idLamp]['active'] ? false : true;
            }
        }

        // на каждом ходу с вероятностью 1 к 25 одна лампочка гаснет
        // все горящие лампочки
        $activeLamps = [];
        for($i=0; $i<25; $i++) {
            if ($this->lamps[$i]['active']) {
                $activeLamps[] = $i;
            }
        }

        if (18 == rand(1, 25)) {
            // потушить одну случайную лампу
            $this->lamps[$activeLamps[ rand(1, count($activeLamps)-1) ]]['active'] = false;
        }

        $this->move++;
    }
}
