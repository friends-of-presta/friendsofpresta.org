@extends('layouts.app')

@section('title', "Inscriptions stats")

@section('content')
    <div class="container-fluid p-1 px-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.inscriptions') }}">Inscriptions</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stats</li>
            </ol>
        </nav>

        <h1 class="mb-2">Stats</h1>

        <div class="sticky-top bg-light pt-1 px-1 rounded-bottom shadow-sm">
            <div class="d-flex flex-row justify-content-center mt-1">
                <div class="mx-auto">{{ $userlist->links() }}</div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Société</th>
                <th><span class="badge badge-{{ $status['création en cours']['color'] }}">Création en cours</span></th>
                <th><span class="badge badge-{{ $status['en ligne']['color'] }}">En ligne</span></th>
                <th>Total</th>
            </tr>
            </thead>
            @foreach($userlist as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->company }}</td>
                    <td>{{ $user->inprogress }}</td>
                    <td>{{ $user->online }}</td>
                    <td>{{ $user->total }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
