<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use View;
use Auth;
use App\Repositories\Admin\ProductRepository;
use App\Repositories\Admin\CategoryRepository;

use Phpfastcache\Helper\Psr16Adapter;

class UserPublicController extends UserBaseController
{


    private $productRepository;
    public $mainmenu_categories;
    public $categories_menu;

    public function __construct()
    {
        parent::__construct();
        $this->productRepository = app(ProductRepository::class);
        $this->categoryRepository = app(CategoryRepository::class);
        $this->mainmenu_categories = Category::where('in_header', '1')->get();
        $this->categories_menu = $this->categoryRepository->buildMenu(Category::all());
        View::share('mainmenu_categories', $this->mainmenu_categories);
        View::share('categories_menu', $this->categories_menu);
    }

    public function index() {

        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'iraemelianova', 'alena210813', new Psr16Adapter('Files'));
        $instagram->setUserAgent('User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0');
        $instagram->login(false, true);
        $instagram->saveSession();
        $instagram_posts = $instagram->getMedias('dom_na_dereve', 10);

        $new_products = Product::where('status','1')->where('is_new', '1')->get();
        $bestseller_products = Product::where('status','1')->where('hit', '1')->get();
        return view('blog.user.public.index', compact('new_products', 'bestseller_products', 'instagram_posts'));
    }

    public function catalog($id = null) {

        $wishlist = false;

        $category = Category::find($id);
        if($category <> null) {
            $category_name = $category->title;
        } else {
            $category_name = "Весь ассортимент";
        }

        $all_categories = Category::all();
        if(!$id) {
            $products_by_category = $this->productRepository->getProductsByCategoryId(1);
        } else {
            $products_by_category = $this->productRepository->getProductsByCategoryId($id);
        }

        $recently_viewed_ids = session()->get('recently_viewed_ids');
        if(!$recently_viewed_ids) {
            $recently_viewed_ids = [];           
        } 

        array_push($recently_viewed_ids, $id);
        session()->put('recently_viewed_ids', $recently_viewed_ids);     
        $recently_viewed_products = $this->productRepository->getProductsByIds($recently_viewed_ids);

        return view('blog.user.public.catalog', compact('all_categories', 'wishlist', 'products_by_category', 'recently_viewed_products', 'category_name'));
    }

    public function login() {
        return view('blog.user.public.login');
    }

    public function product($id) {


        // if(!Auth::guest()) {
        //     $wishlist = Auth::user()->wishlists();
        // } else {
            $wishlist = false;
        // }

        $related_products = $this->productRepository->getRelatedProducts($id);
        $images = $this->productRepository->getGallery($id);
        $product = Product::find($id);
                
        $recently_viewed_ids = session()->get('recently_viewed_ids');
        if(!$recently_viewed_ids) {
            $recently_viewed_ids = [];           
        } 

        array_push($recently_viewed_ids, $id);
        session()->put('recently_viewed_ids', $recently_viewed_ids);     
        $recently_viewed_products = $this->productRepository->getProductsByIds($recently_viewed_ids);

        return view('blog.user.public.product', compact('wishlist', 'related_products', 'images', 'product', 'recently_viewed_products'));

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
