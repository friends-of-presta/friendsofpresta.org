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

        <div class="sticky-top bg-light pt-1 px-1 rounded-bottom shadow-sm">
            <form method="get" action="{{ route('admin.inscriptions') }}">
                <div class="form-row">
                    <div class="col-md-1">
                        <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ $request->get('id') }}" placeholder="Id" />
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="societe" class="form-control @error('societe') is-invalid @enderror" value="{{ $request->get('societe') }}" placeholder="Société" />
                    </div>
                    <div class="col-md-3">
                        <select name="status" class="custom-select form-control @error('status') is-invalid @enderror">
                            <option value="">-- Choisir un status</option>
                            @foreach($status as $statut)
                            <option class="text-capitalize" value="{{ $statut }}" @if($statut == $request->get('status')) selected @endif>{{ $statut }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="attribution" class="custom-select form-control @error('attribution') is-invalid @enderror">
                            <option value="">-- Choisir un expert</option>
                            @foreach($userlist as $user)
                                <option value="{{ $user->id }}" @if($user->id == $request->get('attribution')) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="cp" class="form-control @error('cp') is-invalid @enderror" value="{{ $request->get('cp') }}" placeholder="Code postal (ex : 95, 950001)" />
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="w-100 btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-center mt-1">
                <div class="mx-auto">{{ $inscriptionlist->appends($request->validated())->links() }}</div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Société</th>
                <th scope="col">CP</th>
                <th scope="col">Ville</th>
                <th scope="col">Expert</th>
                <th scope="col">Agence</th>
                <th scope="col">Ville</th>
                <th scope="col">Etat</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inscriptionlist as $inscription)
                <tr>
                    <th scope="row">{{ $inscription->id }}</th>
                    @if($inscription->slug)
                    <td class="text-uppercase"><a target="_blank" href="https://{{ $inscription->slug }}.ecommerce-solidaire.fr">{{ $inscription->societe }}</a></td>
                    @else
                    <td class="text-uppercase">{{ $inscription->societe }}</td>
                    @endif
                    <td>{{ $inscription->cp }}</td>
                    <td>{{ $inscription->ville }}</td>
                    <td>{{ $inscription->user ? $inscription->user->name : '' }}</td>
                    <td>{{ $inscription->user ? $inscription->user->company : '' }}</td>
                    <td class="text-nowrap">{{ $inscription->user ? $inscription->user->city . ' (' . $inscription->user->department . ')' : '' }}</td>
                    <td>{{ $inscription->status }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button disabled data-toggle="tooltip" data-placement="top" title="Soon" type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
