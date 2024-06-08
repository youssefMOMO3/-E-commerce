@extends('Admin.__listCmd')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="text-body">Nestlé | Détails du Client {{ $user->name }}</h4>
        </div>
        <div class="card-body">
            <h5>Liste des Commandes {{ $user->name }}</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Commande</th>
                        <th>Nom du Client</th>
                        <th>Téléphone du Client</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix Total</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $order->product_title}}</td>
                            <td>{{ $order->qte }}</td>
                            <td>{{ $order->qte * $order->price }} DH</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12 mb-3">
                <button onclick="window.print()" class="btn btn-primary">
                    <i class="fas fa-print"></i> <!-- Icône d'impression -->
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
