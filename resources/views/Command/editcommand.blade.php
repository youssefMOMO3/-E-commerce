@extends('Admin.__product')
@section('content')
<form method="post" action="{{route('Commond.update',$data->id)}}" >
  @csrf
  
    <div class="row pt-12">
        <div class="col-5">
            <label class="form-label">Nom </label>
          <input type="text" name="name" value="{{old('name',$data->product_title)}}" class="form-control" placeholder="nom du produit">
        </div>
      <div class="col-5">
          <label class="form-label">Phone</label>
        <input type="text" name="phone" value="{{old('phone',$data->phone)}}" class="form-control" placeholder="phone">
      </div>
      <div class="col-5" >
        <label class="form-label">Adresse</label>
        <input type="text" name="adriss" value="{{old('adriss',$data->adriss)}}" class="form-control" placeholder="adriss">
      </div>
      <div class="col-5">
        <label class="form-label">Qte</label>
        <input type="hidden" name="product_title" value="{{old('product_title',$data->product_title)}}" class="form-control" placeholder="product_title">
        <input type="text" name="qte" value="{{old('qte',$data->qte)}}" class="form-control" placeholder="qte">
      </div>
    </div>
 
    <div class="row pt-5">
        

          <div class="col-5">
            <label class="form-label">Prix</label>
            <textarea name="price" class="form-control" aria-label="With textarea" placeholder="price">{{old('price',$data->price)}}</textarea>
          </div>
          <div class="col-5">
            <label>Statut commande</label>
            <select name="statuscmd" class="form-control">
              <option value="">{{ old('statuscmd', $data->statuscmd) }}</option>
              <option value="en cours" {{ old('statuscmd', $data->statuscmd) == 'en cours' ? 'selected' : '' }}>en cours</option>
              <option value="livree" {{ old('statuscmd', $data->statuscmd) == 'livree' ? 'selected' : '' }}>livrée</option>
          </select>
        </div>

    </div>
    <div class="row pt-5">
        
        <div class="col-5">
            <label> Statut payment</label>
            <select name="statuspay" class="form-control">
                <option>{{old('statuspay',$data->statuspay)}}</option>
                <option >payé</option>
            </select>
{{--          <input type="text" name="statuspay" value="{{old('statuspay',$data->statuspay)}}" class="form-control" placeholder="status de payement">--}}
          
        </div>
        <div class="col-5">
            <label>Date livre</label>
          <input type="date" name="dateLiv" value="{{old('dateLiv',$data->dateLiv)}}" class="form-control" placeholder="date de livraison">
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-5">
            <label>Categorie</label>
            <input type="text" name="marke" value="{{old('marke',$data->marke)}}" class="form-control" placeholder="Marke">
        </div>
        <div class="col-5">
            <label>Size</label>
          <input type="text" name="size" value="{{old('size',$data->size)}}" class="form-control" placeholder="Marke">
          <input type="hidden" name="idpro" value="{{old('idpro',$data->idpro)}}"  placeholder="Marke">
        </div>
        
    </div>
    <div class="row pt-4" >
        <div class="col-2">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </div>



  </form>
@endsection
