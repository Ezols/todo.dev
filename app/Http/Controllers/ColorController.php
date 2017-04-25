<?php

namespace App\Http\Controllers;

class ColorController
{

    public function Color()
    {
        $xCount = request()->get('x');
        $yCount = request()->get('y');
        $data['y'] = $yCount;
        $data['x'] = $xCount;

        $colorGrid = [];

        for($y = 0; $y < $yCount; $y++)
        {
            $colorGrid[$y] = $this->generateColorList($xCount);
        }

        $data['colorGrid'] = $colorGrid;


        return view('Color', $data);
    }

    private function randomColor()
    {
        return [rand(0, 255), rand(0, 255), rand(0, 255)];
    }

    private function generateColorList($size)
    {
        $colors = [];

        for ($i = 0; $i < $size; $i++) {
            $colors[$i] = $this->randomColor();

        }
        return $colors;
    }
}
