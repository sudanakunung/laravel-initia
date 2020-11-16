<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Inertia\Inertia;

class Welcome extends Controller
{
    public function index()
    {

        return Inertia::render('welcome');
    }
}