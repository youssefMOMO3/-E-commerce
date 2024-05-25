<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\card ;
use App\Models\message;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Http\Requests\Product\productrequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Schema\Schema;


class productController extends Controller
{

    public function index()
    {
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $data=ProductModel::select("*")->get();
        return view('Product.indexproduct',['data'=>$data,"clients"=>$clients,"products"=>$products,'message'=>$message,'orders'=>$orders,'orderliv'=>$orderliv]);

    }


    public function create()
    {
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        return view('Product.createproduct',["clients"=>$clients,"products"=>$products,'message'=>$message,'orderliv'=>$orderliv,'orders'=>$orders]);
    }

    public function store(productrequest $request)
    {

        $validate=$request->validated();
        if($request->has('avatar')){
        $image=$request->avatar;
        $extention=strtolower($image->extension());
        $filename=time().rand(1,10000).".".$extention;
        // $image->getClientOrignialName=$filename;
        $image->move("images/product",$filename);
        $validate['avatar']=$filename;
        }
        $model = ProductModel::query()->create($validate);

        return redirect(route('Produits.index'));
    }

    public function display(string $id)
    {
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $products = ProductModel::select("*")->count();
        $clients = User::Where("role","client")->count();
      $data=ProductModel::select("*")->findOrFail($id);
      return view('Product.detaileproduct',['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'products'=>$products,'clients'=>$clients]);
    }


    public function edit(string $id)
    {
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $products = ProductModel::select("*")->count();
        $clients = User::Where("role","client")->count();
        $data=ProductModel::select('*')->findOrFail($id);
        return view("Product.editproduct",['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'products'=>$products,'clients'=>$clients]);
    }


    public function update(productrequest $request, string $id)
    {
        $model = ProductModel::query()->findOrFail($id);
        $validated = $request->validated();
        if($request->has('avatar')){
        $image=$request->avatar;
        $extention=strtolower($image->extension());
        $filename=time().rand(1,10000).".".$extention;
     // $image->getClientOrignialName=$filename;
        $image->move("images/product",$filename);
        $validated['avatar']=$filename;
        }
        $model->update($validated);
            return redirect(route('Produits.index'));
    }
    public function softDelet()
    {
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $data=ProductModel::onlyTrashed()->select("*")->get();
        return view('Product.archiveproduct',['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
    }


    public function destroy(string $id)
    {
        ProductModel::query()->findOrFail($id)->delete();

    return redirect(route('Produits.index'));
    }

    public function rolleback(string $id)
    {ProductModel::query()->withTrashed()->findOrFail($id)->restore();

    return redirect(route('Produits.index'));
    }


        // force delete
    public function Forcedestroy(string $id)
    {
        ProductModel::query()->withTrashed()->findOrFail($id)->ForceDelete();

    return redirect(route('Produits.index'));
    }


    //data of admin dashboard
    public function countdata(){
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $product =ProductModel::query()->select('id')->count();
        $clients =User::query()->select('id')->Where('role','=','client')->orwhere('status','=','active')->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        return view('layout-Admin.Sale_revenue',['product'=>$product,
            'orders'=>$orders,
            'clients'=>$clients,
            'orderliv'=>$orderliv
        ]);
    }
}