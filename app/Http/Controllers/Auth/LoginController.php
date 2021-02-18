<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;


use App\Models\Admin\Product;
use App\Models\Admin\Category;
use View;
use App\Repositories\Admin\ProductRepository;
use App\Repositories\Admin\CategoryRepository;


class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->productRepository = app(ProductRepository::class);
        $this->categoryRepository = app(CategoryRepository::class);
        $this->mainmenu_categories = Category::where('in_header', '1')->get();
        $this->categories_menu = $this->categoryRepository->buildMenu(Category::all());
        View::share('mainmenu_categories', $this->mainmenu_categories);
        View::share('categories_menu', $this->categories_menu);
    }




}




