@extends('layouts.app')

@section('title', "Utilisateurs")

@section('content')
    <div class="container-fluid p-1 px-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Utilisateurs</li>
            </ol>
        </nav>

        <h1 class="mb-2">Utilisateurs</h1>

        <div class="sticky-top bg-light pt-1 px-1 rounded-bottom shadow-sm">
            <form method="get" action="{{ route('admin.users') }}">
                <div class="form-row">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $request->get('name') }}" placeholder="Identité" />
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ $request->get('company') }}" placeholder="Société" />
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="department" class="form-control @error('department') is-invalid @enderror" value="{{ $request->get('department') }}" placeholder="Département" />
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $request->get('city') }}" placeholder="Ville" />
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="w-100 btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-center mt-1">
                <div class="mx-auto">{{ $userlist->appends($request->validated())->links() }}</div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Société</th>
                <th scope="col">Ville</th>
                <th scope="col">Département</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($userlist as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td><a target="_blank" href="{{ $user->url }}">{{ $user->company }}</a></td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->department }}</td>
                    <td>
                        @if($user->email)
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="mailto:{{ $user->email }}" class="btn btn-secondary btn-sm"><i class="fas fa-envelope"></i></a>
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
