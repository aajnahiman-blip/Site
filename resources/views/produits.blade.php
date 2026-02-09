@extends('welcome')

@section('title', 'Liste des Produits')

@section('centinu')
<div class="container mt-5">
    <h1 class="text-center mb-4">Nos Produits</h1>

    <div class="row">
        @if(isset($produits) && $produits->count() > 0)

            @foreach($produits as $produit)
                
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card shadow  text-center" style="background-color: #cde2fc">

                       <img src="{{ asset('image/' . $produit->image) }}" 
                             alt="{{ $produit->titre }}" 
                             class="card-img-top" 
                             style="height: 200px; object-fit: cover;">


                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->titre }}</h5>
                           <p class="card-text flex-grow-1">{{ $produit->description }}</p>
                             <b style="font-weight: bold; background-color: #198754; color: #fff; padding: 4px 8px; border-radius: 4px;">
                                {{ $produit->prix }} DH
                            </b>

                            <a href="/produit/{{ $produit->id }}" class="btn btn-primary w-100 mt-3">
                                Ajouter au panier
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
            {{ $produits->links() }}

        @else
            <p class="text-center">Aucun produit trouvé.</p>
        @endif
    </div>
</div>
@endsection


