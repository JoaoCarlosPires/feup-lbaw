<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Models\Transfer;
use Illuminate\Database\Query\Builder;
use DB;

use Carbon\Carbon;

class AdministrationController extends Controller
{

    public function home() {
        return redirect('admin_manage_products');
    }

    public function index() {
        $product = Product::all();
        return view('pages/admin_manage_products', compact('product'));
    }

    public function review() {
        $review = Review::all();
        return view('pages/admin_manage_ratings', compact('review'));
    }

    public function users() {
        $user = User::all();
        return view('pages/admin_manage_users', compact('user'));
    }

    public function payment() {
        $transfer = Transfer::all();
        return view('pages/admin_manage_payments', compact('transfer'));
    }

    public function updateAlbum(Request $request){
        $product_id = $request->input('id');

        if ($request->input('name')!=null) {
            DB::table('product')->where('id', $product_id)->update(['name' => $request->input('name')]);
        }

        if (strcmp($request->input('type'), "Chose type") !== 0) {
            DB::table('product')->where('id', $product_id)->update(['type' => $request->input('type')]);
        }

        if ($request->input('description')!=null) {
            DB::table('product')->where('id', $product_id)->update(['description' => $request->input('description')]);
        }

        if ($request->input('picture')!=null) {
            DB::table('product')->where('id', $product_id)->update(['picture' => $request->input('picture')]);
        }

        if ($request->input('picture')!=null) {
            DB::table('product')->where('id', $product_id)->update(['picture' => $request->input('picture')]);
        }

        if ($request->input('tag')!=null) {
            if (DB::table('tag')->where('name', $request->input('tag'))->exists()) {
                // Do nothing
            } else {
                DB::table('tag')->insert(['name' => $request->input('tag')]);
            }
            DB::table('productTag')->where('product_id', $product_id)->update(['tag_id' => $request->input('tag')]);
        }

        if ($request->input('price')!=null) {
            DB::table('shop')->where('product_id', $product_id)->update(['price' => $request->input('price')]);
        }

        if ($request->input('quantity')!=null) {
            DB::table('shop')->where('product_id', $product_id)->update(['quantity' => $request->input('quantity')]);
        }

        if ($request->input('release_date')!=null) {
            DB::table('shop')->where('product_id', $product_id)->update(['releasedate' => $request->input('release_data')]);
        }

        if ($request->input('year')!=null) {
            DB::table('album')->where('product_id', $product_id)->update(['year' => $request->input('year')]);
        }

        if ($request->input('band')!=null) {
            DB::table('album')->where('product_id', $product_id)->update(['band_artist' => $request->input('band')]);
        }

        if (strcmp($request->input('albumGenre'), "Chose type") !== 0) {
            DB::table('album')->where('product_id', $product_id)->update(['albumgenre' => $request->input('albumGenre')]);
        }
        return redirect()->back();
    }

    public function updateOther(Request $request){
        $product_id = $request->input('id');

        if ($request->input('name')!=null) {
            DB::table('product')->where('id', $product_id)->update(['name' => $request->input('name')]);
        }

        if (strcmp($request->input('type'), "Chose type") !== 0) {
            DB::table('product')->where('id', $product_id)->update(['type' => $request->input('type')]);
        }

        if ($request->input('description')!=null) {
            DB::table('product')->where('id', $product_id)->update(['description' => $request->input('description')]);
        }

        if ($request->input('picture')!=null) {
            DB::table('product')->where('id', $product_id)->update(['picture' => $request->input('picture')]);
        }

        if ($request->input('picture')!=null) {
            DB::table('product')->where('id', $product_id)->update(['picture' => $request->input('picture')]);
        }

        if ($request->input('tag')!=null) {
            if (DB::table('tag')->where('name', $request->input('tag'))->exists()) {
                // Do nothing
            } else {
                DB::table('tag')->insert(['name' => $request->input('tag')]);
            }
            DB::table('productTag')->where('product_id', $product_id)->update(['tag_id' => $request->input('tag')]);
        }

        if ($request->input('price')!=null) {
            DB::table('shop')->where('product_id', $product_id)->update(['price' => $request->input('price')]);
        }

        if ($request->input('quantity')!=null) {
            DB::table('shop')->where('product_id', $product_id)->update(['quantity' => $request->input('quantity')]);
        }

        if ($request->input('release_date')!=null) {
            DB::table('shop')->where('product_id', $product_id)->update(['releasedate' => $request->input('release_data')]);
        }

        if ($request->input('brand')!=null) {
            DB::table('other')->where('product_id', $product_id)->update(['brand' => $request->input('brand')]);
        }

        if ($request->input('category')!=null) {
            DB::table('other')->where('product_id', $product_id)->update(['category' => $request->input('category')]);
        }

        if ($request->input('model')!=null) {
            DB::table('other')->where('product_id', $product_id)->update(['model' => $request->input('model')]);
        }
        return redirect()->back();
    }

