@extends('Admin.__listCmd')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="text-body">Nestlé | Détails du Client</h4>
        </div>
        <div class="card-body">
            <h5>Informations du Client</h5>
            <p><strong>Nom:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Adresse:</strong> {{ $user->adriss }}</p>
            <p><strong>Ville:</strong> {{ $user->city }}</p>
            <p><strong>Pays:</strong> {{ $user->contry }}</p>
            <p><strong>Code Postal:</strong> {{ $user->pinecode }}</p>
            <p><strong>Téléphone:</strong> {{ $user->phone }}</p>
            <hr>
            <h5>Liste des Commandes</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Commande</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Qantité</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->statuscmd }}</td>
                            <td>{{$order->qte}}</td>
                            <td>{{$order->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection