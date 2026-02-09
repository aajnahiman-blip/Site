@extends('welcome')
@section('title', 'Contact')
@section('centinu')
<div class="wil container mt-5">
    <h1 class="text-center mb-4">Contactez-nous</h1>
    <p class="text-center mb-5">
        N’hésitez pas à nous contacter pour toute question, suggestion ou demande d’information.
        Notre équipe est à votre écoute et se fera un plaisir de vous répondre dans les plus brefs délais.
    </p>
    <div class="row">
        <!-- Informations -->
        <div class="col-md-5 mb-4">
            <h4>Nos coordonnées</h4>
            <p><strong>Email :</strong> contact@aibijoux.com</p>
            <p><strong>Téléphone :</strong> +212 6 12 34 56 78</p>
            <p><strong>Adresse :</strong> Casablanca, Maroc</p>
        </div>
        <div class="col-md-7">
            <h4>Formulaire de contact</h4>
             <form>
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Votre email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" rows="4" placeholder="Votre message"></textarea>
                </div>
                <button class="btn-custom ">Envoyer</button><br><br>
            </form>
        </div>
    </div>
</div><br><br>
@endsection
