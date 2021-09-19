<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'product';

    public function shopPrice(){
        return $this->hasOne('App\Models\Shop');
    }

    public function shoppingBasket(){
        return $this->hasOne('App\Models\ShoppingBasket');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function wishlists() {
        return $this->belongsToMany('App\Models\User');
    }

    public function isAlbum($id) {
        $album = DB::table('album')->where('product_id', $id)->get();
        return $album;
    }
}
