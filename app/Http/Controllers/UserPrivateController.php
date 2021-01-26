<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPrivateController extends Controller
{
    public function profile() {
        return view('blog.user.private.profile');
    }

    public function editProfile() {
        return view('blog.user.private.edit-profile');
    }

    public function orders() {
        return view('blog.user.private.orders');
    }

    public function subscribe() {
        return view('blog.user.private.subscribe');
    }

    public function wishlist() {
        return view('blog.user.private.wishlist');
    }
}
