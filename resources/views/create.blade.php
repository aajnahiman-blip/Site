@extends('welcome')

@section('title','Ajouter produit')

@section('centinu')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6" >
            @include('incs.flash')
            <div class="card shadow-lg border-0 rounded-4" style="background-color:#dde5f0 ">
                
                <div class="card-header text-center bg-primary text-white rounded-top-4">
                    <h4 class="mb-0"> Ajouter un produit</h4>
                </div>

                <div class="card-body p-4">
                    <form action="/produits" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nom -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nom du produit</label>
                            <input type="text" name="titre" class="form-control rounded-3"
                                   placeholder="Ex: Bracelet diamant" required>
                                   @error('titre')
                                       {{ $message }}
                                    @enderror
                        </div>

                        <!-- Prix -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Prix</label>
                            <input type="number" step="0.01" name="prix"
                                   class="form-control rounded-3"
                                   placeholder="Ex: 4500.00" required>
                                   @error('prix')
                                   {{ $message }}
                                @enderror
                        </div>

                        <!-- Catégorie -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Catégorie</label>
                            <input type="text" name="categorie"
                                   class="form-control rounded-3"
                                   placeholder="Ex: bracelet" required>
                                   @error('categorie')
                                       {{ $message }}
                                @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" rows="3"
                                      class="form-control rounded-3"
                                      placeholder="Description du produit..." required></textarea>
                            @error('description')
                                       {{ $message }}
                                @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Image du produit</label>
                            <input type="file" name="image" class="form-control rounded-3" required>
                        </div>

                        <!-- Button -->
                        <div class="d-grid">
                            <button type="submit"
                                    class="btn btn-primary btn-lg rounded-3 shadow-sm">
                                Ajouter le produit
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
