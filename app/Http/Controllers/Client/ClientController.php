<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\User;
class ClientController extends Controller
{
    public function index(){
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $product = ProductModel::query()->select("*")->get();
            return view('client.dashboard',["product"=>$product,'products'=>$products,'clients'=>$clients]);
    }
    public function profile(){
        return view('user-profile.user-profile');
    }


}
