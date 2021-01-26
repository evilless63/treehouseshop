<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPublicController extends Controller
{
    public function index() {
        return view('blog.user.public.index');
    }

    public function catalog() {
        return view('blog.user.public.catalog');
    }

    public function login() {
        return view('blog.user.public.login');
    }

    public function product() {
        return view('blog.user.public.product');
    }

    public function cart() {
        return view('blog.user.public.cart');
    }

    public function blogCards() {
        return view('blog.user.public.block_cards');
    }

    public function blogPage() {
        return view('blog.user.public.blog_page');
    }
}
