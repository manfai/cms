<?php

namespace ManFai\Cms\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('cms::pages.pages');
    }
    public function detail() {
        return view('cms::pages.detail');
    }
    
    public function create() {
        return view('cms::pages.form');
    }
    public function update() {
        return view('cms::pages.form');
    }
}
