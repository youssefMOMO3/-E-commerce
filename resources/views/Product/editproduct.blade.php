@extends('Admin.__product')
@section('content')
<form method="POST" action="{{route('Produits.update',$data->id)}}" enctype="multipart/form-data" >
  @csrf
  <div class="col">
    {{-- <label for="file" ><i id="lab" class="bi bi-plus-square-fill"></i></label> --}}
      
      <label for="file" id="lab"><img id="img" src='{{asset("images/product/$data->avatar")}}'  class="img-thumbnail" style="width: 120px; height:120px;"></label>
    <input type="file" name="avatar" onchange="changeImg(event)" id="file" value="{{old('avatar',$data->avatar)}}" class="rounded float-start hiden">
     </div>
    <div class="row pt-12">
      <div class="col" id="lol">
      </div>
      <div class="col-5">
          <label class="form-label">Nom </label>
        <input type="text" name="name" value="{{old('name',$data->name)}}" class="form-control" placeholder="nom du produit">
      </div>
      <div class="col-5">
          <label class="form-label">Size</label>
        <input type="text" name="size" value="{{old('size',$data->size)}}" class="form-control" placeholder="size">
      </div>
    </div>
 
    <div class="row pt-5">
        <div class="col">
          </div>
          <div class="col-5">
              <label class="form-label">Prix</label>
            <input type="number" name="price" value="{{old('price',$data->price)}}" class="form-control" placeholder="price">
          </div>
          <div class="col-5">
              <label class="form-label">Quantite</label>
            <input type="text" name="Qte" value="{{old('Qte',$data->Qte)}}" class="form-control" placeholder="Qte">
          </div>
    </div>
    <div class="row pt-5">
        <div class="col">

        </div>
        <div class="col-5">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" aria-label="With textarea" placeholder="description">{{old('description',$data->description)}}</textarea>
        </div>
        <div class="col-5">
            <label>La Marque</label>
          <input type="text" name="marke" value="{{old('marke',$data->marke)}}" class="form-control" placeholder="Marke">
        </div>
    </div>
    <div class="row pt-4" style="margin-left: 156px">
        <div class="col">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </div>



  </form>
@endsection
