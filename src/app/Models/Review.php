<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'review';

    public function owner(){
        return $this->belongsTo('App\Models\Product');
    }

    public function getUsername($id) {
        $user_id = DB::table('review')->where('id', $id)->get()->pluck('client_id');
        $username = DB::table('user')->where('id', $user_id)->get()->pluck('username');
        return $username[0];
    }

    public function getProductName($id) {
        $product_id = DB::table('product_review')->where('review_id', $id)->get()->pluck('product_id');
        $name = DB::table('product')->where('id', $product_id)->get()->pluck('name');
        return $name[0];
    }

    public function getPicture($id) {
        $product_id = DB::table('product_review')->where('review_id', $id)->get()->pluck('product_id');
        $picture = DB::table('product')->where('id', $product_id)->get()->pluck('picture');
        return $picture[0];
    }

    public function getComment($id) {
        $comment = DB::table('review')->where('id', $id)->get()->pluck('comment');
        return $comment[0];
    }
}

