@extends('Admin.__product')
@section('content')
<form method="POST" action="{{route('Produits.store')}}" enctype="multipart/form-data" >
  @csrf
  <div class="col">
    @if($errors->any())
    <div class="alert alert-danger">
       <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
      </ul>
    </div>
     
      @endif
      
      <label for="file" id="labc"><img id="imgc" src="{{asset('images/defualt/imgd.svg')}}"  class="img-thumbnail" style="width: 120px; height:120px;"></label>
    <input type="file"  name="avatar" onchange="createImage(event)" id="file"  class="rounded float-start hiden">
     </div>
    <div class="row pt-12">
        <div class="col">
           </div>
      <div class="col-5">
          <label class="form-label">Nom </label>
        <input type="text" name="name" class="form-control" placeholder="nom du produit">
      </div>
      <div class="col-5">
          <label class="form-label">Size</label>
        <input type="text" name="size" class="form-control" placeholder="size">
      </div>
    </div>

    <div class="row pt-5">
        <div class="col">
            
          </div>
          <div class="col-5">
              <label class="form-label">Prix/DH</label>
            <input type="number" name="price" class="form-control" placeholder="prix de produit">
          </div>
          <div class="col-5">
              <label class="form-label">Qte</label>
            <input type="text" name="Qte" class="form-control" placeholder="Qte du produit">
          </div>
    </div>
    <div class="row pt-5">
        <div class="col">
            
        </div>
        <div class="col-5">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" aria-label="With textarea" placeholder="description"></textarea>
        </div>
        <div class="col-5">
          <label class="form-label">Categorie</label>
          <select name="marke" class="form-select">
              <option value="" disabled selected>Choose category</option>
              <option value="Dairy">Dairy</option>
              <option value="Coffee">Coffee</option>
              <option value="CPW">CPW</option>
              <option value="Nutrition">Nutrition</option>
              <option value="Confiserie">Confiserie</option>
              <option value="Culinaire">Culinaire</option>
          </select>
      </div>
      
    </div>
    <div class="row pt-4" style="margin-left: 156px">
        <div class="col">
        <input type="submit" class="btn btn-primary" value="Create">
        </div>
    
    </div>



  </form>
@endsection