    public function deleteProduct($id){

        DB::table('album')->where('product_id', $id)->delete();
        DB::table('other')->where('product_id', $id)->delete();
        DB::table('producttag')->where('product_id', $id)->delete();
        DB::table('shop')->where('product_id', $id)->delete();
        DB::table('product_review')->where('product_id', $id)->delete();
        DB::table('shoppingbasket')->where('product_id', $id)->delete();
        DB::table('shoppingitems')->where('product_id', $id)->delete();
        DB::table('inventory')->where('product_id', $id)->delete();
        DB::table('wish_list')->where('product_id', $id)->delete();
        DB::table('product')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function deleteReview($id){

        DB::table('product_review')->where('review_id', $id)->delete();
        DB::table('review')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function deletePayment($reference){

        DB::table('transferpayment')->where('transfer_id', $reference)->delete();
        DB::table('transfer')->where('reference', $reference)->delete();
        return redirect()->back();
    }

    public function acceptPayment($reference){

        $order_id = DB::table('transferpayment')->where('transfer_id', $reference)->get()->pluck('order_id');
        DB::table('transferpayment')->where('transfer_id', $reference)->delete();
        DB::table('transfer')->where('reference', $reference)->delete();

        DB::table('order')->where('id', $order_id)->update(['shipped' => Carbon::now(), 'est_delivery_time' => Carbon::tomorrow()]);

        return redirect()->back();
    }

    public function addAlbum(Request $request) {

        if($request->input('name')==null or
            $request->input('type')==null or
            $request->input('description')==null or
            $request->input('tag')==null or
            $request->input('price')==null or
            $request->input('quantity')==null or
            $request->input('release_date')==null or
            $request->input('year')==null or
            $request->input('band')==null or
            $request->input('albumGenre')==null) {
            return redirect()->back()->with('alert', 'Please fill every space.');
        } else {

            $name = $request->input('name');
            $type = $request->input('type');
            if ($request->input('picture')!=null) {
                $picture = $request->input('picture');
            }
            $description = $request->input('description');
            $tag = $request->input('tag');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $release_date = $request->input('release_date');
            $band = $request->input('band');
            $year = $request->input('year');
            $albumGenre = $request->input('albumGenre');
            $average = 0;

            if ($request->input('picture')!=null) {
                $product_array = ['name' => $name,
                                'type' => $type,
                                'picture' => $picture,
                                'description' => $description,
                                'average' => $average];
            } else {
                $product_array = ['name' => $name,
                                'type' => $type,
                                'description' => $description,
                                'average' => $average];
            }

            $product_id = DB::table('product')->insertGetId($product_array);

            if (DB::table('tag')->where('name', $tag)->exists()) {
                // Do nothing
            } else {
                $tag_array = ['name' => $tag];
                DB::table('tag')->insert($tag_array);
            }

            $product_tag_array = ['tag_id' => $tag,
                                'product_id' => $product_id];

            $shop_array = ['price' => $price,
                        'quantity' => $quantity,
                        'releasedate' => $release_date,
                        'product_id' => $product_id];

            $album_array = ['band_artist' => $band,
                        'year' => $year,
                        'albumgenre' => $albumGenre,
                        'product_id' => $product_id];


            DB::table('producttag')->insert($product_tag_array);
            DB::table('shop')->insert($shop_array);
            DB::table('album')->insert($album_array);
        }
        return redirect('admin_manage_products');
    }

    public function addInstrument(Request $request){

        if($request->input('name')==null or
            $request->input('type')==null or
            $request->input('description')==null or
            $request->input('tag')==null or
            $request->input('price')==null or
            $request->input('quantity')==null or
            $request->input('release_date')==null or
            $request->input('brand')==null or
            $request->input('category')==null or
            $request->input('model')==null) {
            return redirect()->back()->with('alert', 'Please fill every space.');
        } else {

            $name = $request->input('name');
            $type = $request->input('type');
            if ($request->input('picture')!=null) {
                $picture = $request->input('picture');
            }
            $description = $request->input('description');
            $tag = $request->input('tag');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $release_date = $request->input('release_date');
            $brand = $request->input('brand');
            $category = $request->input('category');
            $model = $request->input('model');
            $average = 0;

            if ($request->input('picture')!=null) {
                $product_array = ['name' => $name,
                                'type' => $type,
                                'picture' => $picture,
                                'description' => $description,
                                'average' => $average];
            } else {
                $product_array = ['name' => $name,
                                'type' => $type,
                                'description' => $description,
                                'average' => $average];
            }

            $product_id = DB::table('product')->insertGetId($product_array);

            if (DB::table('tag')->where('name', $tag)->exists()) {
                // Do nothing
            } else {
                $tag_array = ['name' => $tag];
                DB::table('tag')->insert($tag_array);
            }

            $product_tag_array = ['tag_id' => $tag,
                                'product_id' => $product_id];

            $shop_array = ['price' => $price,
                        'quantity' => $quantity,
                        'releasedate' => $release_date,
                        'product_id' => $product_id];

            $other_array = ['brand' => $brand,
                        'category' => $category,
                        'model' => $model,
                        'product_id' => $product_id];

            DB::table('producttag')->insert($product_tag_array);
            DB::table('shop')->insert($shop_array);
            DB::table('other')->insert($other_array);
        }
        return redirect('admin_manage_products');
    }
}
