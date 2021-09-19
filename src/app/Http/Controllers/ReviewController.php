<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Basket;
use App\Models\Shop;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller{

    public function addReview($productID, $clientID){

        if (Auth::check()) {
            if (isset($_POST['comment'])) {

                $comment = $_POST['comment'];
                $rate = $_POST['radio'];
                $date = date_create();
                $reviewID = DB::table('review')->max('id') + 1;
                //date_timestamp_get($date)
                $data = array('id' => $reviewID, "comment" => $comment, "review_date" => now(), "rating" => $rate, "client_id" => $clientID);
                DB::table('review')->insert($data);
                $data2 = array('product_id' => $productID, "review_id" => $reviewID);
                DB::table('product_review')->insert($data2);

            }
            return redirect()->route('catalog');
        }


    }


}
