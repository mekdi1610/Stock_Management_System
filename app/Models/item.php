<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'detail', 'catagory', 'code', 'model', 'purchase_price', 'sale_price'];
}
