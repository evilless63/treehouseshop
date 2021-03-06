<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Auth;
use View;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;

class UserPrivateController extends UserBaseController
{

    private $productRepository;
    public $mainmenu_categories;
    public $wishlist;


    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
        $this->productRepository = app(ProductRepository::class);
        $this->categoryRepository = app(CategoryRepository::class);
        $this->mainmenu_categories = Category::where('in_header', '1')->get();
        $this->categories_menu = $this->categoryRepository->buildMenu(Category::all());

        if(!Auth::guest()) {
            $this->wishlist = Auth::user()->wishlist_products();
        } else {
            $this->wishlist = false;
        }

        View::share('mainmenu_categories', $this->mainmenu_categories);
        View::share('categories_menu', $this->categories_menu);
        View::share('wishlist', $this->wishlist);
    }

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

    public function addToWishList($id) {
        $product = $this->productRepository->getInfoProduct($id);
        try {
            Auth::user()->attach($product);
        } catch (\Exception $e) {

        }
    }

    public function removeFromWishList($id) {
        $product = $this->productRepository->getInfoProduct($id);
        try {
            Auth::user()->detach($product);
        } catch (\Exception $e) {

        }
    }
}
