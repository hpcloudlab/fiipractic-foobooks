<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //


    function getData()
    {
        return ['data' => ['test' => 'yes']];
    }
    public function showMessage()
    {
        return "My Message";
    }

    public function showSecondMessage()
    {
        return "My Second Message";
    }
}