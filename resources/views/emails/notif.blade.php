@extends('layouts.mail')

@section('title', "Contact via le mini-site Ecommercesolidaire")

@section('content')
    <p>{{ $validated['prenom'] }} {{ $validated['nom'] }} vous a contacté via notre mini-site Ecommercesolidaire</p>
    <table>
        <tr>
            <td>Son nom</td>
            <td>{{ $validated['nom'] }}</td>
        </tr>
        <tr>
            <td>Son prénom</td>
            <td>{{ $validated['prenom'] }}</td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td>{{ $validated['telephone'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $validated['email'] }}</td>
        </tr>
        <tr>
            <td>Société</td>
            <td>{{ $validated['societe'] }}</td>
        </tr>
        <tr>
            <td>Siren</td>
            <td>{{ $validated['siren'] }}</td>
        </tr>
        <tr>
            <td>Salaries</td>
            <td>{{ $validated['salaries'] }}</td>
        </tr>
        <tr>
            <td>Statut</td>
            <td>{{ $validated['statut'] }}</td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td>{{ $validated['adresse'] }}</td>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td>{{ $validated['cp'] }}</td>
        </tr>
        <tr>
            <td>Ville</td>
            <td>{{ $validated['ville'] }}</td>
        </tr>
        <tr>
            <td>Commentaires</td>
            <td>{{ $validated['commentaires'] }}</td>
        </tr>
    </table>
@endsection