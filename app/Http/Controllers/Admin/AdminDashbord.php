<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\message;
use App\Models\order;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AdminDashbord extends Controller
{
    public function index(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        // dd($clients);
        // dd($products);
        return view("Admin.main",["clients"=>$clients,"message"=>$message,"products"=>$products,'orderliv'=>$orderliv,'orders'=>$orders]);

    }

    public function profile(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        return view('user-profile.user-profile',['message'=>$message]);
    }

    public function edite(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        return view("user-profile.edite-profile",['message'=>$message]);
    }

    public function store(Request $request)
    {
        // dd($request->input('check'));
        // dd($request->file('avatar'));
        // dd(Auth::user()->id);
        // dd($user = User::findOrFail(Auth::user()->id));
        // Get the authenticated user
        $user = auth()->user();
        // // Validate the form data
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
        ]);



        // // Update the user's data
        $user->name = $request->input('name');
        $user->bithdate = $request->input('bithdate');
        $user->email = $request->input('email');
        $user->adriss = $request->input('adriss');
        $user->city = $request->input('city');
        $user->contry = $request->input('contry');
        $user->pinecode = $request->input('pinecode');
        $user->phone = $request->input('phone');

        // // Update the password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Handle the avatar image upload
        if ($request->hasFile('avatar')){
            // dd(auth()->user()->avatar);
            // Delete image :
            Storage::delete('public/'.auth()->user()->avatar);
            // Get the file : img
            $file = $request->file("avatar");
            // Generate name :
            $name = "avatar_".Carbon::now()->timestamp."_".auth()->user()->name."_".auth()->user()->id.".".$file->extension();
            // Store img in public file
            Storage::putFileAs('public/avatars',$file,$name);
            // Store path in database
            $user->avatar = 'avatars/'.$name;

        }else if($request->input('check') === "No change"){
            $user->avatar = auth()->user()->avatar;
        }
        else{
            Storage::delete('public/'.auth()->user()->avatar);
            $user->avatar = '';
        }

        // Save the updated user data
        $user->save();

        // // Redirect or return a response as needed
        return redirect()->route("admin.profile")->with('success', 'Profile updated successfully');
    }

    //data of client
    public function listclient(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $client=User::query()->select("*")->where('role','=','client')->Where('status','=','active')->paginate(5);
        return view('client.listC',['client'=>$client,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
    }
    public function serchclinet(Request $request)
    {
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients=User::query()->select("*")->where('role','=','client')->Where('status','=','active')->paginate(5);
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $search = $request->search;
        $client = User::query()
            ->where('status','=','active')
            ->where('role','=','client')
            ->where('name', "like", "%{$search}%")
            ->orWhere('phone', 'like', "%{$search}%")
            ->orWhere('adriss', 'like', "%{$search}%")
            ->orderby('id', 'ASC')->paginate(2);
        if ($client) {
            return view('client.listC', ['client' => $client,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
        }
    }

    // ajouter list noir des client
    public function listnoir($id){
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients=User::query()->select("*")->where('role','=','client')->Where('status','=','active')->paginate(5);
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $client = User::query()->select("*")->where('id',$id);
        if($client->status ='active'){
            $client->update(['status'=>'desactive']);
            return redirect(route('admin.list'));
        }
    }

    //list noir des client
    public function listnC(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $client=User::query()->select("*")->where('role','=','client')->Where('status','=','desactive')->paginate(5);
        return view('client.listnc',['client'=>$client,'message'=>$message,'orderliv'=>$orderliv,'orders'=>$orders,'clients'=>$clients,'products'=>$products]);
    }

    //recherche client list noir
    public function clientlistnoir(Request $request){
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $clients=User::query()->select("*")->where('role','=','client')->Where('status','=','active')->paginate(5);
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $search = $request->search;
        $client = User::query()
            ->where('role','=','client')
            ->where('status','=','desactive')
            ->where('name', "like", "%{$search}%")
            ->orWhere('phone', 'like', "%{$search}%")
            ->orWhere('adriss', 'like', "%{$search}%")

            ->orderby('id', 'ASC')->paginate(2);
        if ($client) {
            return view('client.listnc', ['client' => $client,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
        }
    }


    //ajouer a la list des client
    public function listC($id){
        $client = User::query()->select("*")->where('id',$id);
        if($client->status ='desactive'){
            $client->update(['status'=>'active']);
            return redirect(route('admin.list'));
        }
    }

    //get message
    public  function getmessage(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        return view('admin.main',['message'=>$message]);
    }

    public function toutmessage(){
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $messages = message::query()->select()->orderBy('created_at','desc')->get();
        return view('message.message',['message'=>$messages,
            'products'=>$products,
            'orderliv'=>$orderliv,
            'orders'=>$orders,
            'clients'=>$clients
        ]);
    }

        public function clientDetails($id)
        {
            $message = message::query()->select()->orderBy('created_at', 'desc')->get();
            // Retrieve user details
            $user = User::findOrFail($id);
            
            // Retrieve both pending and delivered orders
            $orders = Order::where('name', $user->id)->where('statuscmd', '=', 'En attente')->get();
            $orderliv = Order::where('name', $user->id)->where('statuscmd', '=', 'livree')->get();
            
            // Pass the user details and orders to the view
            return view('client.clientDetails', [
                'message' => $message,
                'user' => $user,
                'orders' => $orders,
            ]);
        }
    
    
}
