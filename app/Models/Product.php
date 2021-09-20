<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['mname', 'memail', 'mphone', 'mdepertment', 'gender', 'deleted_at']; //database table field name

    public static function saveProductInfo($request){
        Product::create($request->all());
    }
}