<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Captcha;
use App\Http\Controllers\Controller;

class HelperController extends Controller
{
    public function refereshCapcha() {
        return Captcha::img('flat');
    }
}
