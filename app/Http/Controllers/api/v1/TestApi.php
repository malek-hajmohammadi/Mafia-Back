<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestApi extends Controller
{
    public function index()
    {
        return "Hello World!";
    }

}
