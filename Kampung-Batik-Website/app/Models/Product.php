<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tb_product';
    protected $guarded = ['id'];

    public function storedData($data){
        $results = Product::create($data);
        return $results;
    }

    public function removeByCondition($condition){
        $results = Product::where($condition)->delete();
        return $results;
    }
}

