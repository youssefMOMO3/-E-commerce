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
          <label for="marke" class="form-label">Categorie</label>
          <select name="marke" id="marke" class="form-select">
              <option value="" disabled {{ old('marke', $data->marke) == '' ? 'selected' : '' }}>Choose category</option>
              <option value="Dairy" {{ old('marke', $data->marke) == 'Dairy' ? 'selected' : '' }}>Dairy</option>
              <option value="Coffee" {{ old('marke', $data->marke) == 'Coffee' ? 'selected' : '' }}>Coffee</option>
              <option value="CPW" {{ old('marke', $data->marke) == 'CPW' ? 'selected' : '' }}>CPW</option>
              <option value="Nutrition" {{ old('marke', $data->marke) == 'Nutrition' ? 'selected' : '' }}>Nutrition</option>
              <option value="Confiserie" {{ old('marke', $data->marke) == 'Confiserie' ? 'selected' : '' }}>Confiserie</option>
              <option value="Culinaire" {{ old('marke', $data->marke) == 'Culinaire' ? 'selected' : '' }}>Culinaire</option>
          </select>
      </div>
      
    </div>
    <div class="row pt-4" style="margin-left: 156px">
        <div class="col">
          <button type="submit" class="btn btn-outline-primary">
            <i class="bi bi-save"></i>
          </button>
          
        </div>
    </div>



  </form>
@endsection
