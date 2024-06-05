@extends('Admin.__listclient')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="text-body">Liste des Commandes de {{ $client->name }}</h4>
            </div>
            <div class="card-body">
                <nav class="navbar">
                    <div class="container-fluid mb-3" style="margin-top: 10px">
                        <a class="navbar-brand"></a>
                        <form class="d-flex" action="{{ route('admin.clientDetials', ['id' => $client->id]) }}" method="get">
                            <input style="width: 400px" class="form-control me-2" type="search" placeholder="Search" name="search">
                            <button class="btn btn-outline-success" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </nav>
                <table class="table mt-5">
                    <tr style="text-align: center">
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Produit</th>
                        <th>Categorie</th>
                        <th>Quantité</th>
                        <th>Prix Total</th>
                        <th>Statut De Commande</th>
                        <th>Statut De Payement</th>
                        <th>Date De Livraison</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($orders as $order)
                    <tr style="text-align: center">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->product_title }}</td>
                        <td>{{ $order->marke }}</td>
                        <td>{{ $order->qte }}</td>
                        <td>{{ $order->price }} DH</td>
                        <td>{{ $order->statuscmd }}</td>
                        <td>{{ $order->statuspay }}</td>
                        <td>
                            @if($order->dateLiv === null)
                                En cours
                            @else
                                {{ $order->dateLiv }}
                            @endif
                        </td>
                        <td>
                            <!-- Ajoutez ici les actions pour chaque commande si nécessaire -->
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <span style="margin-left: 500px">{{ $commande->links() }}</span>
        </div>
    </div>
@endsection
