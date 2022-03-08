<?php

namespace ManFai\Cms\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('cms::pages.posts');
    }
}
