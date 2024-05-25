<?php

namespace App\Http\Controllers\comptes;

use App\Http\Controllers\Controller;
use App\Models\message;
use App\Models\order;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ComptesControler extends Controller
{
    public function index(){
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $user = auth()->user();
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $users = User::Where("status","active")->Where("email","<>",$user->email)->get();
        $clients = User::Where("role","client")->count();

        $products = ProductModel::select("*")->count();

        return view("comptes.index",["users"=>$users,"clients"=>$clients,"products"=>$products,'message'=>$message,"clients"=>$clients,'orders'=>$orders,'orderliv'=>$orderliv]);
    }

    public function delete($id){
        $users = User::findOrFail($id);
        Storage::delete('public/'.$users->avatar);
        $users->delete();
        return redirect()->route("comptes.index")->with("msg","User had Been Delete Succsfuly.");
    }

    public function create(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        return view("comptes.create",["clients"=>$clients,"products"=>$products,'message'=>$message,'orders'=>$orders,'orderliv'=>$orderliv]);
    }

    public function store(Request $request){
        $user = new User();

        $validatedData = $request->validate([
            'name' => 'required',
            'bithdate' => 'required|date',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'email' => ['email',Rule::unique('users')],
            'adriss' => 'required',
            'city' => 'required',
            'contry' => 'required',
            'pinecode' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
            'role'=>"required",
            'status'=>"required",
        ]);

        $user->name = $request->input('name');
        $user->bithdate = $request->input('bithdate');
        $user->email = $request->input('email');
        $user->adriss = $request->input('adriss');
        $user->city = $request->input('city');
        $user->contry = $request->input('contry');
        $user->pinecode = $request->input('pinecode');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        $user->status = $request->input('status');
        $user->password = Hash::make($request->input('password'));

        if ($request->hasFile('avatar')){
            
            // Get the file : img
            $file = $request->file("avatar");
            // Generate name :
            $name = "avatar_".Carbon::now()->timestamp."_".auth()->user()->name."_".auth()->user()->id.".".$file->extension();
            // Store img in public file
            Storage::putFileAs('public/avatars',$file,$name);
            // Store path in database
            $user->avatar = 'avatars/'.$name;

        }

        $user->save();

        return redirect()->route('comptes.index')->with('mss',"User had been added");


    }

    public function update(Request $request,$id){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
            $user = User::findOrFail($id);
            
            return view("comptes.update",["user"=>$user,"clients"=>$clients,"products"=>$products,'message'=>$message,'orders'=>$orders,'orderliv'=>$orderliv]);
            
    }

    public function storeup(Request $request,$id){
        $user = User::findOrfail($id);
        
        $validatedData = $request->validate([
            'name' => 'required',
            'bithdate' => 'required|date',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'email' => ['email',Rule::unique('users')->ignore($user->email, 'email')],
            'adriss' => 'required',
            'city' => 'required',
            'contry' => 'required',
            'pinecode' => 'required',
            'phone' => 'required',
            'password' => 'confirmed',
            'role'=>"required",
            'status'=>"required",
        ]);


        $user->name = $request->input('name');
        $user->bithdate = $request->input('bithdate');
        $user->email = $request->input('email');
        $user->adriss = $request->input('adriss');
        $user->city = $request->input('city');
        $user->contry = $request->input('contry');
        $user->pinecode = $request->input('pinecode');
        $user->phone = $request->input('phone');
        $user->role = $request->input('role');
        $user->status = $request->input('status');

        // // Update the password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Handle the avatar image upload
        if ($request->hasFile('avatar')){
            // dd(auth()->user()->avatar);
            // Delete image :
            Storage::delete('public/'.$user->avatar);
            // Get the file : img
            $file = $request->file("avatar");
            // Generate name :
            $name = "avatar_".Carbon::now()->timestamp."_".$user->name."_".$user->id.".".$file->extension();
            // Store img in public file
            Storage::putFileAs('public/avatars',$file,$name);
            // Store path in database
            $user->avatar = 'avatars/'.$name;

        }else if($request->input('check') === "No change"){
            $user->avatar = $user->avatar;
        }
        else{
            Storage::delete('public/'.$user->avatar);
            $user->avatar = '';
        }

        // Save the updated user data
        $user->save();

        // // Redirect or return a response as needed
        return redirect()->route("comptes.index")->with('success', 'Compte updated successfully');

    }


    public function listnoire(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $users = User::Where("status","desactive")->get();
        $clients = User::Where("role","client")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $products = ProductModel::select("*")->count();
        $products = ProductModel::select("*")->count();

        return view("comptes.index",["users"=>$users,"clients"=>$clients,"products"=>$products,'orders'=>$orders,'message'=>$message,'orderliv'=>$orderliv]);
    }


}
