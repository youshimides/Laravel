<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public int $a = 1;
    public int $b = 2;

    public function show1()
    {
        $a = $this ->a;
        $b = $this->b;
        $products = ['шкаф','стул','стол','кровать','диван'];
        return view('second', compact('a','b','products'));
    }

    public function showIndex()
    {
        return view('home');
    }
    
    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'aft', 'price' => 500, 'path' => 'after.png'],
            ['id' => 2, 'title' => 'tout', 'price' => 1500, 'path' => '2093.png'],
            ['id' => 3, 'title' => 'danger', 'price' => 1500, 'path' => 'dangerous.png'],
            ['id' => 4, 'title' => 'up', 'price' => 1500, 'path' => 'up.png']

        ];

        return view('array', compact('array'));
    }
}
