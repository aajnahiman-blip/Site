<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class AddProduitRequest extends FormRequest
{
 public function authorize()
 {
 // Mettre à true si tout le monde est autorisé à soumettre ce
//formulaire
 // ou définir une logique d’autorisation selon vos besoins.
 return true;
 }
 public function rules()
 {
 return [
 'titre' => 'required|min:5',
 'prix'=> 'required|min:3',
 'categorie'=> 'required|min:4',
 'description' => 'required|min:10',
 'image' => 'required|image|max:2048',
 // Par exemple, obliger l’utilisateur à charger une image
//de max 2 Mo
 ];
 }
 public function messages()
 {
 return [
 'titre.required' => 'Le titre est obligatoire.',
 'titre.min' => 'Le titre doit comporter au moins 5
caractères.',
 'prix.required'=>'Le prix est obligatoire.',
  'titre.min' => 'Le prix doit comporter au moins 3
nomber.',

'categorie.required'=>'Categorie est obligatoire.',
  'titre.min' => 'Categorie doit comporter au moins 4
caractères.',

 'description.required' => 'Le contenu est obligatoire.',
 'description.min' => 'Le contenu doit contenir au moins
10 caractères.',

 'image.required' => 'Veuillez sélectionner une image.',
 'image.image' => 'Le fichier doit être une image
(jpeg, png,jpg, etc.).',
 'image.max' => 'L’image ne doit pas dépasser 2 Mo.',
 ];
 }
}