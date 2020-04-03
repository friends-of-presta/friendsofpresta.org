@extends('layouts.app')

@section('content')
<div class="container-fluid p-1 px-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inscriptions</li>
        </ol>
    </nav>

    <h1 class="mb-2">Inscriptions</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Société</th>
            <th scope="col">Slug</th>
            <th scope="col">CP</th>
            <th scope="col">Ville</th>
            <th scope="col">Expert</th>
            <th scope="col">Agence</th>
            <th scope="col">Ville</th>
            <th scope="col">Etat</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($inscriptionlist as $inscription)
            <tr>
                <th scope="row">{{ $inscription->id }}</th>
                <td class="text-uppercase">{{ $inscription->societe }}</td>
                <td><a target="_blank" href="https://{{ $inscription->slug }}.ecommerce-solidaire.fr">{{ $inscription->slug }}</a></td>
                <td>{{ $inscription->cp }}</td>
                <td>{{ $inscription->ville }}</td>
                <td>{{ $inscription->user ? $inscription->user->name : '' }}</td>
                <td>{{ $inscription->user ? $inscription->user->company : '' }}</td>
                <td class="text-nowrap">{{ $inscription->user ? $inscription->user->city . ' (' . $inscription->user->department . ')' : '' }}</td>
                <td>{{ $inscription->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="fixed-bottom bg-light pt-1">
    {{ $inscriptionlist->links() }}
    </div>
</div>
@endsection
