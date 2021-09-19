<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Basket';

    public function owner(){
        return $this->belongsTo('App\Models\Product');
    }


}
