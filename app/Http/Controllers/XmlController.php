<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ACFBentveld\XML\XML;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\ProductImport;
use Image;

class XMLController extends Controller
{
    public function categoryImport() {
        $notes = XML::import(asset('import/price-yandex.xml'))->get();
        // dd($notes['shop']->categories[0]);
        foreach ($notes['shop']->categories[0] as $category) {
            
            $categoryInstanse = new Category();
            $categoryInstanse->title = $category->__toString();
            if($category->hasAttribute('parentId')){
                $categoryInstanse->parent_id = $category->attribute('parentId');
            }

            if($category->hasAttribute('id')){
                $categoryInstanse->id = $category->attribute('id');
            }

            $categoryInstanse->save();

            $categoryInstanse->localizations()->create(['title' => $category->__toString()], ['lang' => 'ru']);

        };
    }

    public function productImport() {

        $notes = XML::import(asset('import/products.xml'))->get();
        dd($notes);
        $variations = [];

        foreach ($notes->row as $offer) {

            if(ProductImport::where('prod_id', $offer->product_id->__toString())->get()->count() == 0){
                $import = new ProductImport;
                $import->name = $offer->name[0];
                $import->prod_id = $offer->product_id->__toString();
                $import->save();
            }
            
            //dd($offer); 
            // if(isset($offer->param)) {
            //     if($offer->param->hasAttribute('name')) {
            //         if($offer->param->attribute('name') == "Размер") {
            //             // echo($offer->param->__toString() . "\r\n");
            //             if(!array_search(trim($offer->param->__toString()), $variations, true)) {
            //                 array_push($variations, trim($offer->param->__toString()));
            //             }
            //         } 
            //     }
            // }


            // $dir = 'uploads/single/';
            
            // $path = $offer->picture->__toString();
            // $filename = basename($path);

            // Image::make($path)->save(public_path($dir . $filename));
            
            // dd($dir . $filename);


            
            
            
            
            // $producInstance = new Product();
            // $producInstance->id = $offer->attribute('id');
            // $producInstance->title = $offer->name->__toString();

            // dd($offer);
            //var_dump($offer->name->__toString() . " > " . $offer->param->__toString());

            // $categoryInstanse = new Category();

            // $categoryInstanse->title = $category->__toString();

            // if($category->hasAttribute('parentId')){
            //     $categoryInstanse->parent_id = $category->attribute('parentId');
            // }

            // if($category->hasAttribute('id')){
            //     $categoryInstanse->id = $category->attribute('id');
            // }

            // $categoryInstanse->save();
        };

        return "all ok";
        // var_dump(array_unique($variations));
    }

    public function currencyImport() {
        // $notes = XML::import(asset('import/price-yandex.xml'))->get();
        // foreach ($notes['shop']->currencies[0] as $currency) {

        //     $currencyInstance = new Currency();
        //     if($currency->hasAttribute('id')){
        //         $currencyInstance->title = $currency->attribute('id');
        //     }

        //     if($currency->hasAttribute('id')){
        //         $currencyInstance->code = $currency->attribute('id');
        //     }

        //     if($currency->hasAttribute('rate')){
        //         $currencyInstance->value = $currency->attribute('rate');
        //     }

        //     $currencyInstance->save();
        // };
    }
}
