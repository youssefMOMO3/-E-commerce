<?php
namespace App\Http\Controllers\Commande;
use App\Http\Controllers\Controller;
use App\Models\message;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\order;
use App\Http\Requests\Command\requestcommand;

class commande extends Controller
{

    public function index()
    {

        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $status=order::select('*')->get();
        $data=order::select('*')->where('statuscmd','!=','livree')->get();

        foreach($status as $row){

            if($row->statuscmd!="livree"){

                return view('Command.index',['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
            }



        }
        return view('Command.index',['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);


    }
    public function captenlog(){
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $livre=order::select('*')->where('statuscmd','livree')->get();
        $status=order::select('*')->get();
        foreach($status as $row){
            if($row->statuscmd=="livree"){


                return view('Command.comendlivre',['livre'=>$livre,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
            }

        }
        return view('Command.comendlivre',['livre'=>$livre,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);


    }
    public function softDelet()
    {$message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $data=order::onlyTrashed()->select("*")->get();
        return view('Command.archivecommand',['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
    }
    public function rolleback(string $id)
    {order::query()->withTrashed()->findOrFail($id)->restore();

        return redirect(route('Commond.softDelet'));
    }
    public function Forcedestroy(string $id)
    {
        order::query()->withTrashed()->findOrFail($id)->ForceDelete();

        return redirect(route('Commond.index'));
    }

    public function edit(string $id)
    {
        $message =message::query()->select()->orderBy('created_at','desc')->get();
        $clients = User::Where("role","client")->count();
        $products = ProductModel::select("*")->count();
        $orderliv=order::query()->select('id')->where('statuscmd','=','livree')->count();
        $orders=order::query()->select('id')->where('statuscmd','=','En attente')->count();
        $data=order::select('*')->findOrFail($id);
        return view("Command.editcommand",['data'=>$data,'orderliv'=>$orderliv,'orders'=>$orders,'message'=>$message,'clients'=>$clients,'products'=>$products]);
    }
    public function update(requestcommand $request, string $id)
    {
        $data =order::query()->find($id);
        $validated = $request->validated();

        $data->update($validated);

        return redirect(route('Commond.index'));
    }

    public function destroy(string $id)
    {
        order::query()->findOrFail($id)->delete();
        return redirect(route('Commond.livree'));
    }
}
