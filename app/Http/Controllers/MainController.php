<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class MainController extends Controller
{
    public function index()
    {
        $groups = Group::get();
        return view('index', ['groups' => $groups]);
    }
}
