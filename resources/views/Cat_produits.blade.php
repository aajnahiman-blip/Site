@extends('welcome')

@section('title', 'La catégorie : ' . ucfirst($categorie))

@section('centinu')
<div class="container mt-5">

    <h1 class="mb-4 text-center" style="font-weight: 600; color: #333;">
        Produits de la catégorie
        <span style="color: #555">{{ ucfirst($categorie) }}</span>
    </h1>

    <div class="row">
        @if(isset($produits) && $produits->count() > 0)

            @foreach($produits as $p)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card shadow  text-center" style="background-color: #cde2fc">
                       
                        <img src="{{ asset('images/' . $p->image) }}" 
                             alt="{{ $p->titre }}" 
                             class="card-img-top" 
                             style="height: 200px; object-fit: cover;">

                        <div class="card-body ">
                            <h5 class="card-title">{{ $p->titre }}</h5>
                            <p class="card-text flex-grow-1">{{ $p->description }}</p>
                            <b style="font-weight: bold; background-color: #198754; color: #fff; padding: 4px 8px; border-radius: 4px;">
                                {{ $p->prix }} DH
                            </b>
                            <a href="/produit/{{ $p->id }}" class="btn btn-primary w-100 mt-3">
                                Ajouter au panier
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
            {{ $produits->links('pagination') }}

        @else
            <p class="text-center">Aucun produit dans cette catégorie.</p>
        @endif
    </div>
    
</div>
@endsection



