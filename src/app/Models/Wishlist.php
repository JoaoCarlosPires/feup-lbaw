<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wish_list';

    protected $hidden = [
        'client_id', 'product_id',
    ];

    public function store(Product $product_id){}

}
