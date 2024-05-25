<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $table ='messages';
    protected $primaryKey='id';
    protected $fillable =[
        'id','name','email','sujet','description'
    ];
}
