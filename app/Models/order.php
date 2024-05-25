<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class order extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ='orders';
    protected $primaryKey='id';
    protected $fillable=[
        'id','name','phone','adriss','product_title'
        ,'qte','price','statuscmd','statuspay','dateLiv'
        ,'marke','size','idpro','color'
    ];
}
