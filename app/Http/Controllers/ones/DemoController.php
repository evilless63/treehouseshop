<?php

namespace App\Http\Controllers\ones;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Product;
use App\Models\Counteragent;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function getDemoData() {
        $categories = Category::whereNull('parent_id')->with('childs')->with('products')->get();
        return view('demo.category')->with(['categories' => $categories]);
    }

    public function registerNewCounteragent() {
        return view('demo.register');
    }

    public function policy() {
        return view('demo.policy');
    }

    public function postOrderTo1c(Request $request) {
        $client = new Client();

        try {
            $response = $client->request('POST', 'http://31.128.156.218:55315/ushp/hs/obmen/get-orders', [
                'auth' => ['Анна', '17382256Ksu@'],
                'body' => $request->product_id
            ]);
        } catch (RequestException $e) {
            Log::info($e); 
            return response('ERROR', 500);
        }

        $body = $response->getBody();
        $stringBody = (string) $body;

        return redirect()->back()->with('success', $stringBody); 
    }

    public function postCounteragentRegisterTo1c(Request $request) {

        $client = new Client();

        try {
            $response = $client->request('POST', 'http://31.128.156.218:55315/ushp/hs/obmen/register-counteragent', [
                'auth' => ['Анна', '17382256Ksu@'],
                'body' => $request
            ]);
        } catch (RequestException $e) {
            Log::info($e); 
            return response('ERROR', 500);
        }

        $body = $response->getBody()->read(4);

        return $body; 
    }

}
