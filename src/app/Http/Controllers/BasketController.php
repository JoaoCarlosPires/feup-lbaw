<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Basket;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;


class BasketController extends Controller{

    public function add($id){

        $product = Product::find($id);
        $curr_price = Shop::find($product['id']);
        //$curr_price = $shop['price'];

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "type" => $product->type,
                    "price" => $product->shopPrice->price,
                    "photo" => $product->picture
                ]
            ];


            session()->put('cart', $cart);
            $this->updateTotal();
            //dd($cart);
            return redirect()->back();
        }

        if(isset($cart[$id])) {


            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            $this->updateTotal();
            return redirect()->back();
        }
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "type" => $product->type,
            "price" => $product->shopPrice->price,
            "photo" => $product->picture
        ];



        session()->put('cart', $cart);
        $this->updateTotal();

        return redirect()->back();

        //dd($cart);

    }

    public function clearBasket(){
        session()->forget('cart');
        session()->forget('totalarr');
        return redirect('homepage');
    }

    public function increaseQty($id){
        $cart = session()->get('cart');
        $cart[$id]['quantity']++;

        session()->put('cart', $cart);
        $this->updateTotal();
        return redirect()->back();
    }

    public function decreaseQty($id){
        $cart = session()->get('cart');

        if($cart[$id]['quantity']==1){
            $cart[$id]['quantity']--;
            unset($cart[$id]);
            session()->put('cart', $cart);
            $this->updateTotal();
        }
        else{
            $cart[$id]['quantity']--;
            session()->put('cart', $cart);
            $this->updateTotal();

        }
        return redirect()->back();
    }


public function getTotal(){

      $cart = session()->get('cart', $cart);
      $total = 0;
      foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
      }

      return $total;

    }

    public function updateTotal(){
      $cart = session()->get('cart');
      $total = 0;
      $shipping = 5;
      foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
      }
      if($total>25){$shipping=0;}

      $array = array('total' => $total,'shipping'=>$shipping);


      session()->put('totalarr', $array);

    }


//add order to table

    /**
     * @throws \Exception
     */
    public function createOrder(){

        $cart = session()->get('cart');
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'];
            $product_id = $item['id'];
        }
//
//        $seq = DB::table('order')->max('id') + 1;
        $num = DB::table('order')->max('num')+1;


        $transferID = DB::table('transfer')->max('reference') + 1;
        DB::table('order')->insert(['num'=>$num, 'ordered'=>now(), 'client_id'=>15]); //client_id

        $orderID = DB::table('order')->max('id');

        DB::table('transfer')->insert(['reference'=>$transferID, 'limitdate'=>now()]);
        DB::table('transferpayment')->insert(['order_id'=>$orderID, 'transfer_id'=>$transferID]);
        DB::table('shoppingitems')->insert(['order_id'=>$orderID, 'product_id'=>$product_id, 'price'=>$total]);

        return $this->clearBasket();

    }



}
