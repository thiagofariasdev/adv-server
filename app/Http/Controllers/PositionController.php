<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        exec('python ' . __DIR__ . '/position.py pt_a_x pt_a_y pt_b_x pt_b_y', $output, $returned_val);
        echo var_dump($output);
        echo $returned_val;
    }
}
