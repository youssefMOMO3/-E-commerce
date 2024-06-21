<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;
    protected $table='cards';
    protected $primaryKey='id';
    protected $fillable=[
        'id','name','phone','adriss','product_title',
        'qte','price','statuscmd','statuspay','dateLiv',
        'marke','size','avatar','idpro','color'
    ];

}



