<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {
        $user = User::all();
        return  $user->toArray();
    }
}
