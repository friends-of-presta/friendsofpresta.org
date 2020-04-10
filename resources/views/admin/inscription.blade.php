@extends('layouts.app')

@section('content')
    <div class="container-fluid p-1 px-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.inscriptions') }}">Inscriptions</a></li>
                <li class="breadcrumb-item active text-uppercase" aria-current="page">{{ $inscription->societe }}</li>
            </ol>
        </nav>

        <h1 class="mb-2 text-uppercase">{{ $inscription->societe }} <span
                    class="badge badge-{{ $status[$inscription->status]['color'] }}">{{ $inscription->status }}</span>
        </h1>

        <h2 class="mb-1">Informations</h2>
        <table class="table table-striped">
            <tbody>
            <tr>
                <td class="w-25">ID</td>
                <td>{{ $inscription->id }}</td>
            </tr>
            @if($inscription->url)
                <tr>
                    <td class="w-25">Boutique</td>
                    <td><a target="_blank" href="{{ $inscription->url }}">{{ $inscription->url }}</a></td>
                </tr>
            @endif
            @can('viewDetails', $inscription)
                <tr>
                    <td>Nom</td>
                    <td>{{ $inscription->nom }}</td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td>{{ $inscription->prenom }}</td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td>{{ $inscription->telephone }}</td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>{{ $inscription->email }}</td>
                </tr>
            @endcan
            <tr>
                <td>Forme juridique</td>
                <td>{{ $inscription->statut }}</td>
            </tr>
            <tr>
                <td>Société</td>
                <td>{{ $inscription->societe }}</td>
            </tr>
            <tr>
                <td>SIREN</td>
                <td>{{ $inscription->siren }}</td>
            </tr>
            <tr>
                <td>Salariés</td>
                <td>{{ $inscription->salaries }}</td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td>{{ $inscription->adresse }}</td>
            </tr>
            <tr>
                <td>Code postal</td>
                <td>{{ $inscription->cp }}</td>
            </tr>
            <tr>
                <td>Ville</td>
                <td>{{ $inscription->ville }}</td>
            </tr>
            <tr>
                <td>Commentaires</td>
                <td>{{ $inscription->commentaires }}</td>
            </tr>
            </tbody>
        </table>

        @if($inscription->user)
            <h2 class="mb-1">Expert PrestaShop</h2>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td class="w-25">Identité</td>
                    <td><a href="mailto:{{ $inscription->user->email }}">{{ $inscription->user->name }}</a></td>
                </tr>
                <tr>
                    <td>Société</td>
                    <td>
                        @if($inscription->user->url)
                            <a target="_blank"
                               href="{{ $inscription->user->url }}">{{ $inscription->user->company }}</a>
                        @else
                            {{ $inscription->user->company }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Ville</td>
                    <td>{{ $inscription->user->city }}</td>
                </tr>
                <tr>
                    <td>Département</td>
                    <td>{{ $inscription->user->department }}</td>
                </tr>
                </tbody>
            </table>
        @endif

        <h2 class="mb-1">Actions</h2>
        @if (!$inscription->user and Auth::user()->can('update', $inscription))
            <form method="POST" action="{{ route('admin.inscription', ['inscription' => $inscription]) }}">
                @csrf
                @method('PUT')

                <div class="form-row">
                    <div class="col-md-8">
                        <select name="attribution" required value="{{ old('attribution') }}" class="custom-select form-control @error('attribution') is-invalid @enderror">
                            <option value="">-- Choisir un expert</option>
                            @foreach($userlist as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="btn-group w-100">
                            <button type="submit" class="btn btn-info">Attribuer</button>
                            <a href="{{ route('admin.inscription.status', ['inscription' => $inscription, 'status' => 'abandonné']) }}" class="btn btn-dark">Abandonner</a>
                        </div>
                    </div>
                </div>
            </form>
        @endif
        @can('updateStatus', [$inscription, 'en ligne'])
            <a href="{{ route('admin.inscription.status', ['inscription' => $inscription, 'status' => 'en ligne']) }}" class="w-100 btn btn-success">En ligne</a>
        @endcan
    </div>
@endsection
