<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elect;

class ElectController extends Controller
{
    public function newGame(Request $request)
    {
        $elect = new Elect();
        $request->session()->put($request->_token, $elect);

        return response()->json([
            'elect' => [
                'lamps' => $elect->getLamps(),
                'move'  => $elect->getMove()
            ]
        ]);
    }

    public function newMove(Request $request)
    {
        $elect = $request->session()->get($request->_token);
        $elect->newMove($request->id);

        $request->session()->put($request->_token, $elect);

        return response()->json([
            'elect' => [
                'lamps' => $elect->getLamps(),
                'move'  => $elect->getMove()
            ]
        ]);
    }
}
