<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'shop';

    public function owner(){
        return $this->belongsTo('App\Models\Product');
    }
}
