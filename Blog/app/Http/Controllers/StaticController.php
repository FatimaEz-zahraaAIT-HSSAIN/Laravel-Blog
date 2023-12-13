<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('home');
    }
    
    public function auth() {
        return view('auth');
    }

    public function articles() {
        return view('articles');
    }

    public function createArticle() {
        return view('create');
    }
}
