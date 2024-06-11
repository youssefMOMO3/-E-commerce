<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\message;
use App\Models\order;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Symfony\Component\HttpFoundation\Session\Session;class ClientSide extends Controller
{
    //landing page product
    public function product(){
        $product = ProductModel::query()->select("*")->get();
        return view('client.dashboard',["product"=>$product]);
    }
    //recherche d'un produit
    public function rechercher(Request $request)
    {
        $search = $request->search;
        $product = ProductModel::query()->where('name',"like","%{$search}%")
            ->orWhere('marke','like',"%{$search}%")
            ->orderby('id','ASC')->paginate(100);
        if ($product){
            return view('client.dashboard',['product'=>$product]);
        }else{
            return redirect(view('client.dashboard'))->with('status', "désolé nous n'avons pas encore ce produit");
        }

    }
    //detail de produit landing page
    public function voirProduit($id){
        $data = ProductModel::select()->where('id','=',$id)->get();
        return view("client.moreinfo",["data"=>$data]);
    }

    //
    public function addcart(Request $request,$id)
    {
        if (Auth::id()){ //if user connected yes
            $users = auth()->user(); //get info of user
//            dd($users);
            $product = ProductModel::find($id);
            $countproduct=ProductModel::select("Qte")->find($id); //get qte of product by id
            if ($request->qte >$countproduct->Qte){
                return redirect()->back()->with('status','on a pas cette qantiter dans le stock');
            }

            //qte user < qte product
            $cart = new card();
            $cart->username=$users->name;
            $cart->qte=$request->qte;
            $cart->name = $users->id;
            $cart->userid=$users->id;
            $cart->adriss = $users->adriss;
            $cart->idpro=$product->id;
            $cart->size=$product->size;
            $cart->avatar=$product->avatar;
            $cart->marke=$product->marke;
            $cart->phone = $users->phone;
            $cart->product_title = $product->name;
            $cart->price = $product->price;
            $cart->color = $request->color;
            $cart->save();
            return redirect(route('client.card'));
        }else{ //user don't have account
            return redirect('register');
        }
    }

    // affichage de data
    public function card_data(){
        $card =card::query()->select("*")->where('name',Auth::id())->get();
        return view('Client.card',['card'=>$card]);
    }

    //suppression de produit de panier
    public function deleteitem($id){
        card::query()->where('id',$id)->delete();
        return redirect(route('client.card'));
    }

    //modification la qte de produit
    public function modifyItem($id){
        $card=card::query()->select("*")->where('id',"=",$id)->get();
        return view('client.modifyqte',['card'=>$card]);
    }

    // update de nouvell qte
    public function updateItem(Request $request,$id){
        $card = card::query()->find($id);
        $card->qte=$request->input('qte');
        $card->save();
//        dd($card);
        return redirect(route('client.card'));

    }

    //confirmation de commande
    public function confirme(Request $request){

        //get data of user
        $userID = Auth::id(); //1
        $card=card::where('name',$userID)->get(); // name = iduser 1
        foreach ($card as $c) {
            $order = new order();
            $order->name=$c['name'];
            $order->userid=$c['userid'];
            $order->username=$c['username'];
            $order->idpro = $c['idpro'];
            $order->adriss = $c['adriss'];
            $order->phone = $c['phone'];
            $order->product_title = $c['product_title'];
            $order->marke = $c['marke'];
            $order->size = $c['size'];
            $order->qte = $c['qte'];
            $order->price = $c['price'];
            $order->color=$c['color'];
            $order->save();
        }

        //decrement the qte pro
        $cmd= card::select('idpro')->get();
        if($cmd){
            $cmd=card::select("*")->get();
            foreach ($cmd as $a){
                $card = card::select('qte','id','idpro') // qte id ipro
                    ->where('id',$a->id)->sum('qte'); // how many qte that user made form prduct where id = id 10
                $product=ProductModel::query()->select("Qte","id")->where("id",$a->idpro)->decrement("Qte",$card);
            }
        }

        card::where('name',$userID)->delete();
        return redirect((route('client.monCmd')));

    }

    //suivre la commande actuelle
    public function consult(){
        $userid =Auth::id();
        $data = order::query()->select("*")->where('userid','=',$userid)->orderBy('id','desc')->paginate(5);
        return view('Client.consulting',['data'=>$data]);
    }

    //recherche la commande
    public function  recherchecmd(Request $request){
        $userid=Auth::id();
        $search=$request->search;
        $data=order::query()->select("*")->where('name',$userid)
            ->where('product_title',"like","%{$search}")
            ->orWhere('statuspay','like',"%{$search}%")
            ->orWhere('statuscmd','like',"%{$search}%")->orderBy('id','desc')->paginate(5);
        return view('client.consulting',['data'=>$data]);
    }

    //recherche dans l'historique de commande
    public function  recherchehis(Request $request){
        $userid =Auth::id();
        $search=$request->search;
        $data=order::query()->select("*")->where('name',$userid)->where('product_title',"like","%{$search}")
            ->orWhere('statuspay','like',"%{$search}%")
            ->orWhere('created_at','like',"%{$search}%")
            ->orWhere('statuscmd','like',"%{$search}%")
            ->orderBy('id','desc')->paginate(5);
        return view('client.consulting',['data'=>$data]);
    }
    // le historique de cmd

    public function historiquecmd(){
        $userID =Auth::id();
        $commande = order::query()->select("*")->where('userid','=',$userID)->where('statuscmd','=','livree')->where('statuspay','payé')->paginate(5);
        return view('Client.historiqueC',['commande'=>$commande]);
    }

    //retour a la page de mon card
    public function show(){
        return redirect(route('client.card'));
    }

    //retourn a lapage de mon cmd
    public function showcmd(){
        return redirect(route('client.monCmd'));
    }
    public function message(Request $request){
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->suject = $request->sujet;
        $message->description = $request->description;
        $message->save();
    
        return redirect()->back()->with('status', 'Merci pour votre message');
    }
    
}