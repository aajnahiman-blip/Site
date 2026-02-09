
@extends('welcome')

@section('title', $produit->titre)

@section('content')
<div class="container mt-5">
    <h1>{{ $produit->titre }}</h1>
    <img src="{{ $produit->image }}" class="img-fluid mb-3" alt="{{ $produit->titre }}">
    <p>{{ $produit->contenu }}</p>
    <a href="/produits" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
