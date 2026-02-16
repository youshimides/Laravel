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

       public $productsArray = [
            ['id' => 1, 'title' => 'aft', 'price' => 500, 'path' => 'after.png'],
            ['id' => 2, 'title' => 'tout', 'price' => 2500, 'path' => '2093.png'],
            ['id' => 3, 'title' => 'danger', 'price' => 1500, 'path' => 'dangerous.png'],
            ['id' => 4, 'title' => 'up', 'price' => 1500, 'path' => 'up.png'],
            ['id' => 5, 'title' => 'logo', 'price' => 200, 'path' => 'logo.jpg'],
            ['id' => 6, 'title' => '4l', 'price' => 2111, 'path' => '4l.png'],
            ['id' => 7, 'title' => 'alive', 'price' => 1500, 'path' => 'alive.png'],
            ['id' => 8, 'title' => 'upoofx', 'price' => 4500, 'path' => 'ux.jpg']

        ];



    public function showArray()
    {
        $array = $this->productsArray;
        return view('array', compact('array'));
    }
        
    public function sortArray()
    {
        $array = $this->productsArray;
        usort($array, function($a, $b) {
            return $a['price'] - $b['price'];
        });
        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->productsArray;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = $this->productsArray;
        $filtered = array_filter($array, function($item) {
            return $item['price'] > 1000;
        });
        return view('array', ['array' => $filtered]);
    }


    }
    

