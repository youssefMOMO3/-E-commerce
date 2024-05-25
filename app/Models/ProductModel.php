<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ="product";
    protected $fillable =['name','avatar','size','price','Qte','description','marke'];
}
