<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Album;
use Request;

use DB;

use mysql_xdevapi\Table;

class CatalogController extends Controller
{

    public function home()
    {
        return redirect('catalog');
    }

    public function index()
    {
        $product = Product::all();
        $categories = Category::all();

        return view('pages/catalog')->with(['product' => $product,
            'categories' => $categories,
        ]);
    }

    public function list()
    {
//        return Category::all();
        $product = Product::all();
        $categories = Category::all();
        return view('pages/catalog')->with(['product' => $product,
            'categories' => $categories,
        ]);
    }

    public function find()
    {
        $categories = Category::all();

        if (isset($_GET['submit'])) {

            $date = Request::get('date');
            $name = Request::get('name');
            $productType = $_GET['type'];

            $data = DB::table('product');
            if($productType != ''){
                $data = $data->where('product.type', $productType);
            }

            if($name != ''){ //select from album
                $data = $data->where('album.band_artist', $name)
                    ->join('album', 'product.id', '=', 'album.product_id');
            }

            if($date != ''){
                $data = $data->where('shop.releasedate', $date);
            }

            $average = $_GET['star']; //DB SEED PROBLEM
            if($average != ''){
                $data = $data->where('product.average', $average)
                ->join('shop', 'product.id', '=', 'shop.product_id');
            }


//            $price = $_GET['price'];
//            if($price != ''){
//                $data = $data->where('shop.price', $price)
//                    ->join('shop', 'product.id', '=', 'shop.product_id');
//            }

            $brand = $_GET['brand'];
            if($brand != ''){
                $data = $data->where('other.brand', $brand)
                    ->join('other', 'product.id', '=', 'other.product_id');
            }

            if (($date)=='' and ($productType)=='' and ($name)=='' and ($average)=='' and $brand==''){
                $product = Product::all();
                return view('pages/catalog')->with(['product' => $product, 'categories' => $categories]);

            }else{
                $data = $data->get();
                return view('pages/catalog')->with(['product' => $data, 'categories' => $categories]);
            }
        }
    }

    public function proCat(Request $request)
    {
        $cat = $request->cat;
        $data = DB::table('product')->where('product.type', $cat)->get();
        return view('pages/catalog', ['product' => $data]);
    }

    public function search(\Illuminate\Http\Request $request){
        $categories = Category::all();
        $searchData = $request->searchData;

        $items = array();
        $products = Product::all();
        $albums = Album::all();

        $search = $request->input('searchData');
        $search = strtolower($search);

        foreach ($products as $item) {
          if(str_contains(strtolower($item->name), $search)){
            array_push($items, $item);
          }
        }

        foreach ($albums as $album) {
          if(str_contains(strtolower($album->band_artist), $search) or str_contains(strtolower($album->year), $search) or str_contains(strtolower($album->albumgenre), $search)){
            $temp = Product::find($album->product_id);
            array_push($items, $temp);
          }

        }


        //dd(count($items);




        return view('pages/catalog', ['product' => $items, 'categories' => $categories]);
//        return ['product' => $data];
    }

}
